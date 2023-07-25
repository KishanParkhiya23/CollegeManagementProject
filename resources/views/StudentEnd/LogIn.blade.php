@extends('StudentEnd.Main.StudentMaster')

@section('StudentAdmin')

<style>
    .site-section form input {
        font-size: 1rem;
    }
</style>
<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg');margin-top:7rem">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-7">
                <h2 class="mb-0">Log In</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
        </div>
    </div>
</div>

<div class="custom-breadcrumns border-bottom">
    <div class="container">
        <a href="{{route('StudentHome')}}">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Login</span>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <form action="{{route('StudentLogInCheck')}}">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            @if (Session::has('Fail'))
                            <div class="alert alert-danger mb-4">{{Session::get('Fail')}}</div>
                            @endif
                            <label for="LogInStudentEmail">Student Email</label>
                            @if (Session::has('EmailFaill'))
                            <span class="text-danger"> *** {{Session::get('EmailFaill')}}</span>
                            @endif
                            <input type="text" id="LogInStudentEmail" name="LogInStudentEmail" class="form-control form-control-lg">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="pword">Password</label>
                            @if (Session::has('PswdFaill'))
                            <span class="text-danger"> *** {{Session::get('PswdFaill')}}</span>
                            @endif
                            <input type="text" id="pword" name="LogInStudentPswd" class="form-control form-control-lg">
                        </div>
                        <div class="col-md-12 text-center my-3" style="font-size:.9rem">
                            <p class="m-0">You Don't Have an account ? <a href="{{route('StudentRegistration')}}">Create a New Account</a> </p>
                            <a href="{{route('StudentForgetPswdPage')}}">Forget Password</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="submit" value="Log In" class="btn btn-primary btn-lg px-5 w-100 ">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection