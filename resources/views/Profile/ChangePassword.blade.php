@extends('Master_Page')

@section('admin')
<title>Change Password | The Education Collage</title>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 p-5">
            <form action="{{route('ChangePassword')}}" class="form text-left" method="post">
                @csrf
                <h3 class="text-uppercase font-weight-bold text-primary pt-3 pb-5">Change Password</h3>
                <label for="Class" class="label">Enter Old Password :</label>
                @if (Session::has('OldPswdNMatch'))
                <span class="text-danger"> *** {{Session::get('OldPswdNMatch')}}</span>
                @endif
                <input type="password" id="Class" class="form-control" name="CPOld">
                <label for="Class" class="label">New Password :</label>
                <input type="password" id="Class" class="form-control" name="CPNew">
                <label for="Class" class="label">Re-enter password :</label>
                @if (Session::has('PswdNMtch'))
                <span class="text-danger"> *** {{Session::get('PswdNMtch')}}</span>
                @endif
                <input type="password" id="Class" class="form-control" name="CPRNew">

                <input type="checkbox" id="checkbox" class="m-2" required> 
                <label for="checkbox">I am agree with change password</label>

                <a href="{{route('Forget')}}" class="float-right mt-2">Forget Password ?</a>

                <input type="submit" value="OK" class="btn btn-outline-primary ml-auto w-50 mt-4 d-block">
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

@endsection