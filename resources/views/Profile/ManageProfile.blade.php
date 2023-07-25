@extends('Master_Page')

@section('admin')
<title>Manage Profile | The Education Collage</title>

<!-----------------------
 Form start from here 
------------------------->
<section id="UserReg" class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Edit Profile</h3>
                        <form action="{{route('UpdateSaveProfile',$Edit->id)}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-4">

                                    <div class="form-outline">
                                        <input type="text" id="firstName" name="UsrFname" class="form-control form-control-lg" value="{{$Edit->Fname}}" />
                                        <label class="form-label" for="firstName">First Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">

                                    <div class="form-outline">
                                        <input type="text" id="lastName" name="UsrLname" class="form-control form-control-lg" value="{{$Edit->Lname}}" />
                                        <label class="form-label" for="lastName">Last Name</label>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4 d-flex align-items-center">

                                    <div class="form-outline datepicker w-100">
                                        <input type="date" name="UsrDOB" class="form-control form-control-lg" id="birthdayDate" value="{{$Edit->DOB}}" />
                                        <label for="birthdayDate" class="form-label">Birthday</label>
                                    </div>

                                </div>
                                <div class="col-md-6 mb-4">
                                    <h6 class="mb-2 pb-1">Gender: </h6>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="UsrGender" id="femaleGender" value="Female" {{$Edit->Gender == 'Female' ? 'checked' : ''}} />
                                        <label class="form-check-label" for="femaleGender">Female</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="UsrGender" id="maleGender" value="Male" {{$Edit->Gender == 'Male' ? 'checked' : ''}} />
                                        <label class="form-check-label" for="maleGender">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="UsrGender" id="otherGender" value="Other" {{$Edit->Gender == 'Other' ? 'checked' : ''}} />
                                        <label class="form-check-label" for="otherGender">Other</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4 pb-2">

                                    <div class="form-outline">
                                        <input type="email" name="UsrEmail" id="emailAddress" class="form-control form-control-lg" value="{{$Edit->Email}}" />
                                        <label class="form-label" for="emailAddress">Email</label>
                                    </div>

                                </div>
                                <div class="col-md-6 mb-4 pb-2">

                                    <div class="form-outline">
                                        <input type="number" name="UsrPhone" id="phoneNumber" class="form-control form-control-lg" value="{{$Edit->Phone}}" />
                                        <label class="form-label" for="phoneNumber">Phone Number</label>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <select class="select form-control form-control-lg" name="UsrStream">
                                        <option disabled>Select Stream</option>
                                        <option value="BBA" {{$Edit->Stream == 'BBA' ? 'selected' : ''}}>BBA</option>
                                        <option value="BCA" {{$Edit->Stream == 'BCA' ? 'selected' : ''}}>BCA</option>
                                        <option value="BCOM" {{$Edit->Stream == 'BCOM' ? 'selected' : ''}}>BCOM</option>
                                        <option value="BA" {{$Edit->Stream == 'BA' ? 'selected' : ''}}>BA</option>
                                    </select>
                                    <label class="form-label select-label">Choose option</label>

                                </div>
                            </div>
                            <div class="mt-4 pt-2">
                                <a href="{{route('Profile')}}" class="btn btn-outline-secondary btn-lg  float-left p-1" type="Reset">Cancle </a>
                                <input class="btn btn-primary btn-lg  float-right" type="submit" value="Save Update" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-----------------------
 Form end here 
------------------------->
@endsection