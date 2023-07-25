@extends('Master_Page')

@section('admin')
<title>Class | The Education Collage</title>
<!----------------------
Form Start from here 
------------------------>
<div id="ClassForm" class="h-100">
    <div class="container p-5">
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="col-md-12 p-5">
                        <form action="{{route('ClassSave')}}" class="form" method="post">
                            @csrf
                            <h3 class="text-center text-uppercase font-weight-bold text-primary pt-3 pb-5">Enter Your Class</h3>
                            <label for="Class" class="label">Class :</label>
                            <input type="text" id="Class" class="form-control" name="Class" required>
                            <input type="submit" value="OK" class="btn btn-outline-primary mb-2 mt-4">
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <h3 class="ml-3 mr-3 mb-2 text-primary font-weight-bold">Class Details</h3>

            <button type="button" class="btn btn-outline-primary ml-auto mr-3 mb-3" data-toggle="modal" data-target="#exampleModal">
                <i class="fa-solid fa-user-plus mr-1" style="font-size:1rem;"></i> Add Another Class
            </button>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr class="bg-primary text-light">
                        <th scope="col">Sr. no</th>
                        <th scope="col">Class</th>
                        <th scope="col" class="w-25">Options</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($ClassData as $key=>$data)
                    <tr>
                        <th>{{$key+1}}</th>
                        <td>{{$data->Class}}</td>
                        <td>
                            <a href="{{route('UpdateClassCall',$data->id)}}" class="btn btn-primary mx-1">Edit</a>
                            <a href="{{route('DeleteClass',$data->id)}}" class="btn btn-danger mx-1">Delete</a>
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