@extends('Master_Page')

@section('admin')

<title>Regestration | The Education Collage</title>

<!------------------------------- 
Regestration Form Start from Here
-------------------------------->

<section class="h-100 h-custom gradient-custom-2 mt-5" id="RegForm">
    <div class="container py-4 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
                <div class="card card-registration card-registration-2 mb-5" style="border-radius: 20px;">
                    <div class="card-body">
                        <div class="p-5">
                            <form action="{{route('RegSave')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="Title pb-5 text-center">student regetration</p>
                                    </div>
                                </div>
                                <div class="row g-0 my-3">
                                    <div class="col-md-4">
                                        <div class="form-outline">
                                            <input type="text" id="RegFname" class="form-control form-control-lg" name="RegFname" value="{{old('RegFname')}}" />
                                            <label class="form-label" for="RegFname">First name</label>
                                            <span class="text-danger" style="font-size: .75rem;">
                                                @error('RegFname')
                                                *** {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-outline">
                                            <input type="text" id="RegMname" class="form-control form-control-lg" name="RegMname" value="{{old('RegMname')}} "/>
                                            <label class=" form-label" for="RegMname">Middle name</label>
                                            <span class="text-danger " style="font-size: .75rem;">
                                                @error('RegMname')
                                                *** {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-outline">
                                            <input type="text" id="RegLname" class="form-control form-control-lg" name="RegLname" value="{{old('RegLname')}}" />
                                            <label class=" form-label" for="RegLname">Last name</label>
                                            <span class="text-danger " style="font-size: .75rem;">
                                                @error('RegLname')
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
                                                    <input type="text" id="RegStreetAdd1" class="form-control form-control-lg" name="RegStreetAdd1" value="{{old('RegStreetAdd1')}}"/>
                                                    <label class=" form-label" for="RegStreetAdd1">Street Address</label>
                                                    <span class="text-danger" style="font-size: .75rem;">
                                                        @error('RegStreetAdd1')
                                                        *** {{$message}}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-outline">
                                            <input type="number" id="RegMobile" class="form-control form-control-lg" name="RegMobile" value="{{old('RegMobile')}}" />
                                            <label class=" form-label" for="RegMobile">Mobile Number</label>
                                            <span class="text-danger" style="font-size: .75rem;">
                                                @error('RegMobile')
                                                *** {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0 mb-3">
                                    <div class="col-md-4">
                                        <select name="RegGender" id="RegGender" class="select form-control form-control-lg">
                                            <option disabled selected>Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <label class="form-label" for="RegGender">Gender</label>
                                        <span class="text-danger" style="font-size: .75rem;">
                                            @error('RegGender')
                                            *** {{$message}}
                                            @enderror
                                        </span>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-outline">
                                            <input type="date" id="RegDOB" class="form-control form-control-lg" name="RegDOB" value="{{old('RegFname')}}"/>
                                            <label class=" form-label" for="RegDOB">Date Of Birth</label>
                                            <span class="text-danger" style="font-size: .75rem;">
                                                @error('RegDOB')
                                                *** {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <select name="RegReligion" id="RegReligion" class="select form-control form-control-lg">
                                            <option disabled selected></option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Muslim">Muslim</option>
                                            <option value="Sikh">Sikh</option>
                                            <option value="Isai">Isai</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <label class="form-label" for="RegReligion">Religion</label>
                                        <span class="text-danger " style="font-size: .75rem;">
                                            @error('RegReligion')
                                            *** {{$message}}
                                            @enderror
                                        </span>

                                    </div>
                                </div>
                                <div class="row g-0 my-3">
                                    <div class="col-md-4">
                                        <select name="RegYear" id="RegYear" class="select form-control form-control-lg">
                                            <option disabled selected>Select Year</option>
                                            @foreach ($DataYear as $year)
                                            <option>{{$year->Year}}</option>
                                            @endforeach
                                        </select>
                                        <label class="form-label" for="RegYear">Year</label>
                                        <span class="text-danger " style="font-size: .75rem;">
                                            @error('RegYear')
                                            *** {{$message}}
                                            @enderror
                                        </span>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-outline">
                                            <select name="RegClass" id="RegClass" class="select form-control form-control-lg">
                                                <option disabled selected>Select Class</option>
                                                @foreach ($DataClass as $Class)
                                                <option>{{$Class->Class}}</option>
                                                @endforeach
                                            </select>
                                            <label class="form-label" for="RegClass">Class</label>
                                            <span class="text-danger" style="font-size: .75rem;">
                                                @error('RegClass')
                                                *** {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="file" id="RegPhoto" class="form-control form-control-lg p-2" name="RegPhoto" value="{{old('RegPhoto')}}"/>
                                        <label class=" form-label" for="RegPhoto">Pasport Size Photo</label>
                                        <span class="text-danger" style="font-size: .75rem;">
                                            @error('RegPhoto')
                                            *** {{$message}}
                                            @enderror
                                        </span>

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

<!------------------------------- 
Regestration Form end here 
-------------------------------->

@endsection