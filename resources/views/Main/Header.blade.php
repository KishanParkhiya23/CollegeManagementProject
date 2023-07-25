<nav class="navbar navbar-expand-lg navbar-light" id="nav">
    <div class="navbar-brand  pr-3" href="#"><i class="fa-solid fa-graduation-cap mx-2"></i>The Education</div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{route('Home')}}">Dashboard</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    Setup Profile
                </a>
                <div class="dropdown-menu" id="dropdown">
                    <a class="dropdown-item" href="{{route('Class')}}">Class</a>
                    <a class="dropdown-item" href="{{route('Year')}}">Year</a>
                    <a class="dropdown-item" href="{{route('Subject')}}">Subject</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    Student Management
                </a>
                <div class="dropdown-menu" id="dropdown">
                    <a class="dropdown-item" href="{{route('Regestration')}}">Registration</a>
                    <a class="dropdown-item" href="{{route('StudentPage')}}">Students</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    Report Management
                </a>
                <div class="dropdown-menu" id="dropdown">
                    <a class="dropdown-item" href="{{route('ReportManagement')}}">Result</a>
                </div>
            </li>
           
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    Marks Management
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('MarksEntry')}}">Marks Entery</a>
                    <a class="dropdown-item" href="{{route('MarksGrade')}}">Marks grad</a>
                </div>
            </li>

        </ul>
        <div class="form-inline my-2 my-lg-0">
            <a href="{{route('Profile')}}"> <i class="fa-solid fa-user mx-3"></i></a>
        </div>
    </div>
</nav>