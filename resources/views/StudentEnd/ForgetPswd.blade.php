@extends('StudentEnd.Main.StudentMaster')

@section('StudentAdmin')
<link rel="stylesheet" href="css1\Profile.css">


<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg');margin-top:7rem">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-7">
                <h2 class="mb-0">Profile settings</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
        </div>
    </div>
</div>
<div class="custom-breadcrumns border-bottom">
    <div class="container">
        <a href="{{route('StudentHome')}}">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Profile</span>
    </div>
</div>


<div class="container">
    <div class="col-md-12">
        @if (Session::has('BothNotMatched'))
        <div class="alert alert-danger mb-4">{{Session::get('BothNotMatched')}}</div>
        @endif
        @if (Session::has('EmailNotMatched'))
        <div class="alert alert-danger mb-4">{{Session::get('EmailNotMatched')}}</div>
        @endif
        @if (Session::has('IdNotMatched'))
        <div class="alert alert-danger mb-4">{{Session::get('IdNotMatched')}}</div>
        @endif
    </div>
</div>
<div class="container light-style flex-grow-1 container-p-y" style="margin-top: 4rem!important">
    <div class="card overflow-hidden">
        <div class="row no-gutters row-bordered row-border-light">
            <div class="col-md-3 ">
                <div class="list-group list-group-flush account-settings-links">
                    <a class="list-group-item list-group-item-action " href="{{route('StudentProfile')}}">Profile</a>
                    <a class="list-group-item list-group-item-action " href="{{route('StudentChagePswdPage')}}">Change password</a>
                    <a class="list-group-item list-group-item-action active" href="{{route('StudentForgetPswdPage')}}">Forget Password</a>
                    <a class="list-group-item list-group-item-action" href="{{route('StudentLogOut')}}">Log Out</a>
                </div>
            </div>

            <div class="col-md-9">
                <div class="tab-content">
                    <!-- Forget Password start -->
                    <div class="card-body pb-2">
                        <form action="{{route('StudentForgetSave')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Student ID</label>
                                        @error('FStudentId')
                                        <span class="text-danger" style="font-size: .8rem"> *** {{$message}} </span>

                                        @enderror
                                        <input type="text" class="form-control" name="FStudentId">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Student Email</label>
                                        @error('FStudentEmail')
                                        <span class="text-danger" style="font-size: .8rem"> *** {{$message}} </span>

                                        @enderror
                                        <input type="email" class="form-control" name="FStudentEmail">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">New password</label>
                                @error('FNPswd')
                                <span class="text-danger" style="font-size: .8rem"> *** {{$message}} </span>

                                @enderror
                                <input type="password" class="form-control" name="FNPswd">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Re - Enter password</label>
                                @error('FNCPswd')
                                <span class="text-danger" style="font-size: .8rem"> *** {{$message}} </span>

                                @enderror
                                <input type="password" class="form-control" name="FNCPswd">
                            </div>
                            <div class="text-right mt-3">
                                <button type="submit" class="btn btn-primary">Save changes</button>
                                <a href="#" class="btn btn-default">cancle
                                </a>
                            </div>
                        </form>
                    </div>
                    <!-- Forget Password end -->

                </div>
            </div>
        </div>
    </div>

</div>
@endsection