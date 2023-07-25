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

<div class="container light-style flex-grow-1 container-p-y" style="margin-top: 5rem!important">
    <div class="card overflow-hidden">
        <div class="row no-gutters row-bordered row-border-light">
            <div class="col-md-3 ">
                <div class="list-group list-group-flush account-settings-links">
                    <a class="list-group-item list-group-item-action active" href="{{route('StudentProfile')}}">Profile</a>
                    <a class="list-group-item list-group-item-action " href="{{route('StudentChagePswdPage')}}">Change password</a>
                    <a class="list-group-item list-group-item-action" href="{{route('StudentForgetPswdPage')}}">Forget Password</a>
                    <a class="list-group-item list-group-item-action" href="{{route('StudentLogOut')}}">Log Out</a>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form action="{{route('StudentProfileUpdate')}}">

                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Change Profile</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">

                                                <label class="form-label">Student Name</label>
                                                <input type="text" class="form-control" name="UStudentName" value="{{$data->StudentName}}" pattern="[A-Za-z ]+">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Student Email</label>
                                                <input type="email" class="form-control" name="UStudentEmail" value="{{$data->StudentEmail}}" >
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-9">
                <div class="tab-content">
                    <!-- Profile start -->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 px-3">
                                <div>
                                    <img src="images/logo.jpg" alt="" class="my-4 mx-3">
                                    <a href="#" class="float-right mt-4 mx-3" type="button" data-toggle="modal" data-target="#exampleModal">
                                        <i class="fa-solid fa-marker" style="font-size:1.2rem"></i>
                                    </a>
                                </div>
                                <hr class="border-light m-0">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="form-label">Student ID :</label>
                                        <p>{{$data->StudentId}}</p>
                                    </div>
                                    @error('UStudentName')
                                    <div class="alert alert-danger">** {{$message}} **</div>
                                    @enderror
                                    <div class="form-group">
                                        <label class="form-label">Student Name :</label>
                                        <p>{{$data->StudentName}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Student E-mail :</label>
                                        <p>{{$data->StudentEmail}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 p-0">
                                <img src="https://images.unsplash.com/photo-1481627834876-b7833e8f5570?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDJ8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="#" class="w-100" style="opacity: 0.8">
                            </div>
                        </div>
                    </div>
                    <!-- Profile end -->
                </div>
            </div>
        </div>
    </div>

</div>
@endsection