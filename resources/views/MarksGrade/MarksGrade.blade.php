@extends('Master_Page')

@section('admin')
<title>Marks Grade | The Education Collage</title>


<!----------------------
Form Start from here 
------------------------>
<div id="ClassForm">
    <div class="container p-5">
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="col-md-12 p-5">
                        <form action="{{route('MarksGradeSave')}}" class="form ">
                            <h3 class="text-center text-uppercase font-weight-bold text-primary pt-3 pb-5">Enter Marks Grade Details</h3>
                            <label for="Class" class="label">Enter Grade :</label>
                            <input type="text" id="Class" class="form-control" name="Grade" required>
                            <label for="Class" class="label">Start Marks :</label>
                            <input type="number" id="Class" class="form-control" name="SMarks" required>
                            <label for="Class" class="label">End Marks :</label>
                            <input type="number" id="Class" class="form-control" name="EMarks" required>
                            <label for="Class" class="label">Remarks :</label>
                            <input type="text" id="Class" class="form-control" name="Remarks" required>
                            <input type="submit" value="OK" class="btn btn-outline-primary mb-2 mt-4">
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <h3 class="ml-3 mr-3 mb-2 text-primary font-weight-bold">Marks Grade Details</h3>

            <button type="button" class="btn btn-outline-primary ml-auto mr-3 mb-3" data-toggle="modal" data-target="#exampleModal">
                <i class="fa-solid fa-user-plus mr-1" style="font-size:1rem;"></i> Add Marks Grade
            </button>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr class="bg-primary text-light">
                        <th scope="col">Sr. no</th>
                        <th scope="col">Grade</th>
                        <th scope="col">Start Marks</th>
                        <th scope="col">End Marks</th>
                        <th scope="col">Remarks</th>
                        <th scope="col" class="w-25">Options</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($MarksGradeData as $key=>$data)
                    <tr>
                        <th>{{$key+1}}</th>
                        <td>{{$data->Grade}}</td>
                        <td>{{$data->StartMarks}}</td>
                        <td>{{$data->EndMarks}}</td>
                        <td>{{$data->Remarks}}</td>
                        <td>
                            <a href="{{route('UpdateMarksGrade',$data->id)}}" class="btn btn-primary mx-1">Edit</a>
                            <a href="{{route('DeleteMarksGrade',$data->id)}}" class="btn btn-danger mx-1">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!----------------------
Form end here 
------------------------>

@endsection