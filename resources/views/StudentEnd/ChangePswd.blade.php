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
<div class="container my-5">
    <div class="col-md-12">
        @if (Session::has('OldPswdNMatch'))
        <div class="alert alert-danger mb-4">{{Session::get('OldPswdNMatch')}}</div>
        @endif
        @if (Session::has('PswdNMtch'))
        <div class="alert alert-danger mb-4">{{Session::get('PswdNMtch')}}</div>
        @endif
    </div>
</div>


<div class="container light-style flex-grow-1 container-p-y" style="margin-top: 4rem!important">
    <div class="card overflow-hidden">
        <div class="row no-gutters row-bordered row-border-light">
            <div class="col-md-3 ">
                <div class="list-group list-group-flush account-settings-links">
                    <a class="list-group-item list-group-item-action " href="{{route('StudentProfile')}}">Profile</a>
                    <a class="list-group-item list-group-item-action active" href="{{route('StudentChagePswdPage')}}">Change password</a>
                    <a class="list-group-item list-group-item-action" href="{{route('StudentForgetPswdPage')}}">Forget Password</a>
                    <a class="list-group-item list-group-item-action" href="{{route('StudentLogOut')}}">Log Out</a>
                </div>
            </div>

            <div class="col-md-9">
                <div class="tab-content">
                    <!-- Change Password start -->
                    <div class="card-body pb-2">
                        <form action="{{route('StudentChangePswd')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="form-label">Current password</label>
                                @error('StCpswd')
                                <span class="text-danger" style="font-size: .8rem"> *** {{$message}}</span>
                                @enderror
                                <input type="password" class="form-control" name="StCpswd">
                            </div>

                            <div class="form-group">
                                <label class="form-label">New password</label>
                                @error('StNpswd')
                                <span class="text-danger" style="font-size: .8rem"> *** {{$message}}</span>
                                @enderror
                                <input type="password" class="form-control" name="StNpswd">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Repeat new password</label>
                                @error('StRNpswd')
                                <span class="text-danger" style="font-size: .8rem"> *** {{$message}}</span>
                                @enderror
                                <input type="password" class="form-control" name="StRNpswd">
                            </div>
                            <div class="text-right mt-3">
                                <button type="submit" class="btn btn-primary">Save changes</button>
                                <a href="{{route('StudentResult')}}" class="btn btn-default">cancle
                                </a>
                            </div>
                        </form>
                    </div>
                    <!-- Change Password end -->
                </div>
            </div>
        </div>
    </div>

</div>
@endsection