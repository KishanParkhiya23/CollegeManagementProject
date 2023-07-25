@extends('StudentEnd.Main.StudentMaster')

@section('StudentAdmin')

<style>
    .site-section {
        margin-top: 7rem !important;
    }

    hr {
        border-top: 1px solid rgb(81 190 119)
    }

    .result h6 {
        color: rgb(81 190 119);
        display: inline-block;
    }

    .result p {
        display: inline-block;
        font-size: .9rem;
    }

    .result table {
        font-size: 1rem;
    }
</style>

<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-7">
                <h2 class="mb-0">Get Result</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
        </div>
    </div>
</div>
<div class="container result  my-5">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10  border border-primary rounded">
            <div class="row p-3">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12 px-4 py-3">
                            <img src="images\logo.jpg" alt="LOGO">
                        </div>
                    </div>
                    <hr>
                    <div class="row mt-4 pl-2">
                        <div class="col-md-10">
                            <h6>Student Id : </h6>
                            <p>{{$Student -> StudentId}}</p>
                        </div>
                        <div class="col-md-2">
                            <h6>Year : </h6>
                            <p>{{$ClassYear -> Year}}</p>
                        </div>
                    </div>
                    <div class="row pl-2">
                        <div class="col-md-10">
                            <h6>Student Name : </h6>
                            <p>{{$Student -> Fname}} {{$Student -> Mname}} {{$Student -> Lname}}</p>
                        </div>
                        <div class="col-md-2">
                            <h6>Class : </h6>
                            <p>{{$ClassYear -> Class}}</p>

                        </div>
                    </div>
                    <div class="row pl-2">
                        <div class="col-md-10">
                            <h6>Date Of Birth : </h6>
                            <p>{{$Student -> DOB}}</p>
                        </div>
                        <div class="col-md-2">
                        </div>
                    </div>
                    <hr>
                    <div class="table-responsive px-3">
                        <table class="table">
                            <thead class="bg-primary text-white">
                                <th style="width: 10%">SR No</th>
                                <th style="width: 40%">Subject</th>
                                <th style="width: 17%">Total Marks</th>
                                <th style="width: 17%">Obtain Marks</th>
                                <th style="width: 16%">Grade</th>
                            </thead>
                            <tbody>
                                <?php
                                $Ttotal = NULL;
                                $Ototal = NULL;
                                ?>
                                @foreach ($Marks as $key => $Result)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$Result-> Subject}}</td>
                                    <td>{{$Result-> TotalMarks}}</td>
                                    @if ($Result->ObtainMarks < 35) <td class="text-danger font-weight-bold">
                                        {{$Result->ObtainMarks}}
                                        </td>
                                        @else
                                        <td>{{$Result->ObtainMarks}}</td>
                                        @endif
                                        <td>{{$Result-> Grade}} </td>
                                </tr>
                                <?php

                                $Ttotal = $Ttotal + $Result->TotalMarks;
                                $Ototal = $Ototal + $Result->ObtainMarks;
                                ?>
                                @endforeach

                                <tr>
                                    <td class="border-0"></td>
                                    <td class="float-right">Total :</td>
                                    <td> <?php
                                            echo $Ttotal;
                                            ?>
                                    </td>
                                    <td>
                                        <?php echo $Ototal; ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="table-responsive px-3">

                                <table class="table text-center">
                                    <thead class="bg-primary text-white">
                                        <th class="py-1" style="width: 33.33%">Percentage</th>
                                        <th class="py-1" style="width: 33.33%">Percentile</th>
                                        <th class="py-1" style="width: 33.33%">Grade</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <?php
                                                $per = ($Ototal / $Ttotal) * 100;
                                                echo $per . '%';
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                echo $per . '%';
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                switch ($per) {
                                                    case $per > 90:
                                                        echo 'A++';
                                                        break;
                                                    case $per > 80:
                                                        echo 'A';
                                                        break;
                                                    case $per > 70:
                                                        echo 'B+';
                                                        break;
                                                    case $per > 60:
                                                        echo 'B';
                                                        break;
                                                    case $per > 50:
                                                        echo 'C';
                                                        break;
                                                    case $per < 35:
                                                        echo 'Fail';
                                                        break;
                                                }
                                                ?>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
            </div>
            <div class="row bg-primary">
                <div class="col-md-12 text-center py-1">
                    <h6 class="text-light">Genereted By <a href="{{route('StudentHome')}}" class="text-white">The Education College</a></h6>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>

@endsection