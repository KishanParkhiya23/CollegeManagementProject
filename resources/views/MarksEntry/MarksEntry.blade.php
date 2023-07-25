@extends('Master_Page')

@section('admin')
<title>Marks Entry | The Education Collage</title>


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
                        <form action="{{route('MarksEntrySave')}}" class="form ">
                            <h3 class="text-center text-uppercase font-weight-bold text-primary pt-3 pb-5">Enter Marks Details</h3>
                            <label for="Class" class="label">Select ID :</label>
                            <select name="StudentId" id="StudentId" class="form-control">
                                <option selected disable></option>
                                @foreach ($student as $stu)
                                <option>{{$stu->StudentId}}</option>
                                @endforeach
                            </select>

                            <label for="Class" class="label">Student Class :</label>
                            <select name="StudentClass" id="StudentClass" class="form-control">
                                <option selected disable></option>
                                @foreach ($Class as $class)
                                <option value="{{$class->Class}}">{{$class->Class}}</option>
                                @endforeach
                            </select>


                            <label for="Class" class="label">Student Year :</label>
                            <select name="StudentYear" id="StudentYear" class="form-control">
                                <option selected disable></option>
                                @foreach ($Year as $year)
                                <option value="{{$year->Year}}">{{$year->Year}}</option>
                                @endforeach
                            </select>
                            <label for="Class" class="label">Student Subject :</label>
                            <select name="StudentSubject" id="StudentSubject" class="form-control">
                                <option selected disable></option>
                                @foreach ($Subject as $Sub)
                                <option value="{{$Sub->Subject}}">{{$Sub->Subject}}</option>
                                @endforeach
                            </select>
                            <label for="Class" class="label">Grade :</label>
                            <select name="Grade" id="Grade" class="form-control">
                                <option selected disable></option>
                                @foreach ($Grade as $Grd)
                                <option value="{{$Grd->Grade}}">{{$Grd->Grade}}</option>
                                @endforeach
                            </select>
                            <label for="Class" class="label">Total Marks :</label>
                            <input type="number" id="Class" class="form-control" name="TotalMarks" required>
                            <label for="Class" class="label">Obtain Marks :</label>
                            <input type="number" id="Class" class="form-control" name="ObtainMarks" required>
                            <input type="submit" value="OK" class="btn btn-outline-primary mb-2 mt-4">
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!-- Model end  -->
        <div class="row">
            <h3 class="ml-3 mr-3 mb-2 text-primary font-weight-bold">Marks Details</h3>

            <button type="button" class="btn btn-outline-primary ml-auto mr-3 mb-3" data-toggle="modal" data-target="#exampleModal">
                <i class="fa-solid fa-user-plus mr-1" style="font-size:1rem;"></i> Add Marks
            </button>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr class="bg-primary text-light">
                        <th scope="col">Sr.No</th>
                        <th scope="col">Studen ID</th>
                        <th scope="col">Student Class</th>
                        <th scope="col">Student year</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Grade</th>
                        <th scope="col">Total Marks</th>
                        <th scope="col">Obtained Marks</th>
                        <th scope="col" style="width: 16.5%;"">Options</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($data as $key=>$data)
                    <tr>
                        <th>{{$key+1}}</th>
                        <td>{{$data->StudentId}}</td>
                        <td>{{$data->Class}}</td>
                        <td>{{$data->Year}}</td>
                        <td>{{$data->Subject}}</td>
                        <td>{{$data->Grade}}</td>
                        <td>{{$data->TotalMarks}}</td>
                        <td>{{$data->ObtainMarks}}</td>
                        <td>
                            <a href=" {{route('UpdateMarks',$data->id)}}" class="btn btn-primary mx-1">Edit</a>
                            <a href="{{route('DeleteMarks',$data->id)}}" class="btn btn-danger mx-1">Delete</a>
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