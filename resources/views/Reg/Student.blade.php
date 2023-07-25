@extends('Master_Page')

@section('admin')

<title>Students | The Education Collage</title>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <p class="Title text-center py-3">Students</p>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr class="bg-primary text-light">
                            <th scope="col">Sr. No</th>
                            <th scope="col">Student Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Mobile No.</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Year</th>
                            <th scope="col">Class</th>
                            <th scope="col"></th>
                            <!-- <th scope="col"></th> -->

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($All as $key=>$Student)
                        <tr>
                            <th>{{$key +1}}</th>
                            <td>{{$Student->StudentId}}</td>
                            <td>{{$Student->Fname}} {{$Student->Mname}} </td>
                            <td>{{$Student->Mobile}}</td>
                            <td>{{$Student->Gender}}</td>
                            <td>{{$Student->Year}}</td>
                            <td>{{$Student->Class}}</td>
                            <!-- <td><img src="{{ (!empty($Student->Img))? url('img/'.$Student->Img):url('upload/No.jpg') }}" alt=""></td> -->
                            <td>
                                <a href="{{route('StudentUpdate',$Student->id)}}" class="btn btn-outline-primary">Edit</a>
                                <a href="{{route('DeleteStudent',$Student->id)}}" class="btn btn-outline-danger">delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection