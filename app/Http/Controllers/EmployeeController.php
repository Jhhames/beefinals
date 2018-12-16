<?php

namespace App\Http\Controllers;

use App\Task;
use App\Leave;
use App\Employee;
use App\Appraisal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


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
    public function __construct()
    {
        $this->middleware('auth:employee');
        $this->employee = Auth::guard('employee');
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
                'leaves' => Leave::where('employee', Auth::guard('employee')->user()->name)->get()
            ]);
        }else{
            return redirect()->route('employee.update');
        }
    }


    public function doTask(Request $request, $id){
        $task = \App\Task::where('id',$id);
        if($task->exists()){
            if($task->update(['done'=>1])){
                Session::flash('success','Task marked as done');
                return redirect()->back();
            }
        }else{
            Session::flash('error','Task doesn\'t exist or has been deleted');
            return redirect()->back();
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
