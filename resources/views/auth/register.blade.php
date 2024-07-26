@extends('layouts.guest')

@section('content')
    <section class="mt-7 position-relative d-flex justify-content-center align-items-center">
        <!-- Login Form-->
        <div class="col col-md-8 col-lg-6 col-xxl-5">
            <!-- Logo-->
            <a class="navbar-brand fw-bold fs-3 flex-shrink-0 order-0 align-self-center justify-content-center d-flex mx-0 px-0" href="{{ route('home') }}">
                <div class="d-flex align-items-center">
                    <div class="f-w-6 d-flex align-items-center me-2 lh-1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 487 487">
                            <g>
                                <g>
                                    <path d="M308.1,277.95c0,35.7-28.9,64.6-64.6,64.6s-64.6-28.9-64.6-64.6s28.9-64.6,64.6-64.6S308.1,242.25,308.1,277.95z
                                                M440.3,116.05c25.8,0,46.7,20.9,46.7,46.7v122.4v103.8c0,27.5-22.3,49.8-49.8,49.8H49.8c-27.5,0-49.8-22.3-49.8-49.8v-103.9
                                                v-122.3l0,0c0-25.8,20.9-46.7,46.7-46.7h93.4l4.4-18.6c6.7-28.8,32.4-49.2,62-49.2h74.1c29.6,0,55.3,20.4,62,49.2l4.3,18.6H440.3z
                                                M97.4,183.45c0-12.9-10.5-23.4-23.4-23.4c-13,0-23.5,10.5-23.5,23.4s10.5,23.4,23.4,23.4C86.9,206.95,97.4,196.45,97.4,183.45z
                                                M358.7,277.95c0-63.6-51.6-115.2-115.2-115.2s-115.2,51.6-115.2,115.2s51.6,115.2,115.2,115.2S358.7,341.55,358.7,277.95z"
                                          fill="unset"/>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
            </a>
            <!-- / Logo-->
            <div class="shadow-xl p-4 p-lg-5 bg-white">
                <h1 class="text-center mb-5 fs-2 fw-bold">Create Account</h1>
                <form>
                    <div class="form-group">
                        <label class="form-label" for="register-fname">First name</label>
                        <input type="text" class="form-control" id="register-fname" placeholder="Enter your first name">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="register-lname">Last name</label>
                        <input type="text" class="form-control" id="register-lname" placeholder="Enter your last name">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="register-email">Email address</label>
                        <input type="email" class="form-control" id="register-email" placeholder="name@email.com">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="register-password">Password</label>
                        <input type="password" class="form-control" id="register-password" placeholder="Enter your password">
                    </div>
                    <button type="submit" class="btn btn-dark d-block w-100 my-4">Sign Up</button>
                </form>
                <p class="d-block text-center text-muted">Already registered? <a class="text-muted" href="{{ route('login') }}">Login here.</a></p>
            </div>

        </div>
        <!-- / Login Form-->
    </section>
@endsection
