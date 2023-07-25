@extends('Master_Page')

@section('admin')
<title>Profile | The Education Collage</title>

<section style="background-color: #eee;">
    <div class="container my-1" style="padding:3.38% 0 ;">
        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar" class="rounded-circle img-fluid" style="width: 126px;">
                        <h5 class="my-3">{{$Profile->Fname}} {{$Profile->Lname}}</h5>

                        <div class="mb-2">
                            <div class="row mb-2 px-0">
                                <div class="col-md-6 pr-1">
                                    <a href="{{route('ChangePasswordCall')}}" type="button" class=" d-block w-100 btn btn-outline-secondary">
                                        Change Password
                                    </a>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <a href="{{route('LogOut')}}" class="d-block w-100 btn btn-outline-danger">Log Out</a>
                                </div>
                            </div>

                            <a href="{{route('ManageProfile',$Profile->id)}}" class="d-block w-100 mb-2 mx-auto btn btn-primary ">Manage Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Name</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$Profile->Fname}} {{$Profile->Lname}}</p>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Gender</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$Profile->Gender}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Stream</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$Profile->Stream}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Date Of Birth</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$Profile->DOB}} </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Mobile</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$Profile->Phone}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$Profile->Email}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection