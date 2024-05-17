<!-- Header Part Start -->
<!-- <div class="sub-header" style="display: none;">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xs-12">
                <ul class="left-info">
                    <li><a href="#"><i class="fa fa-clock-o"></i>Sat - Thu: 9:00 to 18:00</a></li>
                    <li><a href="#"><i class="fa fa-phone"></i>+966 11 483 5783</a></li>
                    <li><a href="https://mail.google.com/mail?hl=en"><i class="fa fa-email"></i>info@asloobb.com</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="right-icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div> -->

<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('frontend') }}">
                <img src="{{ asset('frontend') }}/assets/images/logo_transparent.png" style="width:140px; height:45px;" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-2">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('frontend') }}">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('frontend-about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('frontend-service') }}">Services</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                          Projects
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('frontend-complete-projects') }}">Completed Projects</a>
                          <a class="dropdown-item" href="{{ route('frontend-running-projects') }}">On Going Projects</a>
                      </li>

                   
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('frontend-gallery') }}">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ asset('frontend/assets/images/company_profile/asloob_bedaa_profile.pdf') }}" target="_blank"> Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('frontend-career') }}">Career</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('frontend-contact') }}">Contact Us</a>

                    </li>



                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- Header Part End -->
