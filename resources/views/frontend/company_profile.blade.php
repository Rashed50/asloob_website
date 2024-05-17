@extends('frontend.layouts.master')
@section('title', 'Company Profile')
@section('contents')

<div class="profile-page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Asloob Bedaa Contracting Company </h1>
                {{-- <h1>We have Solid Background on Constraction</h1>
                <span>We have over 3,000 Employees as Constraction Expert</span> --}}
            </div>
        </div>
    </div>
</div>
<br>

<!-- PORTFOLIO SECTION STARTED -->
<section id="portfolio" class="portfolio">
    {{-- <div class="text-center">
        <h2>Our Photo Gallery</h2>
        <img class="line img-fluid" src="{{ asset('frontend') }}/assets/images/line.png" alt="">
    </div> --}}
    <div class="team" style="margin:10px; padding:15px;">
        <div class="container" id="certificate">
            <div class="row">
                <div class="col-md-12 pdf-container">
                    <embed src="{{ asset('frontend/assets/images/company_profile/asloob_bedaa_profile.pdf') }}"
                        type="application/pdf" id="embeded_pdf" width="100%" height="100%">
                </div>
            </div>
        </div>
    </div>

</section>
<!-- PORTFOLIO SECTION ENDED -->



@endsection
