<?php

namespace App\Http\Controllers;

use App\Task;
use App\User;
use DateTime;
use App\Leave;
use App\Employee;
use App\Appraisal;
use Illuminate\Http\Request;
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
        ]);
    }

    public function approveLeave(Request $request, $id){
        $leave = Leave::where('id',$id);
        if($leave->exists()){
            $leave->update(['approved'=>1]);
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
            Session::flash('success','Task added successfully for'.$request->employee);
            return redirect()->back();
        }else{
            Session::flash('error','Some Error occurred, try again');
            return redirect()->back();
        }
    }

    public function getTasks(){
        return Task::all();        
    }

    public function getPendingTasks(){
        return Task::where('done',0)->get();        
    }

    public function makeAppraisal(Request $request){
        /* 
        fillables for model Appraisal 
        employee, report , employee , summary
        
        */
         
        $this->validate($request, [
            'employee' => 'required',
            'report' => 'required|max:5000',
            'summary' => 'required',
        ]);

        $appraisal = new Appraisal;
        $appraisal->employee = $request->employee;
        $appraisal->employer = Auth::user()->name();
        $appraisal->summary = $request->summary;
        $appraisal->report = $request->report;

        if($appraisal->save()){
            Session::flash('success', 'You\'ve Appraised'.$request->employee);
            return  redirect()->back();
        }else{
            Session::flash('error','Some Error occurred, try again');
            return redirect()->back();
        }

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

    public function addEmployee(Request $request){
        $this->validate($request,[
            'email' => 'required',
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
            Session::flash('success','New Employee added');
            return redirect()->back();
        }else{
            Session::flash('error','Some errors occured, try again');
            return redirect()->back();
        }
    }

    public function getTimeLeft($start, $stop){
        $timeStampLeft = $stop - $start;

        $min = $sec = $hr = 0;

        if($timeStampLeft >= 60){
            $min = floor($timeStampLeft / 60);
            $sec = $timeStampLeft % 60;
                
            if($min >= 60 ){
                $hr = floor($min / 60);
                $min = $min % 60;
            }
        }else{
            $sec = $timeStampLeft;
        }

        $timeLeft = [
            'hour' => $hr,
            'min' => $min,
            'sec' => $sec
        ];

        return $timeLeft;
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