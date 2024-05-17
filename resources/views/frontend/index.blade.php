@extends('frontend.layouts.master')
@section('title', 'Asloob Bedaa')

@section('contents')

<!-- Banner Starts Here -->
@include('frontend.include.index_slider')
<!-- Banner Ends Here -->

<!-- <div class="row" style="height:30px; background-color:#bcbc;">
    <div class="col-md-12">
        <marquee> We are commited to support you until reach your destination. We are recruting new Employe for various
            position. You are cordially invited to apply from career page. Keep your eyes in our company website for
            more details </marquee>
    </div>
</div> -->

<div class="row">
    <div class="col-md-6">
        <div class="more-info"
            style="margin-top: 0px;  padding-left:40px;padding-right:0px; padding-top:0px;text-align:justify">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="more-info-content">
                            <div class="row">
                                <div class="col-md-12 align-self-center">
                                    <div class="left-image">
                                        <!--<img src="{{ asset('frontend') }}/assets/images/human_staff/ceo.png" style="width:100px; height:100px;" alt="">-->

                                    </div>
                                    <div class="right-content">
                                        <h6><em>Speech of General Manager</em></h6><br>
                                        <p
                                            style=" line-height:20px; font-size: 15px;text-align:justify;font-family:'Time New Roman'">
                                            <b> Dear Partners</b><br><br>

                                            <b>ASLOOB BEDAA CONTRACTING COMPANY (ABC)</b> is a rising champion in the Saudi marketplace of engineering and construction. It has undertaken a challenging and glorious journey of two decades to come up to its present stature. It competed with top contracting companies in the Kingdom with a very minimal workforce. Over a period of 20 years Mr. Aminul Islam, the Founder of Asloob Bedaa, widened  the company’s construction network in the kingdom, mobilizing enough manpower and resources to sustain the fast growing project demand from the government and public sector <b>e.g. the National Guard, Saudi Consolidated Electric Company (SCECO), Saudi Aramco, Nesma & Partners, </b> and other top-ranking private companies. Asloob Bedaa delivered and earned trust in its clients, especially in the industrial domain, wherein it has most of the clients.<br><br>
ASLOOB as we are popularly known today has successfully completed numerous Projects in just a very short period of operation. All this became possible because of the constant supervision and thorough management in all of our projects by our professional staff whose expertise was critical to the success in Construction and Engineering business.<br><br>
<b>ABC now has two main divisions as follows:</b><br>
1. Civil works and finishing division<br>
2. Steel structural & Pre-engineered division<br><br>
All these divisions are working together or individually in various projects under close and proper supervision. ABC is a market leader in ‘Complete Concrete Works’ including Piling Concrete, Pile Caps, Sub-structure Concrete, Super-structure Concrete.  It is also fully competent in ‘Finishing Work's including Painting, Gypsum Partition, Tiling, Marble & Granite, Secondary Steel Bracket Works, Installations of ancillary items.<br><br>
<b>Objective</b><br>
Our main goal is to exceed the Client’s satisfaction by meeting out to them the finally accepted project deliveries, in a very reasonable price, inclusive of all supporting consultation and needed services.





                                        </p>
                                        <p style="line-height:15px; font-family:'Courier New'">
                                            <b>Mohammad Aminul Islam<br>
                                                General Manager<br>
                                                Asloob Bedaa Contracting Company<br>
                                                Kingdom of Saudi Arabia<br></b>
                                        </p>
                                        <a href="#" class="filled-button">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">

        <div class="more-info"
            style="margin-top:0px;  padding-left:0px;padding-right:40px;  padding-top:0px;text-align:justify">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="more-info-content">
                            <div class="row">
                                <div class="col-md-12 align-self-center">
                                    <div class="left-image">
                                        <h3 style="padding-top:50px; font-weight:bold"> <i
                                                style="color: rgb(19, 82, 27)" class="fa fa-globe"></i>&nbsp Mission &
                                            Vision</h3>
                                    </div>
                                    <div class="right-content">
                                        {{-- <p
                                            style=" line-height:20px;font-size: 15px; text-align: justify;font-family:'Time New Roman'">
                                            @if ($companyInfo->comp_vission == "")
                                            <b>Our Visions</b> <br><br>

                                            Today, we are going to recognized as leaders in the constraction industry,
                                            for our strength in traditional construction methods and for our creative,
                                            fresh approach to cutting edge technologies and delivery systems. Our
                                            success is driven not only by our ability to build some of the most advanced
                                            facilities for our corporate, institutional and governmental clients - more
                                            and more of our clients are turning to us for our distinctive ability to
                                            implement innovative project management techniques, as well as our ability
                                            to serve as a reliable provider of knowledge-driven solutions for their
                                            complex construction projects.To become the leading construction firm, while
                                            delivering projects that consistently exceed international standards and
                                            provide exceptional customer satisfaction. To continually deliver excellent
                                            value & innovative construction solutions to meet our clients'
                                            requirements.Using modern principles and sophisticated technologies, Asloob
                                            Bedaa Contracting Company envisions being the primary preference at all
                                            times both nationally and globally, for their renowned excellence, quality,
                                            performance and reliability in all types of constructions.

                                            <br><br><b>Our Missions</b><br><br>
                                            To be a leading construction company in the global market. To become the
                                            customers' most preferred choice by attaining excellence in quality and
                                            timely completed value added projects.
                                            To provide the highest level of service in the construction industry while
                                            offering superior craftsmanship to every project, we handle. To continually
                                            innovate, develop and adopt state-of-the-art technology in methods and
                                            materials to enhance productivity and cost effectiveness. To continually
                                            improve the competence of our team, and employ diverse, innovative &
                                            results-oriented personals, motivated to deliver excellence. To build a
                                            safety culture aimed at continually reducing the frequency severity rate
                                            towards achieving zero accidents.To identify and mitigate all the
                                            environmental impacts arising from our activities, and comply with
                                            applicable environmental norms.
                                            @else
                                            {{ $companyInfo->comp_vission }}
                                            @endif
                                        </p> --}}

                                        <p style=" line-height:21px; text-align: justify;font-family:'Time New Roman'">
                                            <b>Our Visions</b> <br><br>

                                            Today, we are going to recognized as leaders in the constraction industry,
                                            for our strength in traditional construction methods and for our creative,
                                            fresh approach to cutting edge technologies and delivery systems. Our
                                            success is driven not only by our ability to build some of the most advanced
                                            facilities for our corporate, institutional and governmental clients - more
                                            and more of our clients are turning to us for our distinctive ability to
                                            implement innovative project management techniques, as well as our ability
                                            to serve as a reliable provider of knowledge-driven solutions for their
                                            complex construction projects.To become the leading construction firm, while
                                            delivering projects that consistently exceed international standards and
                                            provide exceptional customer satisfaction. To continually deliver excellent
                                            value & innovative construction solutions to meet our clients'
                                            requirements.Using modern principles and sophisticated technologies, Asloob
                                            Bedaa Contracting Company envisions being the primary preference at all
                                            times both nationally and globally, for their renowned excellence, quality,
                                            performance and reliability in all types of constructions.

                                            <br><br><br><b>Our Missions</b><br><br>
                                            To be a leading construction company in the global market. To become the
                                            customers' most preferred choice by attaining excellence in quality and
                                            timely completed value added projects.
                                            To provide the highest level of service in the construction industry while
                                            offering superior craftsmanship to every project, we handle. To continually
                                            innovate, develop and adopt state-of-the-art technology in methods and
                                            materials to enhance productivity and cost effectiveness. To continually
                                            improve the competence of our team, and employ diverse, innovative &
                                            results-oriented personals, motivated to deliver excellence. To build a
                                            safety culture aimed at continually reducing the frequency severity rate
                                            towards achieving zero accidents.To identify and mitigate all the
                                            environmental impacts arising from our activities, and comply with
                                            applicable environmental norms.
                                        </p>
                                        <a href="#" class="filled-button">Read More</a>
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


<!-- Company Information SECTION STARTED -->
<div class="row" style="padding:20px;">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center text-muted h3">Company Informations</h5>
            </div>
            <div class="card" style="margin: 0px 20px;">
                <ul class="list-group two-column-list">
                    <li class="list-group-item">
                        <span> Name </span>
                        <span>Asloob Bedaa Contracting Company</span>
                    </li>
                    <li class="list-group-item">
                        <span> Commercial Registration</span>
                        <span>1010647321</span>
                    </li>
                    <li class="list-group-item">
                        <span> Office Address </span>
                        <span>Al-Olaya Street, P.O. Box 8460, Riyadh 12313 </span>
                    </li>
                    <li class="list-group-item">
                        <span> Mobile No </span>
                        <span>+966545124236, +966508457653, +966506685890</span>
                    </li>
                    <li class="list-group-item">
                        <span> Telephone Number </span>
                        <span>+966 11 4835783</span>
                    </li>
                    <li class="list-group-item">
                        <span> Type of Company </span>
                        <span>Foreign Investment</span>
                    </li>
                    <li class="list-group-item">
                        <span> Type of Service Offered </span>
                        <span>General Contracting, Building Construction, Civil
                            Structural, Water Reservoirs, Earth works.
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="col-md-2"></div>
</div>
<!-- Company Information SECTION ENDED -->


<!-- SERVICE SECTION STARTED -->
<section class="service" id="service">
    <div class="row">
        <div class="col-md-12" style="padding-bottom:0px; text-align:center ">
            <h2>Our <em>Services</em></h2>
            <span>TEAM WORK IS OUR STRENGTH</span>
        </div>
    </div>

    <div class="row">

        <div class="col-md-4 text-center">
            <a href="#">
                <div class="service-item active">
                    <div class="service-icon">
                        <div class="service-icon-2">
                            <img src="{{ asset('frontend') }}/assets/images/our_service_icon/icon-2.png" alt=""
                                height="50px">
                        </div>
                    </div>
                    <div class="service-content">
                        <h4>Building Construction</h4>
                        <p>We specialize in construction for <br>commercial housing, corporate buildings etc.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 text-center">
            <a href="#">
                <div class="service-item">
                    <div class="service-icon">
                        <div class="service-icon-2">
                            <img src="{{ asset('frontend') }}/assets/images/our_service_icon/icon-3.png" alt=""
                                height="40px">
                        </div>
                    </div>
                    <div class="service-content">
                        <h4>Civil Infrastructure</h4>
                        <p>We also focus on construction and maintenance of <br>water reservoirs, sewage treatment
                            plant.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 text-center">
            <a href="#">
                <div class="service-item">
                    <div class="service-icon">
                        <div class="service-icon-2">
                            <img src="{{ asset('frontend') }}/assets/images/our_service_icon/icon-1.png" alt=""
                                height="40px">
                        </div>
                    </div>
                    <div class="service-content">
                        <h4>Roads and Landscaping</h4>
                        <p>We specialize in construction and maintenance <br> in particular road and landscaping.</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
<!-- SERVICE SECTION ENDED -->

<!-- PORTFOLIO SECTION STARTED -->
 <!--
<section id="portfolio" class="portfolio">
    <div class="text-center">
        <h2>our portfolio</h2>
        <img class="line img-fluid" src="{{ asset('frontend') }}/assets/images/line.png" alt="">
    </div>
    <div class="row">
        @foreach ($allProjects as $projectImg)
        <div class="col-md-3">
            <a href="{{ url('our-portfolio/' . $projectImg->proj_id ) }}">
                <div class="box">
                    <img class="img-fluid portfolio-img" src="{{ asset($projectImg->proj_main_thumb) }}" alt="">
                    <div class="icon">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/box-icon.png" alt="">
                    </div>
                </div>
            </a>
        </div>
        @endforeach
        {{-- <div class="col-md-3">
            <a href="{{ route('frontend-portfolio') }}">
                <div class="box">
                    <img class="img-fluid portfolio-img" src="{{ asset('frontend') }}/assets/images/portfolio-3.png"
                        alt="">
                    <div class="icon">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/box-icon.png" alt="">
                    </div>
                </div>
            </a>
            <a href="{{ route('frontend-portfolio') }}">
                <div class="box">
                    <img class="img-fluid portfolio-img" src="{{ asset('frontend') }}/assets/images/portfolio-4.png"
                        alt="">
                    <div class="icon">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/box-icon.png" alt="">
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="{{ route('frontend-portfolio') }}">
                <div class="box">
                    <img class="img-fluid portfolio-img" src="{{ asset('frontend') }}/assets/images/portfolio-5.png"
                        alt="">
                    <div class="icon">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/box-icon.png" alt="">
                    </div>
                </div>
            </a>
            <a href="{{ route('frontend-portfolio') }}">
                <div class="box">
                    <img class="img-fluid portfolio-img" src="{{ asset('frontend') }}/assets/images/portfolio-6.png"
                        alt="">
                    <div class="icon">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/box-icon.png" alt="">
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="{{ route('frontend-portfolio') }}">
                <div class="box">
                    <img class="img-fluid portfolio-img" src="{{ asset('frontend') }}/assets/images/portfolio-7.png"
                        alt="">
                    <div class="icon">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/box-icon.png" alt="">
                    </div>
                </div>
            </a>
            <a href="{{ route('frontend-portfolio') }}">
                <div class="box">
                    <img class="img-fluid portfolio-img" src="{{ asset('frontend') }}/assets/images/portfolio-8.png"
                        alt="">
                    <div class="icon">
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/box-icon.png" alt="">
                    </div>
                </div>
            </a>
        </div> --}}
    </div>
</section>

-->

<!-- PORTFOLIO SECTION ENDED -->

<!-- OUR CLIENTS SECTION STERTED -->

<div class="clients">

    <div class="row">
        <div class="col-md-12">
            <div class="section-heading">
                <h2 class="text-muted"  style="margin-bottom: 0px; margin-top:0px; "><em>Our Clients</em></h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            
                <div class="owl-partners owl-carousel">
                
                    <div class="partner-item1">
                        <img src="{{ asset('frontend') }}/assets/images/clients/client-1.png" title="2"
                            alt="2">
                    </div>

                    <div class="partner-item1">
                        <img src="{{ asset('frontend') }}/assets/images/clients/client-2.png" title="3" alt="3">
                    </div>

                    <div class="partner-item1">
                        <img src="{{ asset('frontend') }}/assets/images/clients/client-3.png" title="4"
                            alt="4">
                    </div>

                    <div class="partner-item1">
                        <img src="{{ asset('frontend') }}/assets/images/clients/client-4.png" title="5" alt="5">
                    </div>

                    <div class="partner-item1">
                        <img src="{{ asset('frontend') }}/assets/images/clients/client-5.png" title="6" alt="6">
                    </div>

                    <div class="partner-item1">
                        <img src="{{ asset('frontend') }}/assets/images/clients/client-6.png" title="7"
                            alt="6">
                    </div>

                    <div class="partner-item1">
                        <img src="{{ asset('frontend') }}/assets/images/clients/client-7.png" title="7"
                            alt="6">
                    </div>

                    <div class="partner-item1">
                        <img src="{{ asset('frontend') }}/assets/images/clients/client-8.png" title="7"
                            alt="6">
                    </div>

                    <div class="partner-item1">
                        <img src="{{ asset('frontend') }}/assets/images/clients/client-9.png" title="7"
                            alt="6">
                    </div>
                   
                    <div class="partner-item1">
                        <img src="{{ asset('frontend') }}/assets/images/clients/client-10.png" title="7"
                            alt="6">
                    </div>

                    <div class="partner-item1">
                        <img src="{{ asset('frontend') }}/assets/images/clients/client-11.png" title="7"
                            alt="6">
                    </div>

                    <div class="partner-item1">
                        <img src="{{ asset('frontend') }}/assets/images/clients/client-12.png" title="7"
                            alt="6">
                    </div>

                    <div class="partner-item1">
                        <img src="{{ asset('frontend') }}/assets/images/clients/client-13.png" title="7"
                            alt="6">
                    </div>
        
                </div>
               
            </div>
        </div>
    </div>
</div>

<!-- OUR CLIENTS SECTION ENDED -->


<!-- STATISTIC SECTION STARTED -->
@include('frontend.include.statistic')
<!-- STATISTIC SECTION ENDED -->


<div class="partners" style="background-color:rgb(56, 55, 55); margin:10px 55px 10px 55px; padding:10px;">

    <div class="row">
        <div class="col-md-12">
            <div class="section-heading" style="margin-bottom: 0px; margin-top:0px; ">
                <h2><em>Our Events</em></h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="owl-partners owl-carousel">

                    <div class="partner-item">
                        <a href="#">
                            <img src="{{ asset('frontend') }}/assets/images/index_our_events/events.JPG" title="1"
                                alt="1">
                        </a>
                    </div>

                    <div class="partner-item">
                        <img src="{{ asset('frontend') }}/assets/images/index_our_events/events1.jpeg" title="2"
                            alt="2">
                    </div>

                    <div class="partner-item">
                        <img src="{{ asset('frontend') }}/assets/images/index_our_events/events2.JPG" title="3" alt="3">
                    </div>

                    <div class="partner-item">
                        <img src="{{ asset('frontend') }}/assets/images/index_our_events/events3.jpeg" title="4"
                            alt="4">
                    </div>

                    <div class="partner-item">
                        <img src="{{ asset('frontend') }}/assets/images/index_our_events/events4.JPG" title="5" alt="5">
                    </div>

                    <div class="partner-item">
                        <img src="{{ asset('frontend') }}/assets/images/index_our_events/events5.JPG" title="6" alt="6">
                    </div>

                    <div class="partner-item">
                        <img src="{{ asset('frontend') }}/assets/images/index_our_events/events6.jpeg" title="7"
                            alt="6">
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
