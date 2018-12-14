<?php

namespace App\Http\Controllers;

use App\Task;
use App\Leave;
use App\Appraisal;
use Illuminate\Http\Request;
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
        return view('home');
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
        $task->due_date = $dateTimeStamp;
        $task->employee = $request->employee;
        $task->employer = Auth::user()->name;
        
        if($task->save()){
            Session::flash('sucess','Task added successfully for'.$request->employee);
            return redirect()->back();
        }else{
            Session::flash('error','Some Error occurred, try again');
            return redirect()->back();
        }
    }

    public function getTasks(){
        return Task::all();        
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
            Session::flash('success', 'You\'ve successfully Appraised'.$request->employee);
            return  redirect()->back();
        }else{
            Session::flash('error','Some Error occurred, try again');
            return redirect()->back();
        }

    }

    public function getAppraisals(){
        return Appraisal::all();
    }   

    public function getLeave(){
        return Leave::all();
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

}
