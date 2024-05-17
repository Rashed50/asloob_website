
  <!-- Footer Starts Here -->
  <footer>
    <div class="container">
      <div class="row">

        <div class="col-md-4 footer-item">
          <!-- <h6>Asloob Bedaa Contracting Company</h6> -->
          <p>WE BUILT TRUST - CONSTRUCTION SOLUTION FOR EVERY PROJECT.</p>
          <ul class="social-icons">
            <li><a rel="nofollow" href="https://www.facebook.com/profile.php?id=100088210302174" target="_blank"><i class="fa fa-facebook"></i></a>
            </li>
            <li><a href="{{ $companyInfo->twitter_url }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="{{ $companyInfo->linkedin_url }}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#" target="" title="{{ $companyInfo->whatsapp_num }}"><i class="fa fa-whatsapp"></i></a></li>
          </ul>
        </div>
        <div class="col-md-4 footer-item">
          <h6>Useful Links</h6>
          <ul class="menu-list d-flex" style="line-height: 14px;">

            <li class="p-2"><a href="https://bedaaco.com/"> Bedaa General Co.</a></li>
            <li class="p-2"><a href="https://asloobint.com/"> Asloob Int.</a></li>
            <li class="p-2"><a href="https://hrsd.gov.sa/en">KSA</a></li>
            <li class="p-2"><a href="https://www.absher.sa/portal/landing.html">Absher</a></li>
            <li class="p-2"><a href="https://play.google.com/store/apps/details?id=com.posbankbh.einvoiceqrreader&hl=en&gl=US&pli=1">QRCode App </a></li>
          </ul>
        </div>

        <div class="col-md-4 footer-item">
          <h6>More About Company</h6>
          <ul class="menu-list" style="line-height: 14px;">
            <li><a href="{{ route('frontend-about') }}">About</a></li>
            <li><a href="{{ route('frontend-contact') }}">Contact</a></li>
            <li><a href="{{ route('frontend-service') }}">Services</a></li>
            <li><a href="{{ route('frontend-complete-projects') }}">Success Story</a></li>
            <li><a href="{{ route('frontend-career') }}">Career</a></li>
            <li><a href="{{ route('frontend-policy') }}" target="_blank">Privacy Policy</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer Ends Here -->
