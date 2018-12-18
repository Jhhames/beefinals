@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                <h2> Welcome to Employee Management System portal </h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        As Employee
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam quam eveniet aliquid praesentium perspiciatis vero, voluptate non quis quas officiis repellat dolorem possimus? Officiis nostrum blanditiis sed voluptatem dolor a, impedit quod commodi eveniet non magni nobis eum ullam facere esse soluta similique explicabo minus quo possimus quas placeat alias?
                        </p>
                        <a href="/employee/login">
                            <button class="btn btn-primary ">
                                Click here to Sign in
                            </button>
                        </a>
                    </div>
                    <div class="col-md-6">
                        As Admin
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia laboriosam facere hic possimus minus magni numquam autem, nulla alias ipsa dolore beatae, in aspernatur culpa architecto mollitia enim sed sint magnam officiis eligendi est? Qui ipsa delectus molestias aspernatur veniam ea temporibus optio esse quo, quibusdam, cupiditate fuga quae nisi?
                        </p>
                        <a href="/login">
                            <button class="btn btn-success">
                                Click here to Sign in
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection