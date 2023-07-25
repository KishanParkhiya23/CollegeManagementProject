@extends('Master_Page')

@section('admin')

<title>Student Update | The Education Collage</title>


<section class="h-100 h-custom gradient-custom-2 mt-5" id="RegForm">
    <div class="container py-4 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
                <div class="card card-registration card-registration-2 mb-5" style="border-radius: 20px;">
                    <div class="card-body">
                        <div class="p-5">
                            <form action="{{route('UpdateStudentSave',$std->id)}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="Title pb-5 text-center">Edit Student</p>
                                    </div>
                                </div>
                                <div class="row g-0 my-3">
                                    <div class="col-md-4">
                                        <div class="form-outline">
                                            <input type="text" id="RegFname" class="form-control form-control-lg" name="UpFname" value="{{$std->Fname}}" />
                                            <label class="form-label" for="RegFname">First name</label>
                                            <span class="text-danger" style="font-size: .75rem;">
                                                @error('UpFname')
                                                *** {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-outline">
                                            <input type="text" id="RegMname" class="form-control form-control-lg" name="UpMname" value="{{$std->Mname}}" />
                                            <label class="form-label" for="RegMname">Middle name</label>
                                            <span class="text-danger" style="font-size: .75rem;">
                                                @error('UpMname')
                                                *** {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-outline">
                                            <input type="text" id="RegLname" class="form-control form-control-lg" name="UpLname" value="{{$std->Lname}}" />
                                            <label class="form-label" for="RegLname">Last name</label>
                                            <span class="text-danger" style="font-size: .75rem;">
                                                @error('UpLname')
                                                *** {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0 mt-3">
                                    <div class="col-md-8">
                                        <div class="form-outline">
                                            <div class="mb-4 pb-2">
                                                <div class="form-outline form-white">
                                                    <input type="text" id="RegStreetAdd1" class="form-control form-control-lg" name="UpStreetAdd1" value="{{$std->Address}}" />
                                                    <label class="form-label" for="RegStreetAdd1">Street Address</label>
                                                    <span class="text-danger" style="font-size: .75rem;">
                                                        @error('UpStreetAdd1')
                                                        *** {{$message}}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-outline">
                                            <input type="number" id="RegMobile" class="form-control form-control-lg" name="UpMobile" value="{{$std->Mobile}}" />
                                            <label class="form-label" for="RegMobile">Mobile Number</label>
                                            <span class="text-danger" style="font-size: .75rem;">
                                                @error('UpMobile')
                                                *** {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0 mb-3">
                                    <div class="col-md-4">
                                        <select name="UpGender" id="RegGender" class="select form-control form-control-lg">
                                            <option disabled></option>
                                            <option {{ $std->Gender == 'Male' ? "selected" : '' }}>Male</option>
                                            <option {{ $std->Gender == 'Female' ? "selected" : '' }}>Female</option>
                                            <option {{ $std->Gender == 'Other' ? "selected" : '' }}>Other</option>
                                        </select>
                                        <label class="form-label" for="RegGender">Gender</label>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-outline">
                                            <input type="date" id="RegDOB" value="{{$std->DOB}}" class="form-control form-control-lg" name="UpDOB" />
                                            <label class="form-label" for="RegDOB">Date Of Birth</label>
                                            <span class="text-danger" style="font-size: .75rem;">
                                                @error('UpDOB')
                                                *** {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <select name="UpReligion" id="RegReligion" class="select form-control form-control-lg">
                                            <option disabled selected></option>
                                            <option {{ $std->Religion == 'Hindu' ? "selected" : '' }}>Hindu</option>
                                            <option {{ $std->Religion == 'Muslim' ? "selected" : '' }}>Muslim</option>
                                            <option {{ $std->Religion == 'Sikh' ? "selected" : '' }}>Sikh</option>
                                            <option {{ $std->Religion == 'Isai' ? "selected" : '' }}>Isai</option>
                                            <option {{ $std->Religion == 'Other' ? "selected" : '' }}>Other</option>
                                        </select>
                                        <label class="form-label" for="RegReligion">Religion</label>
                                    </div>
                                </div>
                                <div class="row g-0 my-3">
                                    <div class="col-md-4">
                                        <select name="UpYear" id="RegYear" class="select form-control form-control-lg">
                                            <option disabled>Select Year</option>
                                            @foreach ($Year as $year)
                                            <option {{ $std->Year == $year->Year ? "selected" : '' }}>{{$year->Year}}</option>
                                            @endforeach
                                        </select>
                                        <label class="form-label" for="RegYear">Year</label>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-outline">
                                            <select name="UpClass" id="RegClass" class="select form-control form-control-lg">
                                                <option disabled>Select Class</option>
                                                @foreach ($Class as $class)
                                                <option {{ $std->Class == $class->Class ? "selected" : '' }}>{{$class->Class}}</option>
                                                @endforeach
                                            </select>
                                            <label class="form-label" for="RegClass">Class</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="file" id="UpPhoto" class="form-control form-control-lg p-2" name="RegPhoto" />
                                        <label class="form-label" for="RegPhoto">Pasport Size Photo</label>

                                    </div>
                                </div>
                                <div class="row g-0 mt-5">
                                    <div class="col-md-4">
                                        <a type="button" href="" class="btn btn-outline-info w-100">Cancle</a>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="reset" value="Reset" class="btn btn-outline-secondary w-100">
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-outline">

                                            <button type="submit" class="w-100 btn btn-primary btn-lg float-right" data-mdb-ripple-color="dark">Register</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection