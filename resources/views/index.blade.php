@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card border-0">
            <div class="card-header text-center ">
                <h2>
                     <strong> 
                        Welcome to Employee Management System portal 
                    </strong>    
                </h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 employee-div">
                        <h1 class="text-center">
                            Employee <img src="img/user.png" alt="">
                            
                        </h1>
                        {{-- <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam quam eveniet aliquid praesentium perspiciatis vero, voluptate non quis quas officiis repellat dolorem possimus? Officiis nostrum blanditiis sed voluptatem dolor a, impedit quod commodi eveniet non magni nobis eum ullam facere esse soluta similique explicabo minus quo possimus quas placeat alias?
                        </p> --}}
                        <center>
                            <a href="/employee/login" >
                                <button class="btn btn-primary mt-5">
                                    Click here to Sign in
                                </button>
                            </a>
                        </center>
                    </div>
                    <div class="col-md-6 admin-div" >
                        <h1 class="text-center">Admin 
                                <img src="img/admin.png" alt="">
                        </h1>
                        {{-- <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia laboriosam facere hic possimus minus magni numquam autem, nulla alias ipsa dolore beatae, in aspernatur culpa architecto mollitia enim sed sint magnam officiis eligendi est? Qui ipsa delectus molestias aspernatur veniam ea temporibus optio esse quo, quibusdam, cupiditate fuga quae nisi?
                        </p> --}}
                        <center>
                            <a href="/login">
                                <button class="btn btn-success mt-5">
                                    Click here to Sign in
                                </button>
                            </a>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection