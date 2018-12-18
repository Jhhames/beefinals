<?php

namespace App\Http\Controllers;

use App\Task;
use App\Leave;
use App\Activity;
use App\Employee;
use App\Appraisal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\HomeController;


class EmployeeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $employeeId;
    protected $employeeEmail;
    protected $employee;
    protected $homeController;
    public function __construct()
    {
        $this->middleware('auth:employee');
        $this->employee = Auth::guard('employee');
        $this->homeController = new HomeController;
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        if($this->checkProfile()){
            return view('employee.index')->with([
                'employees' => $this->getEmployees(),
                'pendingTasks' => $this->getMyPendingTasks(),
                'appraisals' => $this->getAppraisals(),
                'tasks' => $this->getMyTasks(),
                'leaves' => Leave::where('employee', $this->employee->user()->name)->get(),
                'activities' => $this->homeController->getActivities()
            ]);
        }else{
            return redirect()->route('employee.update');
        }
    }

    
    // public function doTask(Request $request, $id){
    //     $task = Task::where('id',$id);
    //     if($task->exists()){
    //         $update = $task->update(['done'=>1]);
    //         if($update){
    //             $activity = new Activity;
    //             $notification = $this->employee->user()->name.' completed a task';
    //             $activity->addActivity('done', $notification);
    //             Session::flash('success','Task marked as done');
    //             return redirect()->back();
    //         }else{
    //             return redirect()->back();
    //         }
    //     }else{
    //         Session::flash('error','Task doesn\'t exist or has been deleted');
    //         return redirect()->back();
    //     }
    // }

    public function doTask(Request $request, $id){
        $task = Task::find($id);
        $task->done = 1;
        if($task->save()){
            // if($task->update(['task'=>'jnnjs'])){
                Session::flash('success','Task marked as done');
                return redirect()->back();
            // }
        }else{
            Session::flash('error','Task Doesn\'t exist');
            
        }
    }
    public function checkProfile(){
        if(empty($this->employee->user()->mobile) 
        || empty($this->employee->user()->home_address) 
        || empty($this->employee->user()->bank) 
        || empty($this->employee->user()->account_number)
        ){
            return false;
        }else{

            return true;
        }
    }

    public function addLeave(Request $request){
        $this->validate($request,[
            'duration' => 'required',
            'letter' => 'required'
        ]);

        $leave = new Leave;
        $leave->duration = $request->duration;
        $leave->letter = $request->letter;
        $leave->employee = Auth::guard('employee')->user()->name;

        if($leave->save()){
            $activity = new Activity;
            $notification = Auth::guard('employee')->user()->name.' requested for a leave';
            $activity->addActivity('leave', $notification);
            Session::flash('success','Leave request submitted');
            return  redirect()->back();
        }else{
            Session::flash('error','Error Occured, try again');
            return redirect()->back();
        }
    }


    public function updateProfile(Request $request){
        $this->validate($request, [
            'mobile' => 'required',
            'bank' => 'required',
            'account_number' => 'required',
            'password' => 'required|confirmed',
            'home_address' => 'required',
            // 'disabilities' => 'required'
        ]);

        $employee = \App\Employee::where('id', Auth::guard('employee')->user()->id);

        if($employee->exists()){
            $update = $employee->update([
                'password' => Hash::make($request->password),
                'mobile' => $request->mobile,
                'bank' => $request->bank,
                'account_number' => $request->account_number,
                'home_address' => $request->home_address,
                'disablities' => $request->disabilities
            ]);

            if($update){
                Session::flash('success','Profile updated');
                return  redirect()->route('admin.home');
            }else{
                Session::flash('error','Error Occured, make sure you made a change before updating');
                return redirect()->back();
            }
        }else{
            Session::flash('error','Employee not found');
            return redirect()->back();
        }
    }

    protected function updateRedirect(){
        return view('employee.update-profile');
    }

    protected function getEmployees(){
        return Employee::all();
    }

    protected function getMyTasks(){
        return Task::where('employee',$this->employee->user()->name)->get();
    }

    protected function getMyPendingTasks(){
        return Task::where([
            'employee'=> $this->employee->user()->name,
            'done' =>0
        ])->get();
    }

    protected function getAppraisals(){
        return Appraisal::where('employee',$this->employee->user()->name)->get();
    }

    protected function getLeaves(){
        return Leave::where('employee',$this->employee->user()->name)->get();
    }
}
