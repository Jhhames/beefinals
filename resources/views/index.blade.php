@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 text> Welcome to Nacoss prints Resource Management Portal </h2>
        <p class="lead"> Sign in below  </p>
        <div class="row">
            <div class="col-md-6 bg-dark text-light">
                As Employee

                <button class="btn btn-primary">
                    Click here to Sign in
                </button>
            </div>
            <div class="col-md-6 bg-red">
                As Admin

                <button class="btn btn-success">
                    Click here to Sign in
                </button>
            </div>
        </div>
    </div>
@endsection