<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            return view('employee-home');
        }else{
            return ($this->employee->user()->name);
        }
    }

    public function getTasks(){
        $tasks = \App\Task::where('employee',$this->employeeEmail)->latest()->get();
    }

    public function doTask(Request $request, $taskId){
        $task = \App\Task::where('id',$taskId);
        if($task->exists()){
            $task->update(['done'=>1]);
        }else{
            Session::flash('error','Task doesn\'t exist or has been deleted');
            return redirect()->back();
        }
    }

    public function checkProfile(){
        if(empty($this->employee->user()->mobile) 
        || empty($this->employee->user()->home_address) 
        || empty($this->employee->user()->bank) 
        || empty($this->employee->user()->account_number
        || empty($this->employee->user()->disablities))){
            return false;
        }else{
            return true;
        }
    }

    public function updateProfile(Request $request,$id){
        $this->validate($request, [
            'mobile' => 'required',
            'bank' => 'required',
            'account_number' => 'required|max:10',
            'home_address' => 'required',
            'disabilities' => 'required'
        ]);

        $employee = \App\Employee::where('id',$id);

        if($employee->exists()){
            $update = $employee->update([
                'mobile' => $request->mobile,
                'bank' => $request->bank,
                'account_number' => $request->account_number,
                'home_address' => $request->home_address,
                'disabilities' => $request->disabilities
            ]);

            if($update){
                Session::flash('success','Profile updated');
                return  redirect()->back();
            }else{
                Session::flash('error','Error Occured, make sure you made a change before updating');
                return redirect()->back();
            }
        }else{
            Session::flash('error','Employee not found');
            return redirect()->back();
        }
    }
}
