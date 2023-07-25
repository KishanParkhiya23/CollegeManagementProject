<div class="site-wrap">
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>
    <div class="py-2 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9 d-none d-lg-block">
                    <a href="{{route('StudentContact')}}" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Have a questions?</a>
                    <a style="color: #51be78;" class="small mr-3"><span class="icon-phone2 mr-2"></span> 10 20 123 456</a>
                    <a style="color: #51be78;" class="small mr-3"><span class="icon-envelope-o mr-2"></span> info@mydomain.com</a>
                </div>
                <div class="col-lg-3 text-right">
                    <a href="{{route('StudentLogIn')}}" class="small mr-3"><span class="icon-unlock-alt"></span> Log In</a>
                    <a href="{{route('StudentRegistration')}}" class="small btn btn-primary px- py-2 rounded-0"><span class="icon-users"></span> Register</a>

                </div>
            </div>
        </div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
        <div class="container">
            <div class="d-flex align-items-center">
                <div class="site-logo">
                    <a href="{{route('StudentHome')}}" class="d-block">
                        <img src="images/logo.jpg" alt="Image" class="img-fluid">
                    </a>
                </div>
                <div class="">
                    <nav class="site-navigation position-relative text-right" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li>
                                <a href="{{route('StudentHome')}}" class="nav-link text-left">Home</a>
                            </li>
                            <li>
                                <a href="{{route('StudentAbout')}}" class="nav-link text-left">About</a>
                            </li>
                            <li>
                                <a href="{{route('StudentAdmissions')}}" class="nav-link text-left">Admissions</a>
                            </li>
                            <li>
                                <a href="{{route('StudentCourse')}}" class="nav-link text-left">Courses</a>
                            </li>
                            <li>
                                <a href="{{route('StudentResult')}}" class="nav-link text-left">Result</a>
                            </li>
                            <li>
                                <a href="{{route('StudentContact')}}" class="nav-link text-left ">Contact</a>
                            </li>
                            <li>
                                <a href="{{route('StudentProfile')}}" class="nav-link text-left mr-4">
                                    Profile
                                    <i class="fa-solid fa-user ml-2" style="font-size: 1.3rem;color:#51be78!important"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="ml-auto">
                    <div class="social-wrap">
                        <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </header>