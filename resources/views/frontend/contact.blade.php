@extends('frontend.layouts.master')
@section('title', 'Contact Us')

@section('contents')
 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
    section{
        padding: 60px 0;
    }

    
.tile1 {
	width: 350px;
}

.tile2 {
	flex: 1 1 auto;
	padding: 0px 40px;
}

.tile1-heading {
	background: -webkit-linear-gradient(#0aa6bd, #f126bd);
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;
	font-weight: bold;
	font-size: 1.5em;
}

.form-row {
	padding: 20px 0px 0px 0px;
  color:black;
  font-weight: 500;
}

.contact-form-row {
	padding: 10px 0px 0px 0px;
  color:black;
  font-weight: 500;
}

 
.form-field {
	border-radius: 4px;
	width: 100%;
	padding: 10px;
	background-color: #f5f4fa;
	border: 0px;
}


.contact-image {
	padding: 10px;
	border-radius: 35px;
	border: 1px solid #a8a4a4;
	vertical-align: middle;
	margin-right: 10px;
	width: 40px;
	height: 40px;
}


</style>
  <!-- <div class="contact-information">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="contact-item">
            <i class="fa fa-phone"></i>
            <h4>Phone</h4>
            <a href="#">+{{ $companyInfo->comp_phone1 }}</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-item">
            <i class="fa fa-envelope"></i>
            <h4>Email</h4>
            <a href="#">{{ $companyInfo->comp_email1 }}</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-item">
            <i class="fa fa-map-marker"></i>
            <h4>Location</h4>
            <p>{{ $companyInfo->comp_address }}</p>
            <a href="https://www.google.com/maps/place/Asloob+Bedaa+Contracting+Company/@24.6780713,46.690952,17z/data=!3m1!4b1!4m6!3m5!1s0x3e2f03c9a400e545:0xb768ed19797ec49!8m2!3d24.6780664!4d46.6935269!16s%2Fg%2F11stz9qg7t?entry=ttu" target="_blank">View on Google Maps</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="callback-form contact-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Send us a <em>message Now</em></h2>
            <span> </span>
          </div>
        </div>
        <div class="col-md-12">
          <div class="contact-form">
            <form id="contact" action="" method="get">
              <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                  </fieldset>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                  </fieldset>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div> -->
<!-- 
  <section id="intro">
        <div class="container-lg">
            <div class="row justify-content-center">
                <div class="col-md-5 text-center text-md-start">
                    <h1>
                        <div class="display-1">Black Belt</div>
                        <div class="display-2 text-muted">Your Coding Skills</div>
                    </h1>
                    <p class="lead my-4 text-muted">Md Rashedul hoque, CSE Student of Programming Expert</p>
                    <button class="btn btn-primary">Buy Now</button>
                </div>
                <div class="col-md-12 text-center d-none d-sm-block">
                    <img  class="img-fluid" src="bg.jpg" alt="Ebook Cover">
                </div>
            </div>
        </div>
    </section> -->

<section id="contact_top" class="bg-light"  >
  <div class="container-lg">
    <div class="text-center">
      <h1>Contact Us</h1>
      <p class="fst-italic fw-light  ">
        You Are Welcome at Our Office
      </p>
    </div>
    <div class="row justify-content-center">
       <!-- head office -->
      <div class="col-12 col-lg-6">
        <div class="card text-center border-2">
          <div class="card-header"  style="background-color: #10385A; color:white; font-weight:bold; font-family: Arial, Helvetica, sans-serif;">Head Office, Kindom of Saudi Arabia</div>
          <div class="card-body">
             <!-- <p class="lead card-subtitle">
              eBook Download Only
            </p> -->
  
            <div class="tile2">
                 
              <div class="contact_info">
                  <div class="form-row">
                    <img src="{{ asset('frontend') }}/assets/icons/loaction.png" class="contact-image">
                    <span>Al Arfaj, Olaya, P.O. Box 8460 <br> Post Code-12611, Riyadh</span>
                  </div>
                  <div class="form-row"> 
                     <img   src="{{ asset('frontend') }}/assets/icons/phone.png" class="contact-image"><span>+966 11 4835783 </span>
                  </div>

                  <div class="form-row"> 
                     <img src="{{ asset('frontend') }}/assets/icons/phone.png" class="contact-image"><span>+966 545 124 236 </span>
                  </div>

                  <!-- <div class="form-row"> 
                     <img src="{{ asset('frontend') }}/assets/icons/phone.png" class="contact-image"><span>+966 508 457 653 </span>
                  </div>

                  <div class="form-row"> 
                     <img src="{{ asset('frontend') }}/assets/icons/phone.png" class="contact-image"><span>+966 506 685 890 </span>
                  </div>  -->

                  <div class="form-row">
                    <img src="{{ asset('frontend') }}/assets/icons/mail.png" class="contact-image"><span>info@asloobb.com</span>
                  </div>
              </div>
            </div>
            <br>
            <a href="https://www.google.com/maps/place/Asloob+Bedaa+Contracting+Company/@24.6780713,46.690952,17z/data=!4m14!1m7!3m6!1s0x3e2f03c9a400e545:0xb768ed19797ec49!2sAsloob+Bedaa+Contracting+Company!8m2!3d24.6780664!4d46.6935269!16s%2Fg%2F11stz9qg7t!3m5!1s0x3e2f03c9a400e545:0xb768ed19797ec49!8m2!3d24.6780664!4d46.6935269!16s%2Fg%2F11stz9qg7t?entry=ttu" target="_blank" class="btn btn-outline-success">Show Map</a>

          </div>
        </div>
      </div>
      <!-- Dubai office -->
      <div class="col-12 col-lg-6">
        <div class="card text-center border-2">
          <div class="card-header"   style="background-color: #10385A; color:white; font-weight:bold; font-family: Arial, Helvetica, sans-serif;">Dubai  Office, UAE </div>
          <div class="card-body"> 
  
            <div class="tile2">
      
              <div class="contact_info">
                  <div class="form-row">
                    <img src="{{ asset('frontend') }}/assets/icons/loaction.png" class="contact-image">
                    <span> Zomorrodah Building, Office No-15 A 
                     <br> Al Karama(Near Karama Post Office) <br>P.O Box-25823  </span>
                  </div>
                  

                  <div class="form-row"> 
                     <img src="{{ asset('frontend') }}/assets/icons/phone.png" class="contact-image"><span>+971 48 869 563 </span>
                  </div> 

                  <div class="form-row">
                    <img src="{{ asset('frontend') }}/assets/icons/mail.png" class="contact-image"><span>uday@asloobb.com</span>
                  </div>
              </div>
            </div>
            <br><br> 
            <a href="https://www.google.com/maps/place/Asloob+Bedaa+Contracting+Company/@24.6780713,46.690952,17z/data=!4m14!1m7!3m6!1s0x3e2f03c9a400e545:0xb768ed19797ec49!2sAsloob+Bedaa+Contracting+Company!8m2!3d24.6780664!4d46.6935269!16s%2Fg%2F11stz9qg7t!3m5!1s0x3e2f03c9a400e545:0xb768ed19797ec49!8m2!3d24.6780664!4d46.6935269!16s%2Fg%2F11stz9qg7t?entry=ttu" target="_blank" class="btn btn-outline-success">Show Map</a>

          </div>
        </div>
      </div>


       <!-- Dubai office -->
       <div class="col-12 col-lg-6">
        <div class="card text-center border-2">
          <div class="card-header " style="background-color: #10385A; color:white; font-weight:bold; font-family: Arial, Helvetica, sans-serif;">Dhaka  Office, Bangladesh </div>
          <div class="card-body"> 
  
            <div class="tile2">
      
              <div class="contact_info">
                  <div class="form-row">
                    <img src="{{ asset('frontend') }}/assets/icons/loaction.png" class="contact-image">
                    <span> House #12, Road #7, Suite #C1 <br> Gulshan-1, Dhaka-1212  </span>
                  </div>
                  

                  <div class="form-row"> 
                     <img src="{{ asset('frontend') }}/assets/icons/phone.png" class="contact-image"><span>+880 1711 124 064 </span>
                  </div> 

                  <div class="form-row">
                    <img src="{{ asset('frontend') }}/assets/icons/mail.png" class="contact-image"><span>asloobinternational@gmail.com</span>
                  </div>
              </div>
            </div>
            <br><br> 
            <a href="https://www.google.com/maps/place/Asloob+Bedaa+Contracting+Company/@24.6780713,46.690952,17z/data=!4m14!1m7!3m6!1s0x3e2f03c9a400e545:0xb768ed19797ec49!2sAsloob+Bedaa+Contracting+Company!8m2!3d24.6780664!4d46.6935269!16s%2Fg%2F11stz9qg7t!3m5!1s0x3e2f03c9a400e545:0xb768ed19797ec49!8m2!3d24.6780664!4d46.6935269!16s%2Fg%2F11stz9qg7t?entry=ttu" target="_blank" class="btn btn-outline-success">Show Map</a>

          </div>
        </div>
      </div>


       <!-- Contact Page -->
       <div class="col-12 col-lg-6">
        <div class="card text-center border-2">
          <div class="card-header bg-light text-primary"> Send us Your Message </div>
          <div class="card-body">  
            <div class="tile2">
                <form id="contact_form" action="" onsubmit="return validateForm()" method="">
 
                    <div class="contact-form-row">
                      <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                      @if ($errors->has('name'))
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                      </span>
                      @endif
                    </div>
                    <div class="contact-form-row">
                      <input type="text" class="form-control" id="email" placeholder="Enter your email address" pattern="[^ @]*@[^ @]*" required>
                    </div>
                    <div class="contact-form-row">
                      <textarea class="form-control" id="message" placeholder="Go ahead we are listening..." required></textarea>
                    </div>
                    <br>
                    <div class="text-right"> 
                      <input type="submit" onClick="SendMessage()" class="btn btn-primary" value="Send">
                    </div>
                </form>
            </div>
            <br><br> 
            
          </div>
        </div>
      </div>

    </div>
    
  </div>
</section>

  <!-- <div id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3625.8545679128856!2d46.72347571431596!3d24.663133759213277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f04413073e173%3A0x41e23ca8bc03227a!2sAsloob%20Aldaam%20Contracting%20Est.!5e0!3m2!1sen!2sbd!4v1669708034882!5m2!1sen!2sbd" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div> -->


  <script>

$().ready(function () { 
  
  $("#contact_form").validate({ 

      rules: { 
          name: "required",   
          message: { 
              required: true, 
              minlength: 10 // For length of lastname 
          }, 
          email: { 
              required: true, 
              email: true
          },  
      }, 
       
      messages: { 
          name: " Please enter your Name", 
          email: " Please enter your Email", 
          message: { 
              required: " Please type your message", 
              minlength: " Your message must consist of at least 10 characters"
          }, 
         
      } 
  }); 
});

    function SendMessage(){
      if(validateForm()){
        alert("Message Successfully Sent");
        $("#name").val("");
        $("#email").val("");
        $("#message").val("");
        
      }
    }
  </script>
  
@endsection
