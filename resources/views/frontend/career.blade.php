@extends('frontend.layouts.master')
@section('title', 'Career')

@section('contents')
<div class="career-page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Build Your Career with us</h1>
                <!-- <span>We are over 20 years of experience</span> -->
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="section-heading">
                <h2><em>Join with our expert team</em></h2>
                <span>Here are available post for applying</span>
            </div>
        </div>
        @foreach ($jobs as $job)
        <div class="col-md-4" style="padding-left: 65px">
            <div class="card bg-light mb-3" style="max-width: 20rem; line-height:18px; ">
                <div class="card-header font-weight-bold">Vacancy: {{ $job->noOfVacancy }} </div>
                <div class="card-body">
                    <h5 class="card-title" style="font-weight: 400; font-size: 16px;">{{Str::limit($job->JobCircular->title) }}</h5>
                    {{-- <h5 class="card-title">{{ $job->JobCircular->title }}</h5> --}}
                    {{-- <p class="card-text d-inline"> <em style="font-weight: 600;">Opening: &nbsp; </em> {{
                        Carbon\Carbon::parse($job->openingDate)->format('d F Y') }} </p>
                    <p class="card-text"> <em style="font-weight: 600;"> Closing At: &nbsp;</em> {{
                        Carbon\Carbon::parse($job->closingDate)->format('d F Y') }} </p> --}}
                    <br>
                    <a href="#applyHere" class="btn btn-primary">Apply Now</a>
                </div>
            </div>
        </div>
        @endforeach
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
    </div>
</div><br>

<div class="callback-form callback-services">
    <div class="container">
        <form id="job-apply-form" method="post" action="{{ route('new.job.applicant.apply') }}"
            enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2><em>Don't forget to Touch Us</em></h2>
                        <span>Submit your application to us. Our Expert HR Manager will contact with you soon</span>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="contact-form">
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-md-12" id="applyHere">
                                    <div class="contact-form">

                                        <div class="row">
                                            <div class="col-lg-5 col-md-12 col-sm-12">
                                                <fieldset>
                                                    <input name="applicant_name" type="text" class="form-control"
                                                        id="applicant_name" placeholder="Your Full Name" required="">
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-4 col-md-12 col-sm-12">
                                                <fieldset>
                                                    <input name="email" type="text" class="form-control" id="email"
                                                        pattern="[^ @]*@[^ @]*" placeholder="Your E-Mail Address"
                                                        required="">
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12">
                                                <fieldset>
                                                    <input name="phone" type="text" class="form-control" id="phone"
                                                        placeholder="Contact Number" required="">
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-9 col-md-12 col-sm-12">
                                                <fieldset>
                                                    <input name="job_title" type="text" class="form-control"
                                                        id="job_title" placeholder="Title of Job Application"
                                                        required="">
                                                </fieldset>
                                            </div>

                                            <div class="col-lg-3 col-md-12 col-sm-12">
                                                <fieldset>
                                                    <input name="experiance_year" type="number" class="form-control"
                                                        id="experiance_year" placeholder="Year of Job Experience"
                                                        required>
                                                </fieldset>
                                            </div>

                                            <div class="col-lg-12">
                                                <fieldset>
                                                    <textarea name="message" rows="6" class="form-control" id="message"
                                                        placeholder="Your Message" required=""></textarea>
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-12">

                                                Upload Your Resume:
                                                <input type="file" class="form-control" id="myfile" name="myfile">

                                            </div>
                                            <div class="col-lg-12">
                                                <fieldset>
                                                    <button type="submit" id="form-submit" class="border-button-active">Send
                                                        Message</button>
                                                </fieldset>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
</div>
@endsection
