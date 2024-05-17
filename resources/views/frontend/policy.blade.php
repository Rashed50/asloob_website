@extends('frontend.layouts.master')
@section('title', 'Privacy Policy')
@section('contents')

<div class="policy-page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Privacy Policy</h1>
          <span>ASLOOB BEDAA CONTRACTING COMPANY</span>
        </div>
      </div>
    </div>
  </div>

  <div class="more-info about-info" >
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <div class="row">
              <div class="col-md-12 align-self-justify" style="text-align:justify;" >
                <div class="right-content">
                  <h2>Our Company <em> Privacy Policy</em></h2>
                  <div class="service-item">
                      <p>When you use our Website, we collect and store your personal information which is provided by you from time to time. Our primary goal in doing so is to provide you a safe, efficient, smooth and customized experience. This allows us to provide services and features that most likely meet your needs, and to customize our website to make your experience safer and easier. More importantly, while doing so, we collect personal information from you that we consider necessary for achieving this purpose. </p>
                      <br>
                      <strong>Below are some of the ways in which we collect and store your information: </strong>
                      <br><br>
                      <ul style="padding-left:50px; text-align:justify; list-style-type:circle;">
                          <li>We receive and store any information you enter on our website or give us in any other way. We use the information that you provide for such purposes as responding to your requests, customizing future shopping for you, improving our stores, and communicating with you.</li>
                          <li style="margin-top: 3px;">We also store certain types of information whenever you interact with us. For example, like many websites, we use "cookies," and we obtain certain types of information when your web browser accesses Chaldal.com or advertisements and other content served by or on behalf of Chaldal.com on other websites.</li>
                          <li style="margin-top: 3px;"> When signing up via Facebook, we collect your Name and Email (provided by Facebook) as part of your Chaldal account Information.</li>
                          <li style="margin-top: 3px;">To help us make e-mails more useful and interesting, we often receive a confirmation when you open e-mail from Chaldal if your computer supports such capabilities.</li>
                      </ul><br>
                      <div class="">
                          <strong style="font-size: 16px;">Change to your information:</strong>
                          <p style="margin-top: 15px;">The information you provide us isn’t set in stone. You may review, update, correct or delete the personal information in your profile at any time. </p>
                          <ul style="padding-left:50px; text-align:justify; list-style-type:circle;">
                              <li>If you would like us to remove your information from our records, please create a request at the <a href=" {{ route('frontend-contact') }} " style="text-decoration-line: underline;text-decoration-style: solid;" target="_black">Contact Us</a> page. </li>
                              <li style="margin-top: 3px;">To Delete your Facebook login, visit the <a href=" {{ route('frontend-contact') }} " style="text-decoration-line: underline;text-decoration-style: solid;">Contact Us</a>  page while logged in via Facebook. You should see a "Delete Facebook Login" option to create a request to remove Facebook login from your account.</li>
                          </ul>
                      </div><br>
                      <p style="font-size: 16px; font-weight:bold; margin-bottom:3px;">Information about our customers is an important part of our business, and we are not in the business of selling it to others. </p>
                      <p>We release account and other personal information when we believe release is appropriate to comply with the law; enforce or apply our Terms of Use and other agreements; or protect the rights, property, or safety of Chaldal.com, our users, or others. This includes exchanging information with other companies and organizations for fraud protection.</p>
                  </div>
                </div>
              </div>

            </div>

        </div>
      </div>
    </div>
  </div>

  {{-- <div class="testimonials" style="margin-top:0px; padding:30px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Mission &<em> Vision</em></h2>
            <span>Asloob Bedaa Contracting Company</span>
          </div>
        </div>
        <div class="col-md-12" style="display: flex">
            <div class="testimonial-item" style="margin: 0px; padding:0px; border-right:2px solid rgb(90, 63, 62)">
                <div class="inner-content">
                <h3 style="padding-bottom:20px; font-weight:bold"> <i style="color: rgb(126, 65, 85)" class="fa fa-paper-plane"></i> Mission</h3>
                <p>"{{ $companyInfo->comp_mission }}"</p>
                </div>
                <img src="http://placehold.it/60x60" alt="">
            </div>
            <div class="testimonial-item" style="margin: 0px; padding:0px;">
                <div class="inner-content">
                <h3 style="padding-bottom:20px; font-weight:bold"> <i style="color: rgb(19, 82, 27)" class="fa fa-globe"></i> Vision</h3>
                <p>"{{ $companyInfo->comp_vission }}"</p>
                </div>
                <img src="http://placehold.it/60x60" alt="">
            </div>
        </div>
      </div>
    </div>
  </div> --}}

    <!-- STATISTIC SECTION STARTED -->
    @include('frontend.include.statistic')
    <!-- STATISTIC SECTION ENDED -->
    <br>

@endsection
