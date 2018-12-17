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
        <title>Nacoss Prints Dashboard</title>
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
                                NACOSS<span style="color:white !important">PRINTS</span>

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
                                            <a data-toggle="modal" data-target="#addEmployee"> <span class="icon-plane"></span> New Leave Request </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <!-- END GROUP INFORMATION -->
                                <!-- BEGIN USER PROFILE -->
                                <div class="btn-group-img btn-group">
                                    <button type="button" class="btn btn-sm md-skip dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                        <span>{{ Auth::guard('employee')->user()->name }} </span>
                                        <img src="/assets/layouts/layout5/img/avatar1.jpg" alt=""> </button>
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
                                <a href="#">Home</a>
                            </li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                    <!-- END BREADCRUMBS -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row widget-row">
                        <div class="col-md-3">
                            <!-- BEGIN WIDGET THUMB -->
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
                                <h4 class="widget-thumb-heading"> Employees </h4>
                                <div class="widget-thumb-wrap">
                                    <i class="widget-thumb-icon bg-green icon-users"></i>
                                    <div class="widget-thumb-body">
                                        <span class="widget-thumb-subtitle">People</span>
                                    <span class="widget-thumb-body-stat" data-counter="counterup" data-value="{{ count($employees) }}">0</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END WIDGET THUMB -->
                        </div>
                        {{-- <div class="col-md-3">
                            <!-- BEGIN WIDGET THUMB -->
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
                                <h4 class="widget-thumb-heading">Pennding Tasks</h4>
                                <div class="widget-thumb-wrap">
                                    <i class="widget-thumb-icon bg-red icon-layers"></i>
                                    <div class="widget-thumb-body">
                                        <span class="widget-thumb-subtitle"></span>
                                    <span class="widget-thumb-body-stat" data-counter="counterup" data-value="{{ count($pending) }}">0</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END WIDGET THUMB -->
                        </div> --}}
                        <div class="col-md-3">
                            <!-- BEGIN WIDGET THUMB -->
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
                                <h4 class="widget-thumb-heading">Tasks </h4>
                                <div class="widget-thumb-wrap">
                                    <i class="widget-thumb-icon bg-purple icon-list"></i>
                                    <div class="widget-thumb-body">
                                        <span class="widget-thumb-subtitle"></span>
                                        <span class="widget-thumb-body-stat" data-counter="counterup" data-value="{{count($tasks)}}">0</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END WIDGET THUMB -->
                        </div>
                        <div class="col-md-3">
                            <!-- BEGIN WIDGET THUMB -->
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
                                <h4 class="widget-thumb-heading">Pending Tasks</h4>
                                <div class="widget-thumb-wrap">
                                    <i class="widget-thumb-icon bg-blue icon-list"></i>
                                    <div class="widget-thumb-body">
                                        <span class="widget-thumb-subtitle"></span>
                                        <span class="widget-thumb-body-stat" data-counter="counterup" data-value="{{count($pendingTasks)}}">0</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END WIDGET THUMB -->
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-6 col-xs-12 col-sm-12">
                            <div class="portlet light bordered">
                                <div class="portlet-title tabbable-line">
                                    <div class="caption">
                                        <i class="icon-bubbles font-dark hide"></i>
                                        <span class="caption-subject font-dark bold uppercase">Appraisals </span>
                                    </div>
                                    <ul class="nav nav-tabs">
                                        <li>
                                            <a href="" data-toggle="tab"> View All </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="portlet-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="portlet_comments_1">
                                            <!-- BEGIN: Comments -->
                                            <div class="mt-comments">

                                                @if (isset($appraisals))
                                                    @foreach ($appraisals as $item)
                                                    <div class="mt-comment">
                                                            <div class="mt-comment-img">
                                                                <img src="/assets/pages/media/users/avatar1.jpg" /> </div>
                                                            <div class="mt-comment-body">
                                                                <div class="mt-comment-info">
                                                                    <span class="mt-comment-author"> {{ $item->employee }} </span>
                                                                    <span class="mt-comment-date"> {{ $item->created_at }} </span>
                                                                </div>
                                                                <div class="mt-comment-text">
                                                                    {{ $item->summary }}
                                                                </div>
                                                                
                                                            </div>
                                                        </div>        
                                                    @endforeach
                                                @endif
                                                
                                            </div>
                                            <!-- END: Comments -->
                                        </div>
                                        

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xs-12 col-sm-12">
                            <div class="portlet light bordered">
                                <div class="portlet-title tabbable-line">
                                    <div class="caption">
                                        <i class=" icon-social-twitter font-dark hide"></i>
                                        <span class="caption-subject font-dark bold uppercase">My Leave Requests </span>
                                    </div>
                                    <ul class="nav nav-tabs">
                                        <li >
                                            <a href="" data-toggle="tab"> view all </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <div class="portlet-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_actions_pending">
                                            <!-- BEGIN: Actions -->
                                            <div class="mt-actions">
                                                @if(isset($leaves))
                                                    @foreach ($leaves as $item)
                                                    @if($item->approved)
                                                    <div class="mt-action">
                                                            <div class="mt-action-img">
                                                                <img src="/assets/pages/media/users/avatar10.jpg" /> </div>
                                                            <div class="mt-action-body">
                                                                <div class="mt-action-row">
                                                                    <div class="mt-action-info ">
                                                                        <div class="mt-action-icon ">
                                                                            <i class="icon-magnet"></i>
                                                                        </div>
                                                                        <div class="mt-action-details ">
                                                                            <span class="mt-action-author"> {{ $item->employee }} </span>
                                                                            <p class="mt-action-desc"> Leave Request </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-action-datetime ">
                                                                        <span class="mt-action-date"></span>
                                                                        <span class="mt-action-dot bg-green"></span>
                                                                        <span class="mt=action-time">{{ $item->duration }}</span>
                                                                    </div>
                                                                    <div class="mt-action-buttons ">
                                                                        <div class="btn-group btn-group-circle">
                                                                            <strong class="text-primary">
                                                                                Approved
                                                                            </strong>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @else
                                                    <div class="mt-action">
                                                            <div class="mt-action-img">
                                                                <img src="/assets/pages/media/users/avatar11.jpg" /> </div>
                                                            <div class="mt-action-body">
                                                                <div class="mt-action-row">
                                                                    <div class="mt-action-info ">
                                                                        <div class="mt-action-icon ">
                                                                            <i class="icon-magnet"></i>
                                                                        </div>
                                                                        <div class="mt-action-details ">
                                                                            <span class="mt-action-author"> {{ $item->employee }} </span>
                                                                            <p class="mt-action-desc"> Leave Request </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-action-datetime ">
                                                                        <span class="mt-action-date"></span>
                                                                        <span class="mt-action-dot bg-green"></span>
                                                                        <span class="mt=action-time">{{ $item->duration }}</span>
                                                                    </div>
                                                                    <div class="mt-action-buttons ">    
                                                                        <div class="btn-group btn-group-circle">
                                                                            <strong class="text-danger">
                                                                                    Pending
                                                                            </strong>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endif
                                                    @endforeach
                                                @endif
                                                
                                            </div>
                                            <!-- END: Actions -->
                                        </div>
                                        <div class="tab-pane" id="tab_actions_completed">
                                            <!-- BEGIN:Completed-->
                                            <div class="mt-actions">
                                                <div class="mt-action">
                                                    <div class="mt-action-img">
                                                        <img src="/assets/pages/media/users/avatar1.jpg" /> </div>
                                                    <div class="mt-action-body">
                                                        <div class="mt-action-row">
                                                            <div class="mt-action-info ">
                                                                <div class="mt-action-icon ">
                                                                    <i class="icon-action-redo"></i>
                                                                </div>
                                                                <div class="mt-action-details ">
                                                                    <span class="mt-action-author">Frank Cameron</span>
                                                                    <p class="mt-action-desc">Lorem Ipsum is simply dummy</p>
                                                                </div>
                                                            </div>
                                                            <div class="mt-action-datetime ">
                                                                <span class="mt-action-date">3 jun</span>
                                                                <span class="mt-action-dot bg-red"></span>
                                                                <span class="mt=action-time">9:30-13:00</span>
                                                            </div>
                                                            <div class="mt-action-buttons ">
                                                                <div class="btn-group btn-group-circle">
                                                                    <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                                    <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-action">
                                                    <div class="mt-action-img">
                                                        <img src="/assets/pages/media/users/avatar8.jpg" /> </div>
                                                    <div class="mt-action-body">
                                                        <div class="mt-action-row">
                                                            <div class="mt-action-info ">
                                                                <div class="mt-action-icon ">
                                                                    <i class="icon-cup"></i>
                                                                </div>
                                                                <div class="mt-action-details ">
                                                                    <span class="mt-action-author">Ella Davidson </span>
                                                                    <p class="mt-action-desc">Text of the printing and typesetting industry</p>
                                                                </div>
                                                            </div>
                                                            <div class="mt-action-datetime ">
                                                                <span class="mt-action-date">3 jun</span>
                                                                <span class="mt-action-dot bg-green"></span>
                                                                <span class="mt=action-time">9:30-13:00</span>
                                                            </div>
                                                            <div class="mt-action-buttons">
                                                                <div class="btn-group btn-group-circle">
                                                                    <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                                    <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-action">
                                                    <div class="mt-action-img">
                                                        <img src="/assets/pages/media/users/avatar5.jpg" /> </div>
                                                    <div class="mt-action-body">
                                                        <div class="mt-action-row">
                                                            <div class="mt-action-info ">
                                                                <div class="mt-action-icon ">
                                                                    <i class=" icon-graduation"></i>
                                                                </div>
                                                                <div class="mt-action-details ">
                                                                    <span class="mt-action-author">Jason Dickens </span>
                                                                    <p class="mt-action-desc">Dummy text of the printing and typesetting industry</p>
                                                                </div>
                                                            </div>
                                                            <div class="mt-action-datetime ">
                                                                <span class="mt-action-date">3 jun</span>
                                                                <span class="mt-action-dot bg-red"></span>
                                                                <span class="mt=action-time">9:30-13:00</span>
                                                            </div>
                                                            <div class="mt-action-buttons ">
                                                                <div class="btn-group btn-group-circle">
                                                                    <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                                    <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-action">
                                                    <div class="mt-action-img">
                                                        <img src="/assets/pages/media/users/avatar2.jpg" /> </div>
                                                    <div class="mt-action-body">
                                                        <div class="mt-action-row">
                                                            <div class="mt-action-info ">
                                                                <div class="mt-action-icon ">
                                                                    <i class="icon-badge"></i>
                                                                </div>
                                                                <div class="mt-action-details ">
                                                                    <span class="mt-action-author">Jan Kim</span>
                                                                    <p class="mt-action-desc">Lorem Ipsum is simply dummy</p>
                                                                </div>
                                                            </div>
                                                            <div class="mt-action-datetime ">
                                                                <span class="mt-action-date">3 jun</span>
                                                                <span class="mt-action-dot bg-green"></span>
                                                                <span class="mt=action-time">9:30-13:00</span>
                                                            </div>
                                                            <div class="mt-action-buttons ">
                                                                <div class="btn-group btn-group-circle">
                                                                    <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                                    <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END: Completed -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-xs-12 col-sm-12">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-share font-dark hide"></i>
                                        <span class="caption-subject font-dark bold uppercase">Recent Activities</span>
                                    </div>
                                    <div class="actions">
                                        <div class="btn-group">
                                            <a class="btn btn-sm blue btn-outline btn-circle" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Filter By
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <div class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
                                                <label class="mt-checkbox mt-checkbox-outline">
                                                    <input type="checkbox" /> Finance
                                                    <span></span>
                                                </label>
                                                <label class="mt-checkbox mt-checkbox-outline">
                                                    <input type="checkbox" checked="" /> Membership
                                                    <span></span>
                                                </label>
                                                <label class="mt-checkbox mt-checkbox-outline">
                                                    <input type="checkbox" /> Customer Support
                                                    <span></span>
                                                </label>
                                                <label class="mt-checkbox mt-checkbox-outline">
                                                    <input type="checkbox" checked="" /> HR
                                                    <span></span>
                                                </label>
                                                <label class="mt-checkbox mt-checkbox-outline">
                                                    <input type="checkbox" /> System
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="scroller" style="height: 300px;" data-always-visible="1" data-rail-visible="0">
                                        <ul class="feeds">
                                                @if(isset($activities))
                                                @foreach ($activities as $item)
                                                    @switch($item->type)
                                                        @case('user')
                                                            <li>    
                                                                <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-info">
                                                                                    <i class="icon-user"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> {{ $item->notification }}
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date">
                                                                            @if($item->timeLeft['hour'] != 0 )
                                                                                    {{ $item->timeLeft['hour'] }} hours
                                                                            @else
                                                                                @if($item->timeLeft['min'] != 0 )
                                                                                    {{ $item->timeLeft['min'] }} minutes
                                                                                @else
                                                                                    just now
                                                                                @endif
                                                                            @endif
                                                                            </div>
                                                                    </div>
                                                                </li>
                                                                @break
                                                            @case('done')
                                                            <li>    
                                                                    <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-info">
                                                                                        <i class="icon-check"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc"> {{ $item->notification }}
                                                                                        
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date">
                                                                                    @if($item->timeLeft['hour'] != 0 )
                                                                                        {{ $item->timeLeft['hour'] }} hours
                                                                                    @else
                                                                                        @if($item->timeLeft['min'] != 0 )
                                                                                            {{ $item->timeLeft['min'] }} minutes
                                                                                        @else
                                                                                            just now
                                                                                        @endif
                                                                                    @endif
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                @break
                                                            @case('appraisal')
                                                            <li>    
                                                                    <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-info">
                                                                                        <i class="icon-badge"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc"> {{ $item->notification }}
                                                                                        
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date">
                                                                                    @if($item->timeLeft['hour'] != 0 )
                                                                                    {{ $item->timeLeft['hour'] }} hours
                                                                                    @else
                                                                                        @if($item->timeLeft['min'] != 0 )
                                                                                            {{ $item->timeLeft['min'] }} minutes
                                                                                        @else
                                                                                            just now
                                                                                        @endif
                                                                                    @endif
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                @break
                                                            @case('leave')
                                                            <li>    
                                                                    <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-info">
                                                                                        <i class="icon-plane"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc"> {{ $item->notification }}
                                                                                        
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date">
                                                                                    @if($item->timeLeft['hour'] != 0 )
                                                                                        {{ $item->timeLeft['hour'] }} hours
                                                                                    @else
                                                                                        @if($item->timeLeft['min'] != 0 )
                                                                                            {{ $item->timeLeft['min'] }} minutes
                                                                                        @else
                                                                                            just now
                                                                                        @endif
                                                                                    @endif
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                @break
                                                            @case('task')
                                                            <li>    
                                                                    <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-info">
                                                                                        <i class="icon-list"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc"> {{ $item->notification }}
                                                                                        
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date">
                                                                                    @if($item->timeLeft['hour'] != 0 )
                                                                                        {{ $item->timeLeft['hour'] }} hours
                                                                                    @else
                                                                                        @if($item->timeLeft['min'] != 0 )
                                                                                            {{ $item->timeLeft['min'] }} minutes
                                                                                        @else
                                                                                            just now
                                                                                        @endif
                                                                                    @endif
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                @break
                                                            @default
                                                            <li>    
                                                                    <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-info">
                                                                                        <i class="icon-bell"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc"> {{ $item->notification }}
                                                                                        
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date">
                                                                                    @if($item->timeLeft['hour'] != 0 )
                                                                                        {{ $item->timeLeft['hour'] }} hours
                                                                                    @else
                                                                                        @if($item->timeLeft['min'] != 0 )
                                                                                            {{ $item->timeLeft['min'] }} minutes
                                                                                        @else
                                                                                            just now
                                                                                        @endif
                                                                                    @endif
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                        @endswitch
                                                    @endforeach
                                                @endif
                                        </ul>
                                    </div>
                                    <div class="scroller-footer">
                                        <div class="btn-arrow-link pull-right">
                                            <a href="javascript:;">See All Records</a>
                                            <i class="icon-arrow-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xs-12 col-sm-12">
                            <div class="portlet light tasks-widget bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-share font-dark hide"></i>
                                        <span class="caption-subject font-dark bold uppercase">Tasks</span>
                                        
                                    </div>
                                    
                                </div>
                                <div class="portlet-body">
                                    <div class="task-content">
                                        <div class="scroller" style="height: 312px;" data-always-visible="1" data-rail-visible1="1">
                                            <!-- START TASK LIST -->
                                            <ul class="task-list">
                                                @if(isset($tasks))
                                                    @foreach ($tasks as $item)
                                                    <li>
                                                        <div class="task-title">
                                                                <span class="task-title-sp">{{$item->task}} </span>
                                                                {{-- <span class="label label-sm label-success">  --}}
                                                                    @if($item->done)
                                                                        <span class="badge badge-success">Done </span>
                                                                    @else
                                                                        <span class="badge badge-danger"> Pending </span>
                                                                    @endif
                                                                 {{-- </span> --}}
                                                                
                                                            </div>
                                                            <div class="task-config">
                                                                    <div class="task-config-btn btn-group">
                                                                        <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                                            <i class="fa fa-user"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu pull-right">
                                                                            <li style="padding:1em">
                                                                                {{ $item->employer }}
                                                                            </li>
                                                                            <li>
                                                                                <a href="do" onclick="event.preventDefault();
                                                                                document.getElementById('do_task').submit();">
                                                                                <i class="icon-check"></i>
                                                                                    Mark As done 
                                                                                </a>
                                                                                <form action="{{ url('/employee/doTask/'.$item->id) }}" method="POST" id="do_task">
                                                                                    @csrf
                                                                                </form>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                            </div>
                                                            
                                                        </li>
                                                                
                                                    @endforeach
                                                @endif
                                            </ul>
                                            <!-- END START TASK LIST -->
                                        </div>
                                    </div>
                                    <div class="task-footer">
                                        <div class="btn-arrow-link pull-right">
                                            <a href="javascript:;">See All Records</a>
                                            <i class="icon-arrow-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-6 col-xs-12 col-sm-12">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-bubble font-dark hide"></i>
                                        <span class="caption-subject font-hide bold uppercase"> <span class="icon-users "></span>New Employees</span>
                                    </div>
                                    <div class="actions">
                                        <div class="btn-group">
                                            {{-- <a class="btn green-haze btn-outline btn-circle btn-sm" href="" data-close-others="true"> View  All <span class="icon-users"></span> --}}

                                            </a>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="row">
                                        <!--begin: widget 1-1 -->
                                            @php
                                                $count = 0;   
                                            @endphp
                                            @isset($employees) 
                                                @foreach ($employees as $employee)
                                                @php if($count > 2)
                                                    break;
                                                @endphp
                                                <div class="col-md-4">
                                                    <div class="mt-widget-1">
                                                            <div class="mt-icon">
                                                                <a href="#">
                                                                    <i class="icon-plus"></i>
                                                                </a>
                                                            </div>
                                                            <div class="mt-img">
                                                                <img src="/assets/pages/media/users/avatar80_8.jpg"> </div>
                                                            <div class="mt-body">
                                                                <h3 class="mt-username"> {{ $employee->name }} </h3>
                                                                <p class="mt-user-title"> {{ $employee->position }} </p>
                                                                <div class="mt-stats">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @php
                                                        $count++
                                                    @endphp
                                                @endforeach
                                                @endisset
                                        
                                            
                                            <!--end: widget 1-1 -->
                                            
                                    </div>
                                </div>
                            </div>
                            
                        
                        </div>
                        <div class="col-lg-6 col-xs-12 col-sm-12">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-bubble font-dark hide"></i>
                                        <span class="caption-subject font-hide bold uppercase"> <span class="icon-badge"></span> Appraisals </span>
                                    </div>
                                    <div class="actions">
                                        <div class="btn-group">
                                            <a class="btn green-haze btn-outline btn-circle btn-sm" href="/admin/employees" data-close-others="true"> View  All <span class="icon-users"></span>

                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="row">
                                            @php
                                            $count = 0;   
                                        @endphp
                                        @isset($admins) 
                                            @foreach ($admins as $admin)
                                            @php if($count > 2)
                                                break;
                                            @endphp
                                            <div class="col-md-4">
                                                <div class="mt-widget-1">
                                                        <div class="mt-icon">
                                                            <a href="#">
                                                                <i class="icon-plus"></i>
                                                            </a>
                                                        </div>
                                                        <div class="mt-img">
                                                            <img src="/assets/pages/media/users/avatar80_5.jpg"> </div>
                                                        <div class="mt-body">
                                                            <h3 class="mt-username"> {{ $admin->name }} </h3>
                                                            <p class="mt-user-title"> {{ $admin->position }} </p>
                                                            <div class="mt-stats">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @php
                                                    $count++
                                                @endphp
                                            @endforeach
                                            @endisset
                                    </div>
                                </div>
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
                    <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" target="_blank" class="active">
                        <span>Purchase Metronic</span>
                        <i class="icon-basket"></i>
                    </a>
                </li>
                <li>
                    <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/reviews/4021469?ref=keenthemes" target="_blank">
                        <span>Customer Reviews</span>
                        <i class="icon-users"></i>
                    </a>
                </li>
                <li>
                    <a href="http://keenthemes.com/showcast/" target="_blank">
                        <span>Showcase</span>
                        <i class="icon-user"></i>
                    </a>
                </li>
                <li>
                    <a href="http://keenthemes.com/metronic-theme/changelog/" target="_blank">
                        <span>Changelog</span>
                        <i class="icon-graph"></i>
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
          <h3 class="modal-title" id="exampleModalLabel" >Request for leave</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Default form register -->
        <form action="{{ route('employee.leave.submit') }}" method="POST">
            @csrf
                <div class="form-group">
                    <label for="empRole" class="font-weight-bold"><strong> Duration </strong></label>
                    <select name="duration" id="empRole" class="form-control">
                        <option value="2 weeks"> 2 weeks </option>
                        <option value="1 month"> 1 month </option>
                        <option value="2 month"> 2 month </option>
                        <option value="1 month"> 3 month </option>
                        
                    </select>
                </div>
                <div class="form-group">
                    <label for="letter"><strong>Leave Request Letter</strong> </label>
                    <textarea name="letter" id="letter" cols="30" rows="10" class="form-control" placeholder="Request Letter"></textarea>                

                </div>

                <button class="btn btn-primary">
                    Request Leave
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