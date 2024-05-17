@extends('frontend.layouts.master')
@section('title', 'Dubai Branch')
@section('contents')

<div class="dubai-page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>We have Solid Background on Constraction</h1>
                <span>We have over 3,000 Employees as Constraction Expert</span>
            </div>
        </div>
    </div>
</div>
<br><br>
{{-- <div class="more-info about-info">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 align-self-justify" style="text-align:justify;">
                        <div class="right-content">
                            <h2>Get to know about our Company. <em>WHO WE ARE</em></h2>
                            <p>
                                ASLOOB BEDAA Contracting Company began Construction as a general works contractor in
                                2020.
                                Over the years, the group has undertaken many challenging projects and accumulated
                                skills,
                                know-how and experiences in design and build solutions, project management services,
                                building
                                trades and related engineering works.Today, ASLOOB BEDAA Construction takes on the role
                                of main
                                contractor for small tomedium size projects and performs project management services
                                tocoordinates specialist trades for industrial/commercial projects. We also
                                providedesign
                                inputs and engineering solutions as value-add services to our clients.Our objective is
                                to provide
                                our clients with an “Iamassured” experience when we are chosen to execute their
                                projects. We take pride in our delivery, thus our clients can always be assured that
                                onlythe most
                                experienced and qualified people are serving them, all the time.Our emphasis on clear
                                communication and follow-through procedures ensures that client’s
                                objectives are top priority in theplanning and execution of all our processes.Our
                                project
                                management and execution philosophy is to:

                            <ul style="padding-left:50px; text-align:justify; list-style-type:circle;">

                                <li> Create detail schedule and resources plan to meet client’s projec to bjective,
                                </li>
                                <li>Communicate clearly with all project stakeholders, </li>
                                <li>Track project progress and fine-tune deviations, </li>
                                <li>Supervise closely on quality of work done, </li>
                                <li>Complete and commission the project on time. </li>

                            </ul>
                            </p>
                            <!--	<a href="" class="filled-button">Read More</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}


<!-- Contact Person Details Start -->
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="more-info"
            style="margin-top: 0px;  padding-left:40px;padding-right:0px; padding-top:20px;text-align:justify">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="more-info-content">
                            <div class="row">
                                <div class="col-md-12 align-self-center">
                                    <div class="right-content">
                                        {{-- <p
                                            style=" line-height:20px; text-align: justify;font-family:'Time New Roman'">
                                            <b> Name Here</b><br><br>
                                            As-Salamu-Alaikum-Wa-Rahmatullah!
                                            By the grace of Almighty Allah, Asloob Bedaa Contracting Company had been
                                            established in January of the year 2022 with a view of “Comfort & Safety” as
                                            the contractor of construction of “Luxurious & Quality” residential
                                            apartments and Commercial Building in various prime location of Kingdom of
                                            Saudi Arabia.We have been serving as a trusted Construction Contractor
                                            partner of Kingdom of Saudi Arabia

                                            The construction industry has been facing challenges due to the changing
                                            environment, be it the implementation of RERA, introduction of GST, changes
                                            in DCR rules, etc. These changes are expected to bring in positive changes
                                            to the industry in the long term but the industry is yet to adjust itself to
                                            these changes. In spite of the challenges, Asloob Bedaa Contracting Company
                                            has been able to deliver an excellent performance with safety and quality in
                                            the quarter gone by.We have realised that the only way to overcome this
                                            challenging environment is to have a strong marketing. We have carried out a
                                            lot of promotional activities at corporate offices, in industrial areas, and
                                            towns, including presentation, real estate awareness programs, etc. and this
                                            has started yielding good results.

                                            <br>Asloob Bedaa Contracting Company consists of a highly qualified,
                                            experienced, dynamic and inspired management team of Engineers, Architects,
                                            Marketing and other professionals.Our aim is to support you with Safety,
                                            Environmental and legal requirements.We plan to build ourselves as a Famous
                                            Contracting Company in the world through our Quality Assurance.We hope that
                                            you will continue to support us in all our future endeavors with your
                                            inputs. We value your views immensely for the successful building of our
                                            world.
                                        </p>
                                        <p style="line-height:15px; font-family:'Courier New'">
                                            <b> Amin ul Islam<br>
                                                Chairman<br>
                                                Asloob Bedaa Contracting Company<br>
                                                Kingdom of Saudi Arabia<br></b>
                                        </p> --}}
                                        <div class="card">
                                            <h5 class="card-header">Contact Person Details</h5>
                                            <div class="card-body">
                                                <div class="left-image">
                                                    <img src="{{ asset('frontend/assets/images/human_staff/ceo.png') }}"
                                                        alt="">
                                                    <h5>Amin ul Islam</h5>
                                                </div>
                                                <p class="card-text">
                                                <p
                                                    style="line-height:15px; font-family:'Courier New';margin-left: 30px;">
                                                    <b>
                                                        Chairman<br>
                                                        Asloob Bedaa Contracting Company<br>
                                                    </b>
                                                </p>
                                                </p>
                                                <a href="#" class="btn btn-primary">Contact Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="col-md-6">
        <div class="more-info"
            style="margin-top:0px;  padding-left:0px;padding-right:40px;  padding-top:0px;text-align:justify">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 align-self-center">
                        <div class="left-image">
                            <h3 style=" font-weight:bold"> <i style="color: rgb(19, 82, 27)"
                                    class="fa fa-map-marker"></i>&nbsp Office Address</h3>
                        </div>
                        <div class="right-content">
                            {{-- <p style=" line-height:20px; text-align: justify;font-family:'Time New Roman'">Address
                            </p>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d16560.31116845925!2d55.4396157!3d25.2349849!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s!5e1!3m2!1sen!2sbd!4v1679294779845!5m2!1sen!2sbd"
                                width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="col-md-3"></div>
</div>
<!-- Contact Person Details End -->

<br><br>

<!-- PORTFOLIO SECTION STARTED -->
<section id="portfolio" class="portfolio">
    <div class="text-center">
        <h2>our Construction sites</h2>
        <img class="line img-fluid" src="{{ asset('frontend') }}/assets/images/line.png" alt="">
    </div>

    <div class="row">
        <div class="col-md-3">
            <a href="#">
                <div class="box">
                    <img class="img-fluid portfolio-img" src="{{ asset('frontend') }}/assets/images/dubai_off_gallery/gallery.png"
                        alt="">
                    <div class="icon">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/box-icon.png" alt="">
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="box">
                    <img class="img-fluid portfolio-img" src="{{ asset('frontend') }}/assets/images/dubai_off_gallery/gallery1.png"
                        alt="">
                    <div class="icon">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/box-icon.png" alt="">
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="#">
                <div class="box">
                    <img class="img-fluid portfolio-img" src="{{ asset('frontend') }}/assets/images/dubai_off_gallery/gallery2.jpg" alt="">
                    <div class="icon">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/box-icon.png" alt="">
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="box">
                    <img class="img-fluid portfolio-img" src="{{ asset('frontend') }}/assets/images/dubai_off_gallery/gallery3.jpeg" alt="">
                    <div class="icon">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/box-icon.png" alt="">
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="#">
                <div class="box">
                    <img class="img-fluid portfolio-img" src="{{ asset('frontend') }}/assets/images/dubai_off_gallery/gallery4.jpg" alt="">
                    <div class="icon">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/box-icon.png" alt="">
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="box">
                    <img class="img-fluid portfolio-img" src="{{ asset('frontend') }}/assets/images/dubai_off_gallery/gallery5.jpeg"
                        alt="">
                    <div class="icon">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/box-icon.png" alt="">
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="#">
                <div class="box">
                    <img class="img-fluid portfolio-img" src="{{ asset('frontend') }}/assets/images/dubai_off_gallery/gallery6.jpeg" alt="">
                    <div class="icon">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/box-icon.png" alt="">
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="box">
                    <img class="img-fluid portfolio-img" src="{{ asset('frontend') }}/assets/images/dubai_off_gallery/gallery7.png"
                        alt="">
                    <div class="icon">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/box-icon.png" alt="">
                    </div>
                </div>
            </a>
        </div>
    </div>

</section>

<!-- STATISTIC SECTION STARTED -->
@include('frontend.include.statistic')
<!-- STATISTIC SECTION ENDED -->


@endsection
