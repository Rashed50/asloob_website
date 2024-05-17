@extends('frontend.layouts.master')
@section('title', 'Our Portfolio')
@section('contents')

<div class="portfolio-page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Let's Build Something <br> Amazing Together</h1>
                <!-- <span></span> -->
                <span>We have over 3,000 Employees as Constraction Expert</span>
            </div>
        </div>
    </div>
</div>
<div class="more-info about-info">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 align-self-justify" style="text-align:justify;">
                        <div class="right-content">
                            <div class="card mb-3">

                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">

                                        {{-- @foreach ($projWiseMulImg as $mulImg)
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="{{ asset($mulImg->photo_path) }}" alt="First slide">
                                            </div>
                                        @endforeach --}}
                                        {{-- <div class="carousel-item">
                                            <img class="d-block w-100"
                                                src="{{ asset('frontend/assets/images/slide_01.jpg') }}"
                                                alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100"
                                                src="{{ asset('frontend/assets/images/page-heading-bg.jpg') }}"
                                                alt="Third slide">
                                        </div> --}}
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>

                                <h5 class="card-header">Project Details Informatiion</h5>
                                <div class="card-body">
                                    <div class="card">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item active"> Name: {{ $projectInfo->proj_name }}</li>
                                            <li class="list-group-item"><em class="font-weight-bold">Location:  &nbsp;</em> {{ $projectInfo->address }}</li>
                                            <li class="list-group-item"><em class="font-weight-bold">Duration:  &nbsp;</em> {{ $days }}</li>
                                            <li class="list-group-item"><em class="font-weight-bold">Cost:  &nbsp;</em> {{ $projectInfo->proj_budget }}</li>
                                        </ul>
                                    </div><br>
                                    <p class="card-text">{{ $projectInfo->proj_description }}</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- PORTFOLIO SECTION STARTED -->
<section id="portfolio" class="portfolio" style="margin-top: 50px;">
    <div class="text-center">
        <h2>Project Photos</h2>
        <img class="line img-fluid" src="{{ asset('frontend') }}/assets/images/line.png" alt="">
    </div>
    <div class="row">
        @foreach ($projWiseMulImg as $mulImg)
            {{-- <div class="col-md-4 border border-success"> --}}
            <div class="col-md-12" style="text-align: center;">
                <a href="#">
                    <div class="box">
                        <img class="img-fluid portfolio-img" src="{{ asset($mulImg->photo_path) }}"alt="">
                        <div class="icon">
                            <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/box-icon.png" alt="">
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</section>
<!-- PORTFOLIO SECTION ENDED -->


@endsection
