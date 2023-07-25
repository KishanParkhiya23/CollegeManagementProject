<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- extraa links -->
    <link rel="icon" href="img/icon.png">
    <script src="https://kit.fontawesome.com/88bf84b9d4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">

    <title>Forget Password | The Education Collage</title>

</head>

<body>


    <div id="LogIn">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Forget Password ?</h3>

                            @if (session()->has('EmailNotMatched'))
                            <span class="text-danger"> *** {{Session::get('EmailNotMatched')}}</span>
                            @endif
                            @if (session()->has('PhNotMatched'))
                            <span class="text-danger"> *** {{Session::get('PhNotMatched')}}</span>
                            @endif
                            @if (session()->has('DOBNotMatched'))
                            <span class="text-danger"> *** {{Session::get('DOBNotMatched')}}</span>
                            @endif

                            <form action="{{route('ForgetNewPswd')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12  pb-2">
                                        <div class="form-outline">
                                            <input type="text" name="FrEmail" id="emailAddress" class="form-control form-control-lg" autocomplete="off" value="{{old('FrEmail')}}" />
                                            <label class="form-label" for="emailAddress">Email</label>
                                            <span class="text-danger">
                                                @error('FrEmail')
                                                *** {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 pb-2">
                                        <div class="form-outline">
                                            <input type="number" name="FrMo" id="LogPswd" class="form-control form-control-lg" autocomplete="off" value="{{old('FrMo')}}" />
                                            <label class="form-label" for="LogPswd">Mobile Number</label>
                                            <span class="text-danger">
                                                @error('FrMo')
                                                *** {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 pb-2">
                                        <div class="form-outline">
                                            <input type="date" name="FrDOB" id="LogPswd" class="form-control form-control-lg" autocomplete="off" value="{{old('FrDOB')}}" />
                                            <label class="form-label" for="LogPswd">Date Of Birth</label>
                                            <span class="text-danger">
                                                @error('FrDOB')
                                                *** {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4 pt-2">
                                    <input class="btn btn-primary btn-lg float-right" type="submit" value="Submit" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>