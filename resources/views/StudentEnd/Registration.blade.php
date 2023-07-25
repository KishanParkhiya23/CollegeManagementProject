@extends('StudentEnd.Main.StudentMaster')

@section('StudentAdmin')
<style>
    .site-section form input {
        font-size: 1rem;
    }

    .site-section form span {
        font-size: .85rem;
    }
</style>
<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg');margin-top:7rem">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-7">
                <h2 class="mb-0">Register</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
        </div>
    </div>
</div>


<div class="custom-breadcrumns border-bottom">
    <div class="container">
        <a href="{{route('StudentHome')}}">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Register</span>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                @if (Session::has('IdNotMatched'))
                <div class="alert alert-danger mb-4">{{Session::get('IdNotMatched')}}</div>
                @endif
                <form action="{{route('StudentRegSave')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="StudentId">Student Id</label>
                            @error('StudentId')
                            <span class="text-danger"> *** {{$message}}</span>
                            @enderror
                            <input type="text" id="StudentId" name="StudentId" class="form-control form-control-lg">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="StudentName">Student Name</label>
                            @error('StudentName')
                            <span class="text-danger"> *** {{$message}}</span>
                            @enderror
                            <input type="text" id="StudentName" name="StudentName" class="form-control form-control-lg">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="email">Email</label>
                            @error('StudentEmail')
                            <span class="text-danger"> *** {{$message}}</span>
                            @enderror
                            <input type="email" id="email" name="StudentEmail" class="form-control form-control-lg">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="pswd">Password</label>
                            @error('StudentPswd')
                            <span class="text-danger"> *** {{$message}}</span>
                            @enderror
                            <input type="password" id="pswd" name="StudentPswd" class="form-control form-control-lg">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="submit" value="Register" class="btn btn-primary btn-lg px-5">
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

@endsection