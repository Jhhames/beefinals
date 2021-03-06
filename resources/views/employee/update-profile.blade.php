<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.5
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>EMS Dashboard</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #5 for statistics, charts, recent events and reports" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN LAYOUT FIRST STYLES -->
        <link href="//fonts.googleapis.com/css?family=Oswald:400,300,700" rel="stylesheet" type="text/css" />
        <!-- END LAYOUT FIRST STYLES -->
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
        <link href="/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <link href="/assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="/assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="/assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

        <link href="/assets/layouts/layout5/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/layouts/layout5/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-md">
        <!-- BEGIN CONTAINER -->
        <div class="wrapper">
            <!-- BEGIN HEADER -->
            <header class="page-header">
                <nav class="navbar mega-menu" role="navigation">
                    <div class="container-fluid">
                        <div class="clearfix navbar-fixed-top">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            
                            <!-- End Toggle Button -->
                            <!-- BEGIN LOGO -->
                            <a id="index" class="page-logo" href="">
                                {{-- <img src="" alt="Logo">  --}}
                                <span style="font-family: 'Anton', sans-serif; font-size: 40px">
                                        EM<span style="color:white !important">S</span>
                                </span> 
                                
                            </a>
                            <!-- END LOGO -->
                            
                            <!-- BEGIN TOPBAR ACTIONS -->
                            <div class="topbar-actions">
                                
                                <!-- BEGIN GROUP INFORMATION -->
                                <div class="btn-group-red btn-group">
                                    <button type="button" class="btn btn-sm md-skip dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                    <ul class="dropdown-menu-v2" role="menu">
                                        <li class="active">
                                            {{-- <a data-toggle="modal" data-target="#addEmployee"> <span class="icon-plane"></span> New Leave Request </a> --}}
                                        </li>
                                        
                                    </ul>
                                </div>
                                <!-- END GROUP INFORMATION -->
                                <!-- BEGIN USER PROFILE -->
                                <div class="btn-group-img btn-group">
                                    <button type="button" class="btn btn-sm md-skip dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                        <span>{{ Auth::guard('employee')->user()->name }} </span>
                                        <img src="/img/user.png" alt=""> </button>
                                    <ul class="dropdown-menu-v2" role="menu">
                                        
                                        <li>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                <i class="icon-key"></i> Log Out 
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                                <!-- END USER PROFILE -->
                                <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                                {{-- <button type="button" class="quick-sidebar-toggler md-skip" data-toggle="collapse">
                                    <span class="sr-only">Toggle Quick Sidebar</span>
                                    <i class="icon-logout"></i>
                                </button> --}}
                                <!-- END QUICK SIDEBAR TOGGLER -->
                            </div>
                            <!-- END TOPBAR ACTIONS -->
                        </div>
                    </div>
                    <!--/container-->
                </nav>
            </header>
            <!-- END HEADER -->
            <div class="container-fluid">
                <div class="page-content">
                        @if(isset($errors) && count($errors)>0)
                        @foreach($errors->all() as $error)    
                            <div class="alert alert-warning alert-dismissible  " role="alert">
                                {{$error}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endforeach
                        @endif
                        
                        @if (session('message'))
                            <div class="alert alert-info">
                                {{ session('message') }}
                            </div>
                        @endif
                    <!-- BEGIN BREADCRUMBS -->
                    <div class="breadcrumbs">
                        <h1>Employee Dashboard</h1>
                        <ol class="breadcrumb">
                            <li>
                                <a href="/employee/dashboard">Home</a>
                            </li>
                            <li class="active">Update Profile</li>
                        </ol>
                    </div>
                    <!-- END BREADCRUMBS -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row">
                        <div class="portlet boarderd light"  style="padding:1em">
                            <div class="portlet-title">
                                <div class="alert alert-danger"> <span class="fa fa-exclamation-triangle"></span> Your Profile Update needs attention,Fill in your details to proceed to your dashboard </div>
                                <h3 class="bold uppercase">  </h3>

                            </div>
                            <div class="portlet-body">
                                    <form action="{{ route('employee.update.submit') }}" method="POST" style="width:75%;margin:auto" class="bg-white">
                                            @csrf
                                                <div class="form-group">
                                                    <label for="empName" class="font-weight-bold"><strong> Full Name </strong></label>
                                                <input type="text" placeholder="Enter New Name" class="form-control" name="name" id="empName" value="{{ Auth::guard('employee')->user()->name }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="emailAddresss" class="font-weight-bold"><strong> Email Address </strong></label>
                                                    <input type="email" name="email" id="emailAddress" placeholder="Enter  Email Address" class="form-control" value="{{ Auth::guard('employee')->user()->email }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="phoneNumber" class="font-weight-bold"><strong> Phone Number </strong></label>
                                                    <input type="number" min="0" name="mobile" id="phoneNumber" placeholder="Enter Contact mobile number" class="form-control" value="{{ Auth::guard('employee')->user()->mobile }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="address"> <strong>Home Address</strong> </label>
                                                    <textarea name="home_address" id="address" cols="30" rows="5" class="form-control" placeholder="Home address" >{{ trim(Auth::guard('employee')->user()->home_address) }}
                                                    </textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="empRole" class="font-weight-bold"><strong> Position </strong></label>
                                                    
                                                    <select name="position" id="empRole" class="form-control" disabled="disabled">
                                                        <option value="Typist1"> {{ Auth::guard('employee')->user()->position }} </option>
                                                        
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="dis"> <strong>Disabilities</strong> </label>
                                                    <textarea name="disabilities" id="dis" cols="30" rows="3" class="form-control" placeholder="Add Disablities you'd like your employer to know about" >{{ Auth::guard('employee')->user()->disablities }}
                                                    </textarea>

                                                </div>
                                                <small> Remenuration </small>
                                                <div class="form-group">
                                                    <label for="bank"> <strong>Bank</strong> </label>
                                                    <select name="bank" id="bank" class="form-control">
                                                            <option value="{{ Auth::guard('employee')->user()->bank }}" selected>
                                                            @if(empty(Auth::guard('employee')->user()->bank))
                                                                Select Bank
                                                            @else
                                                                {{ Auth::guard('employee')->user()->bank }}
                                                            @endif
                                                            </option>
                                                            <option value="access-bank">Access Bank</option>
                                                            <option value="citibank-nigeria">Citibank Nigeria</option>
                                                            <option value="diamond-bank">Diamond Bank</option>
                                                            <option value="ecobank-nigeria">Ecobank Nigeria</option>
                                                            <option value="enterprise-bank">Enterprise Bank</option>
                                                            <option value="fidelity-bank">Fidelity Bank</option>
                                                            <option value="first-bank-of-nigeria">First Bank of Nigeria</option>
                                                            <option value="first-city-monument-bank">First City Monument Bank</option>
                                                            <option value="guaranty-trust-bank">Guaranty Trust Bank</option>
                                                            <option value="heritage-bank">Heritage Bank</option>
                                                            <option value="keystone-bank">Keystone Bank</option>
                                                            <option value="mainstreet-bank">MainStreet Bank</option>
                                                            <option value="skye-bank">Skye Bank</option>
                                                            <option value="stanbic-ibtc-bank">Stanbic IBTC Bank</option>
                                                            <option value="standard-chartered-bank">Standard Chartered Bank</option>
                                                            <option value="sterling-bank">Sterling Bank</option>
                                                            <option value="union-bank-of-nigeria">Union Bank of Nigeria</option>
                                                            <option value="united-bank-for-africa">United Bank For Africa</option>
                                                            <option value="unity-bank">Unity Bank</option>
                                                            <option value="wema-bank">Wema Bank</option>
                                                            <option value="zenith-bank">Zenith Bank</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="account"> <strong>Account Number</strong> </label>
                                                    <input type="number" name="account_number" id="account" min="0" placeholder="Enter Account number" class="form-control" value="{{ Auth::guard('employee')->user()->account_number }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="empSalary"> <strong>Salary (<strike>N</strike>)</strong> </label>
                                                    <input type="number" name="salary" id="empSalary" class="form-control" step="10000" value="{{ Auth::guard('employee')->user()->salary }}" disabled>
                                                </div>
                                                <small> security </small>
                                                <div class="form-group">
                                                    <label for="password"> <strong>Password</strong> </label>
                                                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter New Password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="password1"> <strong>Confirm Password</strong> </label>
                                                    <input type="password" name="password_confirmation" id="password1" class="form-control" placeholder="Confirm Password">
                                                </div>

                                                <button class="btn btn-primary">
                                                    Update Profile
                                                </button>
                                            </form>

                            </div>
                        </div>
                            
                    </div>
                    
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- BEGIN FOOTER -->
                <p class="copyright"> 2016 &copy; Metronic Theme By
                    <a target="_blank" href="http://keenthemes.com">Keenthemes</a> &nbsp;|&nbsp;
                    <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
                </p>
                <a href="#index" class="go2top">
                    <i class="icon-arrow-up"></i>
                </a>
                <!-- END FOOTER -->
            </div>
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN QUICK NAV -->
        <nav class="quick-nav">
                <a class="quick-nav-trigger" href="#0">
                    <span aria-hidden="true"></span>
                </a>
                <ul>
                    <li>
                        <a href="/employee/dashboard" class="active">
                            <span>Home</span>
                            <i class="icon-home"></i>
                        </a>
                    </li>
                    <li>
                        <a href="" class="active">
                            <span>Update Profile</span>
                            <i class="icon-user"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <span>Logout</span>
                            <i class="icon-logout"></i>
                        </a>
                    </li>
                    
                </ul>
                <span aria-hidden="true" class="quick-nav-bg"></span>
            </nav>
        <div class="quick-nav-overlay"></div>
        <!-- END QUICK NAV -->
        <!--[if lt IE 9]>
<script src="/assets/global/plugins/respond.min.js"></script>
<script src="/assets/global/plugins/excanvas.min.js"></script> 
<script src="/assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->

        {{-- MODALS --}}
            <!-- Button trigger modal -->
  
  <!-- Modal -->
  <div class="modal fade" id="addEmployee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel" >New Employee</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Default form register -->
        <form action="{{ route('employer.employee.submit') }}" method="POST">
            @csrf
                <div class="form-group">
                    <label for="empName" class="font-weight-bold"><strong> Full Name </strong></label>
                    <input type="text" placeholder="Enter New Name" class="form-control" name="name" id="empName">
                </div>
                <div class="form-group">
                    <label for="emailAddresss" class="font-weight-bold"><strong> Email Address </strong></label>
                    <input type="email" name="email" id="emailAddress" placeholder="Enter Employee Email Address" class="form-control">
                </div>
                <div class="form-group">
                    <label for="empRole" class="font-weight-bold"><strong> Position </strong></label>
                    <select name="position" id="empRole" class="form-control">
                        <option value="Typist1"> Typist1 </option>
                        <option value="Typist2"> Typist2 </option>
                        <option value="Technician"> Technician </option>
                        <option value="Operator1"> Operator1 </option>
                        <option value="Intern"> Intern </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="empSalary"> <strong>Salary (<strike>N</strike>)</strong> </label>
                    <input type="number" name="salary" id="empSalary" class="form-control" step="10000" value="10000">
                </div>

                <button class="btn btn-primary">
                    Add Employee
                </button>
            </form>
        <!-- Default form register -->
        </div>
        <div class="modal-footer">
          {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
      </div>
    </div>
  </div>


{{-- MOADL TWO --}}

      
      <!-- Modal -->
      <div class="modal fade" id="addTask" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalLabel" >Assign Task</h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- Default form register -->
                <form action="{{ route('admin.task.submit') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="taskEmp"> <strong>Employee</strong> </label>
                        <select name="employee" id="taskEmp" class="form-control">
                            @if(isset($employees))
                                @foreach ($employees as $item)
                                    <option value="{{$item->name}}"> {{$item->name}} </option>
                                    
                                @endforeach
                            @endif
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="taskTask"><strong>Task</strong></label>
                        <input type="text" class="form-control" name="task" id="taskTask" placeholder="Task Summary">
                    </div>

                    <div class="form-group">
                        <label for="taskDesc"><strong>Task Description</strong></label>
                        <textarea name="description" id="taskDesc" class="form-control" cols="30" rows="8" placeholder="Full Task Description"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="dateTime"><strong>Due at</strong></label>
                        <input type="datetime-local" name="dueDate" id="dateTime" class="form-control datepicker">
                    </div>

                    <button class="btn btn-primary">
                        Assign Task
                    </button>
                </form>
            <!-- Default form register -->
            </div>
            <div class="modal-footer">
              {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button> --}}
            </div>
          </div>
        </div>
      </div>
    
    
    
    
    
{{-- END OF MODAL TWO --}}
 {{-- MODAL 3 --}}
 <div class="modal fade" id="addAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalLabel" >New Admin </h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- Default form register -->
            <form action="{{ route('employer.admin.submit') }}" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="empName" class="font-weight-bold"><strong> Full Name </strong></label>
                        <input type="text" placeholder="Enter New Name" class="form-control" name="name" id="empName">
                    </div>
                    <div class="form-group">
                        <label for="emailAddresss" class="font-weight-bold"><strong> Email Address </strong></label>
                        <input type="email" name="email" id="emailAddress" placeholder="Enter Employee Email Address" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="empRole" class="font-weight-bold"><strong> Position </strong></label>
                        <select name="position" id="empRole" class="form-control">
                            <option value="CEO"> CEO </option>
                            <option value="HR"> HR </option>
                            <option value="CTO"> CTO </option>
                        </select>
                    </div>
                    
    
                    <button class="btn btn-primary">
                        Add Admin
                    </button>
                </form>
            <!-- Default form register -->
            </div>
            <div class="modal-footer">
              {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button> --}}
            </div>
          </div>
        </div>
      </div>
    

 {{-- END OF MODAL 3  --}}
        {{-- END OF MODALS --}}
        <script src="/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="/assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/horizontal-timeline/horizontal-timeline.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="/assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="/assets/layouts/layout5/scripts/layout.min.js" type="text/javascript"></script>
        <script src="/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="/assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script>
            toastr.options.closeButton = true;
            @if(Session::has('error'))
                toastr.error("{{ Session::get('error') }}",'',{timeOut: 4000});
            @endif;

            @if(Session::has('success'))
                toastr.success("{{ Session::get('success') }}",'',{timeOut: 4000});
            @endif;
        </script>
        <script>
            $(document).ready(function()
            {
                $('#clickmewow').click(function()
                {
                    $('#radio1003').attr('checked', 'checked');
                });
            })
        </script>
    </body>

</html>