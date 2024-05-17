@extends('frontend.layouts.master')
@section('title', 'Complete Projects')
@section('style')
<style>
    .accordion-content-description .right ul {
        margin-bottom: 0;
    }

    .accordion-content-description .right ul.project_data li {
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
            word-break: break-all
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

{{-- <div class="projects-page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1></h1>
                <span> </span>
            </div>
        </div>
    </div>
</div> --}}


<!-- Complete project info showing Start -->
<div class="team" style="margin:10px; padding:10px;">

    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="project_page_heading">
                    <h2>Completed Projects</h2>
                    <span></span>
                </div>
            </div>

            <div class="col-md-1"></div>
            <div class="col-md-10">

                <div id="accordion">                   

                    <!-- Single accordion card section Start-->
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    <i class="plus-minus-icon"></i> Command & Staff College, Riyadh
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordion">
                            <div class="card-body">
                                <!-- Accordion content body Start -->
                                <div class="accordion-content-description">

                                    <div class="row ">
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <div class="right sticky">
                                                <h4 class="mb-4 h4_text aos-init aos-animate" data-aos="fade-up"
                                                    data-aos-delay="100">Command & Staff College, Riyadh </h4>
                                                <ul class="project_data">
                                                    <li
                                                        style="background-image: url(https://alanwar.sa/images/project-owner.png);">
                                                        <span class="text">Project Owner</span>
                                                        <p>Command & Staff College, Riyadh</p>
                                                    </li>

                                                    <li
                                                        style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-1.png);">
                                                        <span class="text">Main Contactor</span>
                                                        <p>Saudi Bin Laden Group</p>
                                                    </li>

                                                    <li
                                                        style="background-image: url(https://alanwar.sa/images/value-01.png);">
                                                        <span class="text">Contract Value</span>
                                                        <p>41.2M SAR</p>
                                                    </li>

                                                    <li
                                                        style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-4.png);">
                                                        <span class="text">Contract Type</span>
                                                        <p>Remeasure</p>
                                                    </li>

                                                    <li
                                                        style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-2.png);">
                                                        <span class="text">Type of Work</span>
                                                        <p> Civil Works</p>
                                                    </li>

                                                    <li
                                                        style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-5.png);">
                                                        <span class="text">Sub Contract</span>
                                                        <p></p>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <a href="#"><img
                                                    src="{{ asset('frontend') }}/assets/images/completed_projects/commnad_staff_collegage.JPG"
                                                    alt="" width="100%"></a>
                                        </div>
                                    </div>

                                </div>
                                <!-- Accordion content body End -->
                            </div>
                        </div>
                    </div>
 
                    <!-- KAAI section Start--> 
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="plus-minus-icon"></i> KAAI Airport Project, Jeddah
                                </button>
                            </h5>
                        </div>

                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <!-- Accordion content body Start -->
                                <div class="accordion-content-description">


                                    <div class="row ">
                                        <div class="col-md-6 col-lg-6 mb-3 ">
                                            <div class="right sticky">
                                                <h4 class="mb-4 h4_text aos-init aos-animate" data-aos="fade-up"
                                                    data-aos-delay="100">KAAI Airport Project, Jeddah</h4>

                                                <ul class="project_data">
                                                    <li
                                                        style="background-image: url(https://alanwar.sa/images/project-owner.png);">
                                                        <span class="text">Project Owner</span>
                                                        <p>KAAI Airport Project, Jeddah</p>
                                                    </li>

                                                    <li
                                                        style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-1.png);">
                                                        <span class="text">Main Contactor</span>
                                                        <p> TAL - JV</p>
                                                    </li>

                                                    <li
                                                        style="background-image: url(https://alanwar.sa/images/value-01.png);">
                                                        <span class="text">Contract Value</span>
                                                        <p> 13.03M SAR</p>
                                                    </li>

                                                    <li
                                                        style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-4.png);">
                                                        <span class="text">Contract Type</span>
                                                        <p> Remeasure</p>
                                                    </li>

                                                    <li
                                                        style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-2.png);">
                                                        <span class="text">Type of Work</span>
                                                        <p> Civil Works</p>
                                                    </li>

                                                    <li
                                                        style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-5.png);">
                                                        <span class="text">Sub Contract</span>
                                                        <p></p>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <a href="#"><img
                                                    src="{{ asset('frontend') }}/assets/images/completed_projects/kaai.jpg"
                                                    alt="" width="100%"></a>
                                        </div>
                                    </div>

                                </div>
                                <!-- Accordion content body End -->
                            </div>
                        </div>
                    </div>
 
                    <!-- Single accordion card section Start-->
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="plus-minus-icon"></i> MMGP Project, Ma’aden
                                </button>
                            </h5>
                        </div>

                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordion">
                            <div class="card-body">
                                <!-- Accordion content body Start -->
                                <div class="accordion-content-description">


                                    <div class="row ">
                                        <div class="col-md-6 col-lg-6 mb-3 ">
                                            <div class="right sticky">
                                                <h4 class="mb-4 h4_text aos-init aos-animate" data-aos="fade-up"
                                                    data-aos-delay="100">MMGP Project, Ma’aden</h4>
                                                <ul class="project_data">
                                                    <li
                                                        style="background-image: url(https://alanwar.sa/images/project-owner.png);">
                                                        <span class="text">Project Owner</span>
                                                        <p>MMGP Project, Ma’aden</p>
                                                    </li>

                                                    <li
                                                        style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-1.png);">
                                                        <span class="text">Main Contactor</span>
                                                        <p> Larsen & Toubro Limited</p>
                                                    </li>

                                                    <li
                                                        style="background-image: url(https://alanwar.sa/images/value-01.png);">
                                                        <span class="text">Budget</span>
                                                        <p> 42M SAR</p>
                                                    </li>

                                                    <li
                                                        style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-4.png);">
                                                        <span class="text">Contract Type</span>
                                                        <p> Remeasure</p>
                                                    </li>

                                                    <li
                                                        style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-2.png);">
                                                        <span class="text">Type of Work</span>
                                                        <p> Civil Works</p>
                                                    </li>

                                                    <li
                                                        style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-5.png);">
                                                        <span class="text">Sub Contract</span>
                                                        <p></p>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <a href="#"><img
                                                    src="{{ asset('frontend') }}/assets/images/completed_projects/maden.png"
                                                    alt="" width="100%"></a>
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
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <i class="plus-minus-icon"></i> Marriot Hotel D.Q. Riyadh
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
                                                    data-aos-delay="100">Marriot Hotel D.Q. Riyadh</h4>
                                                <ul class="project_data">
                                                    <li
                                                        style="background-image: url(https://alanwar.sa/images/project-owner.png);">
                                                        <span class="text">Project Owner</span>
                                                        <p>Marriot Hotel D.Q. Riyadh</p>
                                                    </li>

                                                    <li
                                                        style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-1.png);">
                                                        <span class="text">Main Contactor</span>
                                                        <p> Shapoorji Pallonji LLC</p>
                                                    </li>

                                                    <li
                                                        style="background-image: url(https://alanwar.sa/images/value-01.png);">
                                                        <span class="text">Budget</span>
                                                        <p> 14.35M SAR</p>
                                                    </li>

                                                    <li
                                                        style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-4.png);">
                                                        <span class="text">Contract Type</span>
                                                        <p> Remeasure</p>
                                                    </li>

                                                    <li
                                                        style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-2.png);">
                                                        <span class="text">Type of Work</span>
                                                        <p> Civil Works</p>
                                                    </li>

                                                    <li
                                                        style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-5.png);">
                                                        <span class="text">Sub Contract</span>
                                                        <p></p>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <a href="#"><img
                                                    src="{{ asset('frontend') }}/assets/images/completed_projects/marriot_hotel.jpg"
                                                    alt="" width="100%"></a>
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
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <i class="plus-minus-icon"></i> SECO Head Quarter, Riyadh
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
                                                    data-aos-delay="100">SECO Head Quarter, Riyadh</h4>
                                                <ul class="project_data">
                                                    <li
                                                        style="background-image: url(https://alanwar.sa/images/project-owner.png);">
                                                        <span class="text">Project Owner</span>
                                                        <p>SECO Head Quarter, Riyadh</p>
                                                    </li>

                                                    <li
                                                        style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-1.png);">
                                                        <span class="text">Main Contactor</span>
                                                        <p>Shapoorji Pallonji LLC</p>
                                                    </li>

                                                    <li
                                                        style="background-image: url(https://alanwar.sa/images/value-01.png);">
                                                        <span class="text">Budget</span>
                                                        <p>9.85M SAR</p>
                                                    </li>

                                                    <li
                                                        style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-4.png);">
                                                        <span class="text">Contract Type</span>
                                                        <p> Remeasure</p>
                                                    </li>

                                                    <li
                                                        style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-2.png);">
                                                        <span class="text">Type of Work</span>
                                                        <p> R.C.C & Electrical Works</p>
                                                    </li>

                                                    <li
                                                        style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-5.png);">
                                                        <span class="text">Sub Contract</span>
                                                        <p></p>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <a href="#"><img
                                                    src="{{ asset('frontend') }}/assets/images/completed_projects/seco.jpg"
                                                    alt="" width="100%"></a>
                                        </div>
                                    </div>

                                </div>
                                <!-- Accordion content body End -->
                            </div>
                        </div>
                    </div>
                    <!-- Single accordion card section End-->
                    
                    <!-- Single accordion card section SABIC Headquater building Start-->
                    <div class="card">
                        <div class="card-header" id="headingSabicHeadBuilding">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseSabicHeadBuilding"
                                    aria-expanded="false" aria-controls="collapseSabicHeadBuilding">
                                    <i class="plus-minus-icon"></i> Sabic Head Quarter Building Jubail
                                </button>
                            </h5>
                        </div>

                        <div id="collapseSabicHeadBuilding" class="collapse show" aria-labelledby="headingSabicHeadBuilding"
                            data-parent="#accordion">
                            <div class="card-body">
                                <!-- Accordion content body Start -->
                                <div class="accordion-content-description">

                                 <div class="row ">
                                    <div class="col-md-6 col-lg-6 mb-3">
                                        <div class="right sticky">
                                            <h4 class="mb-4 h4_text aos-init aos-animate" data-aos="fade-up"
                                                data-aos-delay="100">Sabic Head Quarter Building Jubail</h4>
                                            <ul class="project_data">
                                                <li style="background-image: url(https://alanwar.sa/images/project-owner.png);">
                                                    <span class="text">Project Owner</span>
                                                    <p>Saudi Arabia's Basic Industries Corporation(SABIC)</p>
                                                </li>

                                                <li style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-1.png);">
                                                    <span class="text">Main Contactor</span>
                                                    <p>Shapoorji Pallonji LLC</p>
                                                </li>

                                                <li style="background-image: url(https://alanwar.sa/images/value-01.png);">
                                                    <span class="text">Budget</span>
                                                    <p>79,000,000.00 SAR</p>
                                                </li>

                                                <li style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-4.png);">
                                                    <span class="text">Contract Type</span>
                                                    <p>Remeasure</p>
                                                </li>

                                                <li style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-2.png);">
                                                    <span class="text">Type of Work</span>
                                                    <p> R.C.C Works</p>
                                                </li>

                                                <li style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-5.png);">
                                                    <span class="text">Sub Contract</span>
                                                    <p></p>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                        <img src="{{ asset('frontend') }}/assets/images/completed_projects/jubail.jpeg"
                                            alt="" width="100%">
                                    </div>
                                </div>

                                </div>
                                <!-- Accordion content body End -->
                            </div>
                        </div>
                    </div>
                    <!-- Single accordion card section SABIC Headquater building End-->
                     
                    
                     <!-- Single accordion card section Start-->
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="plus-minus-icon"></i> King’s College Hospital, Jeddah
                                </button>
                            </h5>
                        </div>

                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <!-- Accordion content body Start -->
                                <div class="accordion-content-description">


                                 <div class="row ">
                                    <div class="col-md-6 col-lg-6 mb-3 ">
                                        <div class="right sticky">
                                            <h4 class="mb-4 h4_text aos-init aos-animate" data-aos="fade-up"
                                                data-aos-delay="100">King’s College Hospital, Jeddah</h4>

                                                <ul class="project_data">
                                                    <li style="background-image: url(https://alanwar.sa/images/project-owner.png);">
                                                        <span class="text">Project Owner</span>
                                                        <p>King’s College Hospital Authority, Kingdom of Saudi Arabia</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/prohect-detail-icon-1.png);">
                                                        <span class="text">Main Contactor</span>
                                                        <p> Shapoorji Pallonji LLC</p>
                                                    </li>

                                                    <li style="background-image: url(https://alanwar.sa/images/value-01.png);">
                                                        <span class="text">Contract Value</span>
                                                        <p> 14M SAR</p>
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
                                                        <p>King’s College Hospital</p>
                                                    </li>

                                                </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                        <img src="{{ asset('frontend') }}/assets/images/running_projects/king college hospital.jpeg"
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
<!-- Complete project info showing End -->



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
