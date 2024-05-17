@extends('frontend.layouts.master')
@section('title', 'Running Projects')
@section('style')
<style>
    .accordion-content-description .right ul {
        margin-bottom: 0;
    }

    .accordion-content-description .right ul.project_data li{
        font-size: 16px;
        padding: 0px 1px 10px 40px;
        font-weight: 300;
        position: relative;
        margin-bottom: 30px;
        display: inline-block;
        width: 49%;
        color: #1e405c;
        background-repeat: no-repeat;
        background-position: 0 7px;
        vertical-align: text-top;
    }

    .accordion-content-description .right ul.project_data li .text {
        display: block;
        text-transform: uppercase;
        font-size: 16px;
        color: #3a5e7a;
        font-weight: 700;
    }

    .accordion-content-description .right ul.project_data li p {
        color: #1f2626;
    }


    .plus-minus-icon:before {
        content: '-';
        font-weight: 900;
        float: left;
        margin-right: 5px;
    }

    .collapsed .plus-minus-icon:before {
        content: '+';
        font-weight: 900;
    }

    .accordion-content-description img {
        border-radius: 20px;
    }

    @media screen and (max-width: 600px) {

        /* Project page project name part Styleing */
        .btn-link {
            font-size: 13px;
            overflow-wrap: break-word;
            /* word-wrap: break-word; */
            word-break:break-all
        }

        .accordion-content-description .right ul.project_data li {
            font-size: 16px;
            padding: 0px 0px 0px 35px;
            font-weight: 300;
            position: relative;
            margin-bottom: 15px;
            display: inline-block;
            width: 49%;
            color: #1e405c;
            background-repeat: no-repeat;
            background-position: 0 7px;
            vertical-align: text-top;
        }

        .accordion-content-description .right ul.project_data li .text {
            display: block;
            text-transform: uppercase;
            font-size: 13px;
            color: #3a5e7a;
            font-weight: 700;
        }

        .accordion-content-description .right ul.project_data li p {
            font-size: 11px;
            color: #1f2626;
        }
    }


</style>

@endsection
@section('contents')

{{-- <div class="running_projects-page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1> Running Projects</h1>
                <span> </span>
            </div>
        </div>
    </div>
</div> --}}
 


<!-- Running project info showing Start -->
<div class="team" style="margin:10px; padding:10px;">
   
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="project_page_heading">
                    <h2> On Going Projects</h2>
                    <span></span>
                </div>
            </div>

            <div class="col-md-1"></div>
            <div class="col-md-10">

                <div id="accordion">

                    <!-- Single accordion card section Start-->
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                                    aria-expanded="true" aria-controls="collapseThree">
                                    <i class="plus-minus-icon"></i> King Faysal Air Academy, Majmaa.
                                </button>
                            </h5>
                        </div>

                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                <!-- Accordion content body Start -->
                                <div class="accordion-content-description">
                                 <div class="row ">
                                    <div class="col-md-6 col-lg-6 mb-3 ">
                                        <div class="right sticky">
                                            <h4 class="mb-4 h4_text aos-init aos-animate" data-aos="fade-up"
                                                data-aos-delay="100">King Faysal Air Academy, Majmaa.</h4>
                                                <ul class="project_data">
                                                    <li style="background-image: url(https://alanwar.sa/images/project-owner.png);">
                                                        <span class="text">Project Owner</span>
                                                        <p>King Faysal Air Academy, Majmaa.</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-1.png);">
                                                        <span class="text">Main Contactor</span>
                                                        <p> Nesma Joint Venture</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/value-01.png);">
                                                        <span class="text">Contract Value</span>
                                                        <p> 29.16M SAR</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-4.png);">
                                                        <span class="text">Contract Type</span>
                                                        <p> Remeasure</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-2.png);">
                                                        <span class="text">Type of Work</span>
                                                        <p> R.C.C Works</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-5.png);">
                                                        <span class="text">Client Name</span>
                                                        <p>Ministry of Defense</p>
                                                    </li>

                                                </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                        <img src="{{ asset('frontend') }}/assets/images/running_projects/king faisal.jpeg"
                                            alt="" width="100%">
                                    </div>
                                </div>

                                </div>
                                <!-- Accordion content body End -->
                            </div>
                        </div>
                    </div>
 
                    <!-- Single accordion card section Start-->
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour"
                                    aria-expanded="false" aria-controls="collapseFour">
                                    <i class="plus-minus-icon"></i> King Salman Air Base Project, Riyadh
                                </button>
                            </h5>
                        </div>

                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body">
                                <!-- Accordion content body Start -->
                                <div class="accordion-content-description">


                                 <div class="row ">
                                    <div class="col-md-6 col-lg-6 mb-3 ">
                                        <div class="right sticky">
                                            <h4 class="mb-4 h4_text aos-init aos-animate" data-aos="fade-up"
                                                data-aos-delay="100">King Salman Air Base Project, Riyadh</h4>
                                                <ul class="project_data">
                                                    <li style="background-image: url(https://alanwar.sa/images/project-owner.png);">
                                                        <span class="text">Project Owner</span>
                                                        <p>King Salman Air Base Project, Riyadh</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-1.png);">
                                                        <span class="text">Main Contactor</span>
                                                        <p> Nesma Joint Venture</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/value-01.png);">
                                                        <span class="text">Contract Value</span>
                                                        <p> 4.5M SAR</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-4.png);">
                                                        <span class="text">Contract Type</span>
                                                        <p> Remeasure</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-2.png);">
                                                        <span class="text">Type of Work</span>
                                                        <p> R.C.C Works</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-5.png);">
                                                        <span class="text">Client Name</span>
                                                        <p>King Salman Airport</p>
                                                    </li>

                                                </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                        <img src="{{ asset('frontend') }}/assets/images/running_projects/airbase.jpeg"
                                            alt="" width="100%">
                                    </div>
                                </div>

                                </div>
                                <!-- Accordion content body End -->
                            </div>
                        </div>
                    </div>
                    <!-- Single accordion card section End-->

                    <!-- Single accordion card section Start-->
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive"
                                    aria-expanded="false" aria-controls="collapseFive">
                                    <i class="plus-minus-icon"></i> Diriyah Gyratory Tunnels, Riyadh
                                </button>
                            </h5>
                        </div>

                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                            <div class="card-body">
                                <!-- Accordion content body Start -->
                                <div class="accordion-content-description">


                                 <div class="row ">
                                    <div class="col-md-6 col-lg-6 mb-3 ">
                                        <div class="right sticky">
                                            <h4 class="mb-4 h4_text aos-init aos-animate" data-aos="fade-up"
                                                data-aos-delay="100">Diriyah Gyratory Tunnels, Riyadh</h4>
                                                <ul class="project_data">
                                                    <li style="background-image: url(https://alanwar.sa/images/project-owner.png);">
                                                        <span class="text">Project Owner</span>
                                                        <p>Diriyah Gyratory Tunnels, Riyadh</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-1.png);">
                                                        <span class="text">Main Contactor</span>
                                                        <p> Nesma & Partners Contracting Co.    </p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/value-01.png);">
                                                        <span class="text">Contract Value</span>
                                                        <p>118.5M SAR</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-4.png);">
                                                        <span class="text">Contract Type</span>
                                                        <p> Remeasure</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-2.png);">
                                                        <span class="text">Type of Work</span>
                                                        <p> R.C.C Works</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-5.png);">
                                                        <span class="text">Client Name</span>
                                                        <p>Diriyah Gate Development Authority(DGDA)</p>
                                                    </li>

                                                </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                        <img src="{{ asset('frontend') }}/assets/images/running_projects/dariya gate.jpg"
                                            alt="" width="100%">
                                    </div>
                                </div>

                                </div>
                                <!-- Accordion content body End -->
                            </div>
                        </div>
                    </div>
                    <!-- Single accordion card section End-->

                    <!-- Single accordion card section Start-->
                    <div class="card">
                        <div class="card-header" id="headingSix">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix"
                                    aria-expanded="false" aria-controls="collapseSix">
                                    <i class="plus-minus-icon"></i> Avenues Mall, Riyadh
                                </button>
                            </h5>
                        </div>

                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                            <div class="card-body">
                                <!-- Accordion content body Start -->
                                <div class="accordion-content-description">


                                 <div class="row ">
                                    <div class="col-md-6 col-lg-6 mb-3 ">
                                        <div class="right sticky">
                                            <h4 class="mb-4 h4_text aos-init aos-animate" data-aos="fade-up"
                                                data-aos-delay="100">Avenues Mall, Riyadh</h4>
                                                <ul class="project_data">
                                                    <li style="background-image: url(https://alanwar.sa/images/project-owner.png);">
                                                        <span class="text">Project Owner</span>
                                                        <p>Avenues Mall, Riyadh</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-1.png);">
                                                        <span class="text">Main Contactor</span>
                                                        <p> Nesma & Partners Contracting Co.</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/value-01.png);">
                                                        <span class="text">Contract Value</span>
                                                        <p></p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-4.png);">
                                                        <span class="text">Contract Type</span>
                                                        <p> Remeasure</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-2.png);">
                                                        <span class="text">Type of Work</span>
                                                        <p> R.C.C Works</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-5.png);">
                                                        <span class="text">Client Name</span>
                                                        <p>SHAMOUL</p>
                                                    </li>

                                                </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                        <img src="{{ asset('frontend') }}/assets/images/running_projects/avenue_mall.JPG"
                                            alt="" width="100%">
                                    </div>
                                </div>

                                </div>
                                <!-- Accordion content body End -->
                            </div>
                        </div>
                    </div>
                    <!-- Single accordion card section End-->

                    <!-- Single accordion card section Start-->
                    <div class="card">
                        <div class="card-header" id="headingSeven">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven"
                                    aria-expanded="false" aria-controls="collapseSeven">
                                    <i class="plus-minus-icon"></i> Diriyah Gate Development Authority(DGDA) Super Basement
                                </button>
                            </h5>
                        </div>

                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                            <div class="card-body">
                                <!-- Accordion content body Start -->
                                <div class="accordion-content-description">


                                 <div class="row ">
                                    <div class="col-md-6 col-lg-6 mb-3 ">
                                        <div class="right sticky">
                                            <h4 class="mb-4 h4_text aos-init aos-animate" data-aos="fade-up"
                                                data-aos-delay="100">Diriyah Gate Development Authority(DGDA) Super Basement</h4>
                                                <ul class="project_data">
                                                    <li style="background-image: url(https://alanwar.sa/images/project-owner.png);">
                                                        <span class="text">Project Owner</span>
                                                        <p>Diriyah Gate Development Authority(DGDA) Super Basement</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-1.png);">
                                                        <span class="text">Main Contactor</span>
                                                        <p> M/s Salini Saudi Arabia</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/value-01.png);">
                                                        <span class="text">Contract Value</span>
                                                        <p>50M SAR</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-4.png);">
                                                        <span class="text">Contract Type</span>
                                                        <p> Remeasure</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-2.png);">
                                                        <span class="text">Type of Work</span>
                                                        <p> R.C.C Works</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-5.png);">
                                                        <span class="text">Client Name</span>
                                                        <p>Diriyah Gate Development Authority(DGDA)</p>
                                                    </li>

                                                </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                        <img src="{{ asset('frontend') }}/assets/images/running_projects/DGDA _Super_basement.jpeg"
                                            alt="" width="100%">
                                    </div>
                                </div>

                                </div>
                                <!-- Accordion content body End -->
                            </div>
                        </div>
                    </div>
                    <!-- Single accordion card section End-->

                    <!-- Single accordion card section Start-->
                    <div class="card">
                        <div class="card-header" id="headingEight">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight"
                                    aria-expanded="false" aria-controls="collapseEight">
                                    <i class="plus-minus-icon"></i> Jafurah Gas Processing Facilities (Package #1)
                                </button>
                            </h5>
                        </div>

                        <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                            <div class="card-body">
                                <!-- Accordion content body Start -->
                                <div class="accordion-content-description">


                                 <div class="row ">
                                    <div class="col-md-6 col-lg-6 mb-3 ">
                                        <div class="right sticky">
                                            <h4 class="mb-4 h4_text aos-init aos-animate" data-aos="fade-up"
                                                data-aos-delay="100">Jafurah Gas Processing Facilities (Package #1)</h4>
                                                <ul class="project_data">
                                                    <li style="background-image: url(https://alanwar.sa/images/project-owner.png);">
                                                        <span class="text">Project Owner</span>
                                                        <p>Jafurah Gas Processing Facilities (Package #1)</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-1.png);">
                                                        <span class="text">Main Contactor</span>
                                                        <p> L & T Hydrocarbon</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/value-01.png);">
                                                        <span class="text">Contract Value</span>
                                                        <p>47M SAR</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-4.png);">
                                                        <span class="text">Contract Type</span>
                                                        <p> Remeasure</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-2.png);">
                                                        <span class="text">Type of Work</span>
                                                        <p> Civil & R.C.C Works</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-5.png);">
                                                        <span class="text">Client Name</span>
                                                        <p>Saudi Aramco</p>
                                                    </li>

                                                </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                        <img src="{{ asset('frontend') }}/assets/images/running_projects/jafura_gas.jpeg"
                                            alt="" width="100%">
                                    </div>
                                </div>

                                </div>
                                <!-- Accordion content body End -->
                            </div>
                        </div>
                    </div>
                    <!-- Single accordion card section End-->

                    <!-- Single accordion card section Start-->
                    <div class="card">
                        <div class="card-header" id="headingNine">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine"
                                    aria-expanded="false" aria-controls="collapseNine">
                                    <i class="plus-minus-icon"></i> RJPH2-RWCC-JUBAIL
                                </button>
                            </h5>
                        </div>

                        <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
                            <div class="card-body">
                                <!-- Accordion content body Start -->
                                <div class="accordion-content-description">


                                 <div class="row ">
                                    <div class="col-md-6 col-lg-6 mb-3 ">
                                        <div class="right sticky">
                                            <h4 class="mb-4 h4_text aos-init aos-animate" data-aos="fade-up"
                                                data-aos-delay="100">RJPH2-RWCC-JUBAIL</h4>
                                                <ul class="project_data">
                                                    <li style="background-image: url(https://alanwar.sa/images/project-owner.png);">
                                                        <span class="text">Project Owner</span>
                                                        <p>RJPH2-RWCC-JUBAIL</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-1.png);">
                                                        <span class="text">Main Contactor</span>
                                                        <p>Saudi Services For Electro Mechanic(SSEM) Works Co.</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/value-01.png);">
                                                        <span class="text">Contract Value</span>
                                                        <p>1.3M SAR</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-4.png);">
                                                        <span class="text">Contract Type</span>
                                                        <p> Remeasure</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-2.png);">
                                                        <span class="text">Type of Work</span>
                                                        <p>Civil & R.C.C Works</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-5.png);">
                                                        <span class="text">Client Name</span>
                                                        <p>Saudi Water Company</p>
                                                    </li>

                                                </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                        <img src="{{ asset('frontend') }}/assets/images/running_projects/RWCC.jpeg"
                                            alt="" width="100%">
                                    </div>
                                </div>

                                </div>
                                <!-- Accordion content body End -->
                            </div>
                        </div>
                    </div>
                    <!-- Single accordion card section End-->

                    <!-- Red Sea Global Project Start-->
                    <div class="card">
                        <div class="card-header" id="headingRedSea">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseRedSea"
                                    aria-expanded="false" aria-controls="collapseRedSea">
                                    <i class="plus-minus-icon"></i> RED SEA GLOBAL PROJECT
                                </button>
                            </h5>
                        </div>

                        <div id="collapseRedSea" class="collapse" aria-labelledby="headingRedSea" data-parent="#accordion">
                            <div class="card-body">
                                <!-- Accordion content body Start -->
                                <div class="accordion-content-description">


                                 <div class="row ">
                                    <div class="col-md-6 col-lg-6 mb-3 ">
                                        <div class="right sticky">
                                            <h4 class="mb-4 h4_text aos-init aos-animate" data-aos="fade-up"
                                                data-aos-delay="100">RED SEA GLOBAL PROJECT</h4>
                                                <ul class="project_data">
                                                    <li style="background-image: url(https://alanwar.sa/images/project-owner.png);">
                                                        <span class="text">Project Owner</span>
                                                        <p>RED SEA GLOBAL</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-1.png);">
                                                        <span class="text">Main Contactor</span>
                                                        <p>TEIJUN</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/value-01.png);">
                                                        <span class="text">Contract Value</span>
                                                        <p> 17,85,00,000.00 SAR</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-4.png);">
                                                        <span class="text">Contract Type</span>
                                                        <p> Remeasure</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-2.png);">
                                                        <span class="text">Type of Work</span>
                                                        <p>Civil & R.C.C Works</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-5.png);">
                                                        <span class="text">Sub Contract</span>
                                                        <p></p>
                                                    </li>

                                                </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                        <img src="{{ asset('frontend') }}/assets/images/running_projects/redseaproject.jpeg"
                                            alt="" width="100%">
                                    </div>
                                </div>

                                </div>
                                <!-- Accordion content body End -->
                            </div>
                        </div>
                    </div>


                  <!-- Amala Project-->
                    <div class="card">
                        <div class="card-header" id="headingAmala">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseAmala"
                                    aria-expanded="false" aria-controls="collapseRedSea">
                                    <i class="plus-minus-icon"></i> Amala Project
                                </button>
                            </h5>
                        </div>

                        <div id="collapseAmala" class="collapse" aria-labelledby="headingAmala" data-parent="#accordion">
                            <div class="card-body">
                                <!-- Accordion content body Start -->
                                <div class="accordion-content-description">


                                 <div class="row ">
                                    <div class="col-md-6 col-lg-6 mb-3 ">
                                        <div class="right sticky">
                                            <h4 class="mb-4 h4_text aos-init aos-animate" data-aos="fade-up"
                                                data-aos-delay="100"></h4>
                                                <ul class="project_data">
                                                    <li style="background-image: url(https://alanwar.sa/images/project-owner.png);">
                                                        <span class="text">Project Owner</span>
                                                        <p>AMALA</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-1.png);">
                                                        <span class="text">Main Contactor</span>
                                                        <p>TEIJUN</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/value-01.png);">
                                                        <span class="text">Contract Value</span>
                                                        <p> 20M SAR</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-4.png);">
                                                        <span class="text">Contract Type</span>
                                                        <p> Remeasure</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-2.png);">
                                                        <span class="text">Type of Work</span>
                                                        <p>Civil & R.C.C Works</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-5.png);">
                                                        <span class="text">Sub Contract</span>
                                                        <p></p>
                                                    </li>

                                                </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                        <img src= "{{ asset('frontend') }}/assets/images/running_projects/amala.jpg"
                                            alt="" width="100%">
                                    </div>
                                </div>

                                </div>
                                <!-- Accordion content body End -->
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</div>
<!-- Running project info showing End -->



<!-- Running Project Details Information Table Part Start -->
{{-- <div class="team" style="margin:10px; padding:10px;">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="project_page_heading">
                    <h2><em>Project Details </em></h2>
                </div>
            </div>
        </div>
        <!-- Company Running Projects Information SECTION STARTED -->
        <div class="row" style="padding:20px;">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">SN</th>
                                <th scope="col">PROJECT</th>
                                <th scope="col">CLIENT COMPANY</th>
                                <th scope="col">TYPE OF WORK</th>
                                <th scope="col">VALUE (SAR)</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <tr>
                                <th scope="row">1</th>
                                <td>Sabic Head Quarter Building Jubail</td>
                                <td>Shapoorji Pallonji LLC </td>
                                <td>R.C.C Works</td>
                                <td>79,000,000.00</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Sabic Head Quarter Building JubaiL</td>
                                <td>Shapoorji Pallonji LLC</td>
                                <td>Finishing Works</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>King’s College Hospital, Jeddah</td>
                                <td>Shapoorji Pallonji LLC</td>
                                <td>R.C.C Works</td>
                                <td>14,000,000.00</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>King Faysal Air Academy, Majmaa.</td>
                                <td>Nesma Joint Venture</td>
                                <td>R.C.C Works</td>
                                <td>29,166,310.00</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>King Salman Air Base Project, Riyadh </td>
                                <td>Nesma Joint Venture</td>
                                <td>R.C.C Works</td>
                                <td>4,500,000.00</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Diriyah Gyratory Tunnels, Riyadh</td>
                                <td>Nesma & Partners Contracting Co.</td>
                                <td>R.C.C Works</td>
                                <td>118,572,450.00</td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>Avenues Mall, Riyadh</td>
                                <td>Nesma & Partners Contracting Co.</td>
                                <td>R.C.C Works</td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>Diriyah Gate Development Authority(DGDA) Super Basement</td>
                                <td>M/s Salini Saudi Arabia</td>
                                <td>R.C.C Works</td>
                                <td>50,000,000.00</td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>Jafurah Gas Processing Facilities (Package #1)</td>
                                <td>L & T Hydrocarbon</td>
                                <td>Civil & R.C.C Works</td>
                                <td>47,000,000.00</td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td>RJPH2-RWCC-JUBAIL</td>
                                <td>Saudi Services For Electro Mechanic(SSEM) Works Co.</td>
                                <td>Civil & R.C.C Works</td>
                                <td>13,00,000.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>

        <!-- Company Running Projects Information SECTION ENDED -->
        <!-- <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Diriyah Gate Development Authority</h5>
                        <div class="image text-center">
                            <a href="https://dgda.gov.sa/home.aspx" target="_blank">
                                <img src="{{ asset('frontend') }}/assets/images/running_projects/project.png"
                                    style="height:250px; width:80%;" alt="completed-project1">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">King Salam Airbase ATC Tower</h5>
                        <div class="image text-center">
                            <a href="#">
                                <img src="{{ asset('frontend') }}/assets/images/running_projects/project1.jpeg"
                                    style="height:250px; width:80%;" alt="completed-project1">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Avenue Mall, Riyadh</h5>
                        <div class="image text-center">
                            <a href="#">
                                <img src="{{ asset('frontend') }}/assets/images/running_projects/project2.png"
                                    style="height:250px; width:80%;" alt="completed-project1">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Aramco Gas Pipeline Project, Jafurah</h5>
                        <div class="image text-center">
                            <a href="#">
                                <img src="{{ asset('frontend') }}/assets/images/running_projects/project3.jpeg"
                                    style="height:250px; width:80%;" alt="completed-project1">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br><br>

        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Green Village, Diriyah Gate Development Authority (DGDA),Riyadh</h5>
                        <div class="image text-center">
                            <a href="https://dgda.gov.sa/home.aspx" target="_blank">
                                <img src="{{ asset('frontend') }}/assets/images/running_projects/project4.png"
                                    style="height:250px; width:80%;" alt="completed-project1">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">KAFF Majmaah Project</h5>
                        <div class="image text-center">
                            <a href="#">
                                <img src="{{ asset('frontend') }}/assets/images/running_projects/project5.jpeg"
                                    style="height:250px; width:80%;" alt="completed-project1">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">KCH Jeddah Project</h5>
                        <div class="image text-center">
                            <a href="#">
                                <img src="{{ asset('frontend') }}/assets/images/running_projects/project6.png"
                                    style="height:250px; width:80%;" alt="completed-project1">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div> -->

    </div>
</div> --}}
<!-- Running Project Details Information Table Part End -->


@endsection
@section('scripts')

<script type="text/javascript">
    $('#headingOne').on('shown.bs.collapse', function () {
        $(this).prev().find('.plus-minus-icon').html('-');
    });

    $('#headingOne').on('hidden.bs.collapse', function () {
        $(this).prev().find('.plus-minus-icon').html('+');
    });

</script>

@endsection
