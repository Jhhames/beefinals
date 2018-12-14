<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class EmployeeLoginController extends Controller
{
   
    
     /**
     * Show the application’s login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('auth.employee-login');
    }
    protected function guard(){
        return Auth::guard('employee');
    }
    
    use AuthenticatesUsers; 
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/employee/dashboard';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:employee')->except('logout');
    }
}
