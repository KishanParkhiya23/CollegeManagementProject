@extends('Master_Page')

@section('admin')
<title>Report Management | The Education Collage</title>
<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <p class="Title text-center py-0">Get Result</p>
        </div>
    </div>
    <div id="LogIn">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <form action="{{route('GenerateResult')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12  py-4">
                                        @if (Session::has('NotMatched'))
                                        <div class="alert alert-danger mb-4">{{Session::get('NotMatched')}}</div>
                                        @endif
                                        <div class="form-outline">
                                            <select name="RId" id="StudentClass" class="form-control" style="height: 2.5rem;">
                                                <option selected disabled> Select Id</option>
                                                @foreach ($Student as $stu)
                                                <option value="{{$stu->StudentId}}">{{$stu->StudentId}}</option>
                                                @endforeach

                                            </select>
                                            <label class="form-label" for="emailAddress">Student Id</label>
                                            @error('RId')
                                            <span class="text-danger">*** {{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12 pb-4">
                                        <div class="form-outline">
                                            <select name="RClass" id="StudentClass" class="form-control" style="height: 2.5rem;">
                                                <option selected disabled> Student Class</option>
                                                @foreach ($Class as $class)
                                                <option value="{{$class->Class}}">{{$class->Class}}</option>
                                                @endforeach
                                            </select>
                                            <label class="form-label" for="LogPswd">Student Class</label>
                                            @error('RClass')
                                            <span class="text-danger">*** {{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12 pb-4">
                                        <div class="form-outline">
                                            <select name="RYear" id="StudentYear" class="form-control" style="height: 2.5rem;">
                                                <option selected disabled> Student Year</option>
                                                @foreach ($Year as $year)
                                                <option value="{{$year->Year}}">{{$year->Year}}</option>
                                                @endforeach
                                            </select>
                                            <label class="form-label" for="LogPswd">Student Year</label>
                                            @error('RYear')
                                            <span class="text-danger">*** {{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-2 pt-2">
                                    <input class="btn btn-primary btn-lg float-right w-100" type="submit" value="Submit" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

@endsection