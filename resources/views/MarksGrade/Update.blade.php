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
    <title>Marks grade Update | The Education Collage</title>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 p-5 border rounded my-5">
                <form action="{{route('UpdateSaveMarksGrade',$data->id)}}" class="form" method="">
                    @csrf
                    <h3 class="text-center text-uppercase font-weight-bold text-primary pt-3 pb-3">Update Your Marks</h3>
                    <label for="Class" class="label">Enter Grade :</label>
                    <input type="text" id="Class" class="form-control" name="UGrade"  value="{{$data->Grade}}" required>
                    <label for="Class" class="label">Start Marks :</label>
                    <input type="number" id="Class" class="form-control" name="USMarks"  value="{{$data->StartMarks}}" required>
                    <label for="Class" class="label">End Marks :</label>
                    <input type="number" id="Class" class="form-control" name="UEMarks" value="{{$data->EndMarks}}"  required>
                    <label for="Class" class="label">Remarks :</label>
                    <input type="text" id="Class" class="form-control" name="URemarks" value="{{$data->Remarks}}"  required>
                    <input type="submit" value="Update" class="btn btn-outline-primary mb-2 mt-4">
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>

</html>