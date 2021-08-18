@extends('template.master')

@section('content')

<link rel="stylesheet" href="/css/login.css">
<link rel="stylesheet" href="/css/main.css">

<div class="bg-image">
        <div class="container-fluid  pt-5">
            <div class="row d-flex justify-content-around">

                <div class="col-lg-5 mt-3">
                    <div class="fs-1" id="logo"><img src="/images/whitelogo.svg" alt="white logo">
                        <p class="tagline text-center fs-4 fst-italic">Shop, Buy and, Ride</p>
                    </div>                    
                </div>
                {{-- Login form --}}
                <div class="col-lg-5 col-md-8 col-sm-6">
                    <div class="mt-5 p-5 bg-light fst-italic" id="login-form">
                        <div class="form-header">
                            <h1 class="fs-1 text-uppercase fst-italic fw-bolder">Login Your Account</h1>
                        </div>
                        <form>
                            <div class="mb-3 ">
                                <input type="email" class="form-control" placeholder="Email Address">
                            </div>
                            <div class="mb-3 justify-content-center">
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="row">
                                <div class="forgot-pass col">
                                    <a href="{{url('password')}}">Forgot Password?</a>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-grid d-md-flex justify-content-md-end">
                                        <button class="btn rounded-pill me-md-2 border-0 fs-4 fw-bolder" id="btn-login" type="button">
                                        <a href="{{url('homeaccount')}}">LOGIN</a>   
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection