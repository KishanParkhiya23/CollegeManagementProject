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

    <title>Result | The Education Collage</title>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center my-5 font-weight-bold"> <a href="Home" style="font-size: 1rem;" class="text-secondary">HOME</a>
                    <p class="d-inline text-secondary" style="font-size: 1rem;"> / </p> Student Marksheet
                </h3>
            </div>
        </div>
    </div>
    <div class="container mb-5 border border-secondary">
        <div class="row  p-2 my-4">
            <div class="col-md-12">
                <div class="row border-bottom border-secondary">
                    <div class="col-md-12">
                        <i class="fa-solid fa-graduation-cap px-3 pt-2 pb-4" style="font-size: 3rem;"></i>
                        <h3 class="d-inline-block ">The Eductation College</h3>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6 mt-2">
                        <h5 class="d-inline-block font-weight-bold">Student ID :</h5>
                        <p class="d-inline-block pl-2">{{$student->StudentId}}</p>
                    </div>
                    <div class="col-md-6">
                        <p class="d-inline-block pl-2 float-right">{{$Year->Year}}</p>
                        <h5 class="d-inline-block font-weight-bold float-right">Year :</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 ">
                        <h5 class="d-inline-block font-weight-bold">Name :</h5>
                        <p class="d-inline-block pl-2">{{$student->Fname}} {{$student->Mname}} {{$student->Lname}}</p>
                    </div>
                    <div class="col-md-6">
                        <p class="d-inline-block pl-2 float-right">{{$Year->Class}}</p>
                        <h5 class="d-inline-block font-weight-bold float-right">Class :</h5>
                    </div>
                </div>
                <div class="row border-bottom border-secondary">
                    <div class="col-md-12 ">
                        <h5 class="d-inline-block font-weight-bold">Date Of Birth :</h5>
                        <p class="d-inline-block pl-2">{{$student->DOB}}</p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <table class="table">
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th scope="col" style="width: 10%;">No</th>
                                    <th scope="col" style="width: 50%;">Subject</th>
                                    <th sclope="col" style="width: 15%;">Total Marks</th>
                                    <th scope="col" style="width: 15%;">Obtain Marks</th>
                                    <th scope="col" style="width: 10%;">Grade</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $Ttotal = NULL;
                                $Ototal = NULL;
                                ?>
                                @foreach ( $data as $key => $marks )
                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td>{{$marks->Subject}}</td>
                                    <td>{{$marks->TotalMarks}}</td>
                                    @if ($marks->ObtainMarks < 35) <td class="text-danger font-weight-bold">{{$marks->ObtainMarks}}</td>
                                        @else
                                        <td>{{$marks->ObtainMarks}}</td>
                                        @endif

                                        <td>{{$marks->Grade}}</td>
                                        <?php
                                        $Ttotal = $Ttotal + $marks->TotalMarks;
                                        $Ototal = $Ototal + $marks->ObtainMarks;
                                        ?>
                                </tr>
                                @endforeach

                                <tr class="">
                                    <td class="border-top border-white"></td>
                                    <th class="float-right">Total :</th>
                                    <td>
                                        <?php
                                        echo $Ttotal;
                                        ?>
                                    </td>
                                    <td><?php echo $Ototal; ?></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <table class="table text-center">
                                    <thead class="bg-secondary text-white">
                                        <th class="py-2">Percentage</th>
                                        <th class="py-2">Percentile</th>
                                        <th class="py-2">Grade</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <?php
                                                $per = ($Ototal / $Ttotal) * 100;
                                                echo $per . '%';
                                                ?>
                                            </td>
                                            <td><?php
                                                echo $per . '%';
                                                ?></td>
                                            <td>
                                                <?php
                                                switch ($Ttotal) {
                                                    case $Ttotal > 90:
                                                        echo 'A++';
                                                        break;
                                                    case $Ttotal > 80:
                                                        echo 'A';
                                                        break;
                                                    case $Ttotal > 70:
                                                        echo 'B+';
                                                        break;
                                                    case $Ttotal > 60:
                                                        echo 'B';
                                                        break;
                                                    case $Ttotal > 50:
                                                        echo 'C';
                                                        break;
                                                    case $Ttotal < 35:
                                                        echo 'Fail';
                                                        break;
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center py-2" style="background-color: #d9d9d9;">
                <h6>Generated by <a href="Home">The Education College</a> <i class="fa fa-registered" style="font-size:.6rem"></i></h6>
            </div>
        </div>
    </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>