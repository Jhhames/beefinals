<?php

namespace App\Http\Controllers;

use App\Task;
use App\User;
use DateTime;
use App\Leave;
use App\Activity;
use App\Employee;
use App\Training;
use App\Appraisal;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the for Admin application dashboard.
     * in this app, admin has the Model User while employee has the Employee model
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('employer.index')->with([
            'employees' => $this->getEmployees(),
            'admins' => $this->getAdmins(),
            'appraisals' => $this->getAppraisals(),
            'leaves' => $this->getLeave(),
            'pending' => $this->getPending(),
            'tasks' => $this->getTasks(),
            'pendingTasks' => $this->getPendingTasks(),
            'activities' => $this->getActivities(),
            'training' => $this->getTraining()
        ]);
    }

    public function allEmployees(){
        return view('employer.all-employee')->with([
            'employees' => $this->getEmployees()
        ]);
    }
    public function approveLeave(Request $request, $id){
        $leave = Leave::where('id',$id);
        if($leave->exists()){
            $leave->update(['approved'=>1]);
            $activity = new Activity;
            $notification = Auth::user()->name.' approved leave request for '.$leave->first()->employee;
            $activity->addActivity('appraisal', $notification);
            Session::flash('success','Leave Approved');

            return redirect()->back();
        }else{

        }
    }

    public function makeTask(Request $request){
        $this->validate($request,[
            'task' => 'required',
            'description' => 'required|max:500',
            'dueDate' => 'required',
            'employee' => 'required'
        ]);    

        $date = $request->dueDate;
        $dateTimeStamp = DateTime::createFromFormat('d-m-yy',$date);

        $task = new Task;
        $task->task = $request->task;
        $task->description = $request->description;
        $task->assigned_at = Time();
        $task->due_date = $request->dueDate;
        $task->employee = $request->employee;
        $task->employer = Auth::user()->name;
        
        if($task->save()){
            $activity = new Activity;
            $notification = Auth::user()->name.' added new task for '.$request->employee;
            $activity->addActivity('task', $notification);
            Session::flash('success','Task added successfully for '.$request->employee);
            return redirect()->back();
        }else{
            Session::flash('error','Some Error occurred, try again');
            return redirect()->back();
        }
    }

    public function makeTraining(Request $request){
        $this->validate($request,[
            'training' => 'required',
            'description' => 'required|max:500',
            'dueDate' => 'required',
            'employee' => 'required'
        ]);    

        $date = $request->dueDate;
        $dateTimeStamp = DateTime::createFromFormat('d-m-yy',$date);

        $task = new Training;
        $task->name = $request->training;
        $task->description = $request->description;
        $task->assigned_at = Time();
        $task->due_date = $request->dueDate;
        $task->employee = $request->employee;
        $task->employer = Auth::user()->name;
        
        if($task->save()){
            $activity = new Activity;
            $notification = Auth::user()->name.' added new training exercise for '.$request->employee;
            $activity->addActivity('task', $notification);
            Session::flash('success','Training exercise added for '.$request->employee);
            return redirect()->back();
        }else{
            Session::flash('error','Some Error occurred, try again');
            return redirect()->back();
        }
    }

    public function getTasks(){
        return Task::all();        
    }
    public function getTraining(){
        return Training::all();        
    }

    public function getPendingTasks(){
        return Task::where('done',0)->get();        
    }

    public function makeAppraisal(Request $request){

        $this->validate($request, [
            'employee' => 'required',
            'report' => 'required|max:5000',
            'summary' => 'required',
        ]);

        $appraisal = new Appraisal;
        $appraisal->employee = $request->employee;
        $appraisal->employer = Auth::user()->name;
        $appraisal->summary = $request->summary;
        $appraisal->report = $request->report;

        if($appraisal->save()){
            $activity = new Activity;
            $notification = Auth::user()->name.' appraised '.$request->employee;
            $activity->addActivity('appraisal', $notification);
            Session::flash('success', 'You\'ve Appraised '.$request->employee);
            return  redirect()->back();
        }else{
            Session::flash('error','Some Error occurred, try again');
            return redirect()->back();
        }

    }

    public function getAppr(){
        return response()->json($this->getAppraisals(),200);
    }

    public function getLvs(){
        return response()->json($this->getLeave(),200);
    }
    public function getAppraisals(){
        return Appraisal::latest()->get();
    }   

    public function getPending(){
        return Leave::where('approved',0)->latest()->get();
    }

    public function getLeave(){
        return Leave::latest()->get();
    }

    public function updatePassword(Request $request){
        $this->validate($request, [
            'password' => 'required|confirmed'
        ]);

        $password = Hash::make($request->password);

        $user = User::where('id', Auth::user()->id);
        if($user->update(['password'=>$password])){
            Session::flash('success','Password updated');
            return redirect()->back();
        }
    }
    public function addEmployee(Request $request){
        $this->validate($request,[
            'email' => 'required|unique:employees',
            'name' => 'required',
            'position' => 'required',
            'salary' => 'required'
        ]);

        $user = Employee::create([
            'email'=> $request->email,
            'name' => $request->name,
            'salary' => $request->salary,
            'position' => $request->position,
            'password' => Hash::make('default')
        ]);

        if($user){
            $activity = new Activity;
            $notification = Auth::user()->name.' Added new Employee '.$request->name;
            $activity->addActivity('user', $notification);
            Session::flash('success','New Employee added');
            return redirect()->back();
        }else{
            Session::flash('error','Some errors occured, try again');
            return redirect()->back();
        }
    }

    public function addAdmin(Request $request){
        $this->validate($request,[
            'email' => 'required',
            'name' => 'required',
            'position' => 'required',
        ]);

        $user = User::create([
            'email'=> $request->email,
            'name' => $request->name,
            'position' => $request->position,
            'password' => Hash::make('admin')
        ]);

        if($user){
            $activity = new Activity;
            $notification = Auth::user()->name.' added new Admin '.$request->name;
            $activity->addActivity('user', $notification);
            Session::flash('success','New Admin added');
            return redirect()->back();
        }else{
            Session::flash('error','Some errors occured, try again');
            return redirect()->back();
        }
    }

    public function getActivities(){
        $activities = Activity::latest()->get();

        foreach ($activities as $act) {
            $now = Time();

            $timeleft = $this->getTimeLeft($act->time, $now);
            $act->timeLeft = $timeleft;
        }

        // dd($activities);
        return $activities;
    }

    public function dumpTime(){
         var_dump($this->getActivities());
    }

    public function getTimeLeft($start, $stop){
        $timeStampLeft = $stop - $start;

        $wk = $day = $min = $sec = $hr = 0;

        if($timeStampLeft >= 60){
            $min = floor($timeStampLeft / 60);
            $sec = $timeStampLeft % 60;
                
            if($min >= 60 ){
                $hr = floor($min / 60);
                $min = $min % 60;

                if($hr >= 24 ){
                    $day = floor($hr / 24);
                    $hr = $hr % 24;

                    if($day >= 7){
                        $wk = floor($day / 7);
                        $day = $day % 7;
                    }
                }

            }
        }else{
            $sec = $timeStampLeft;
        }

        $timeLeft = [
            'week' => (int)$wk,
            'day' => (int)$day,
            'hour' =>(int)$hr,
            'min' => $min,
            'sec' => $sec,
            'stamp' => $timeStampLeft
        ];

        return $timeLeft;
    }

    public function downloadAppraisal(Request $request, $id){
        // return $id;
        $appraisal = Appraisal::where('id',$id)->first();

        $data = [
            'name' => $appraisal->employee,
            'appraised_by' => $appraisal->employer,
            'summary' => $appraisal->summary,
            'report' => $appraisal->report
        ];

        $pdf = App::make('dompdf.wrapper');

        $pdf->loadView('pdf.appraisal',$data);
        return $pdf->download($data['name'].'.pdf');
    }

    protected function getEmployees(){
        return Employee::latest()->get();
    }

    protected function getAdmins(){
        return User::latest()->get();
    }

}


// "Done with the real programming but putting in html is quite a stress so here is how it goes

// 1. I didn't add an employee sign up(since it didn't make sense for *anyone* with a link to add himself as a company employee, the admin would have to add the employee and on login, he'll add his own additional details";

// "In the admin portal
// (url to login would be beefinals.herokuapp.com/login), he'll be able to
// see all employees and their details, 
// he'll be able to 
// add new employee
// add task for employee
// add new admin aswell
// see new employee appraisal on his TL
// see and approve or reject leave request 
// see tasks and weda they're done or not 
// (not programmed feature) See all company activities
// activites like task done, employee added, admin added, leave added, leave accepted and co
// ";