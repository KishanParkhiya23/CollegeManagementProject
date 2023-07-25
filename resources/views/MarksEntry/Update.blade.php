<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- extraa links -->
    <link rel="stylesheet" href="css/style.css">
    <title>Marks Update | The Education Collage</title>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 p-5 border rounded my-3">
                <form action="{{route('UpdateMarksSave',$UpdateMarks->id)}}" class="form" method="post">
                    @csrf
                    <h3 class="text-center text-uppercase font-weight-bold text-primary pt-3 pb-3">Update Your Marks</h3>
                    <label for="Class" class="label">Select ID :</label>
                    <select name="StudentId" id="StudentId" class="form-control">
                        <option disable></option>
                        @foreach ($student as $stu)
                        <option {{$UpdateMarks -> StudentId == $stu->StudentId ? 'selected' : ''}}>{{$stu->StudentId}}</option>
                        @endforeach
                    </select>

                    <label for="Class" class="label">Student Class :</label>
                    <select name="UpStudentClass" id="StudentClass" class="form-control">
                        <option disable></option>
                        @foreach ($Class as $class)
                        <option value="{{$class->Class}}" {{$UpdateMarks -> Class == $class->Class ? 'selected' : ''}}>{{$class->Class}}</option>
                        @endforeach
                    </select>
                    <label for="Class" class="label">Student Year :</label>
                    <select name="UpStudentYear" id="StudentYear" class="form-control">
                        <option disable></option>
                        @foreach ($Year as $year)
                        <option value="{{$year->Year}}" {{$UpdateMarks -> Year == $year->Year ? 'selected' : ''}}>{{$year->Year}}</option>
                        @endforeach
                    </select>
                    <label for="Class" class="label">Student Subject :</label>
                    <select name="UpStudentSubject" id="StudentSubject" class="form-control">
                        <option disable></option>
                        @foreach ($Subject as $Sub)
                        <option value="{{$Sub->Subject}}" {{$UpdateMarks -> Subject == $Sub->Subject ? 'selected' : ''}}>{{$Sub->Subject}}</option>
                        @endforeach
                    </select>
                    <label for="Class" class="label">Grade :</label>
                    <select name="Grade" id="Grade" class="form-control">
                        <option selected disable></option>
                        @foreach ($Grade as $Grd)
                        <option value="{{$Grd->Grade}}" {{$UpdateMarks -> Grade == $Grd->Grade ? 'selected' : ''}}>{{$Grd->Grade}}</option>
                        @endforeach
                    </select>
                    <label for="Class" class="label">Total Marks :</label>
                    <input type="number" id="Class" class="form-control" name="UTotalMarks" value="{{$UpdateMarks->TotalMarks}}" required>
                    <label for="Class" class="label">Obtain Marks :</label>
                    <input type="number" id="Class" class="form-control" name="UObtainMarks" value="{{$UpdateMarks->ObtainMarks}}" required>
                    <input type="submit" value="Update" class="btn btn-outline-primary mb-2 mt-4">
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>

</html>