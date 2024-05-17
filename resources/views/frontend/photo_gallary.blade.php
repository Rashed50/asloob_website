@extends('frontend.layouts.master')
@section('title', 'Photo Gallery')
@section('contents')

<style type="text/css">

body{
	margin:0;
	padding:0;
}
 .container{
	width:80%
	margin:10px auto;
   align-items: center;
} 
.portfolio-menu{
	text-align:center;
}
.portfolio-menu ul li{
	display:inline-block;
	margin:0;
	list-style:none;
	padding:10px 15px;
	cursor:pointer;
	-webkit-transition:all 05s ease;
	-moz-transition:all 05s ease;
	-ms-transition:all 05s ease;
	-o-transition:all 05s ease;
	transition:all .5s ease;
}

.portfolio-item{
	/*width:100%;*/
}
.portfolio-item .item{
	/*width:303px;*/
	float:left;
	margin-bottom:10px;
}











.btn:focus, .btn:active, button:focus, button:active {
  outline: none !important;
  box-shadow: none !important;
}

#image-gallery .modal-footer{
  display: block;
}

.thumb{
  margin-top: 15px;
  margin-bottom: 15px;
}


</style>

<head>
    
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>

<div class="gallry-page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>ABC Photo Gallery</h1>
                {{-- <h1>We have Solid Background on Constraction</h1>
                <span>We have over 3,000 Employees as Constraction Expert</span> --}}
            </div>
        </div>
    </div>
</div>
 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
<br>
<!-- <div class="container" >
         <div class="row">
            <div class="col-lg-12 text-center my-2">
                <h4>ABC Photo Gallery</h4>
            </div>
         </div>
         <div class="portfolio-menu mt-2 mb-4">
            <ul>
              
            </ul>
         </div>
         <div class="portfolio-item row">
            
            <div class="item selfie col-lg-4 col-md-5 col-6 col-sm">
               <a href="{{ asset('frontend') }}/assets/images/photo_gallery/100.jpeg" class="fancylight popup-btn" data-fancybox-group="light"> 
               <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/photo_gallery/100.jpeg" alt="">
               </a>
            </div>            
            <div class="item selfie col-lg-4 col-md-5 col-6 col-sm">
               <a href="{{ asset('frontend') }}/assets/images/photo_gallery/101.png" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/photo_gallery/101.png" alt="">
               </a>
            </div>

            <div class="item selfie col-lg-4 col-md-5 col-6 col-sm">
               <a href="{{ asset('frontend') }}/assets/images/photo_gallery/102.jpeg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/photo_gallery/102.jpeg" alt="">
               </a>
            </div>

            <div class="item selfie col-lg-4 col-md-5 col-6 col-sm">
               <a href="{{ asset('frontend') }}/assets/images/photo_gallery/103.jpeg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/photo_gallery/103.jpeg" alt="">
               </a>
            </div>

            <div class="item selfie col-lg-4 col-md-5 col-6 col-sm">
               <a href="{{ asset('frontend') }}/assets/images/photo_gallery/103.jpeg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/photo_gallery/103.jpeg" alt="">
               </a>
            </div>

            <div class="item selfie col-lg-4 col-md-5 col-6 col-sm">
               <a href="{{ asset('frontend') }}/assets/images/photo_gallery/103.jpeg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/photo_gallery/103.jpeg" alt="">
               </a>
            </div>

            <div class="item selfie col-lg-4 col-md-5 col-6 col-sm">
               <a href="{{ asset('frontend') }}/assets/images/photo_gallery/104.jpeg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/photo_gallery/104.jpeg" alt="">
               </a>
            </div>

           

         </div>
</div> -->


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<div class="container">
   <div class="row">
      <div class="row">
          <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="{{ asset('frontend') }}/assets/images/photo_gallery/1.jpeg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="{{ asset('frontend') }}/assets/images/photo_gallery/1.jpeg"
                         alt="Another alt text">
                </a>
            </div>
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="{{ asset('frontend') }}/assets/images/photo_gallery/2.jpeg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="{{ asset('frontend') }}/assets/images/photo_gallery/2.jpeg"
                         alt="Another alt text">
                </a>
            </div>

             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="{{ asset('frontend') }}/assets/images/photo_gallery/3.jpeg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="{{ asset('frontend') }}/assets/images/photo_gallery/3.jpeg"
                         alt="Another alt text">
                </a>
            </div>

             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="{{ asset('frontend') }}/assets/images/photo_gallery/4.jpeg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="{{ asset('frontend') }}/assets/images/photo_gallery/4.jpeg"
                         alt="Another alt text">
                </a>
            </div>


             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="{{ asset('frontend') }}/assets/images/photo_gallery/99.jpeg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="{{ asset('frontend') }}/assets/images/photo_gallery/99.jpeg"
                         alt="Another alt text">
                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="{{ asset('frontend') }}/assets/images/photo_gallery/100.jpeg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="{{ asset('frontend') }}/assets/images/photo_gallery/100.jpeg"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="{{ asset('frontend') }}/assets/images/photo_gallery/101.jpeg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="{{ asset('frontend') }}/assets/images/photo_gallery/101.jpeg"
                         alt="Another alt text">
                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image= "{{ asset('frontend') }}/assets/images/photo_gallery/200.jpeg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src= "{{ asset('frontend') }}/assets/images/photo_gallery/200.jpeg"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1"
                   data-image="{{ asset('frontend') }}/assets/images/photo_gallery/201.jpeg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src= "{{ asset('frontend') }}/assets/images/photo_gallery/201.jpeg"
                         alt="Another alt text">
                </a>
            </div>

             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1"
                   data-image="{{ asset('frontend') }}/assets/images/photo_gallery/202.jpeg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src= "{{ asset('frontend') }}/assets/images/photo_gallery/202.jpeg"
                         alt="Another alt text">
                </a>
            </div>

            <!-- 10 -->

             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1"
                   data-image="{{ asset('frontend') }}/assets/images/photo_gallery/203.jpeg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src= "{{ asset('frontend') }}/assets/images/photo_gallery/203.jpeg"
                         alt="Another alt text">
                </a>
            </div>

             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1"
                   data-image="{{ asset('frontend') }}/assets/images/photo_gallery/204.jpeg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src= "{{ asset('frontend') }}/assets/images/photo_gallery/204.jpeg"
                         alt="Another alt text">
                </a>
            </div>

            <!--  <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1"
                   data-image="{{ asset('frontend') }}/assets/images/photo_gallery/205.jpeg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src= "{{ asset('frontend') }}/assets/images/photo_gallery/205.jpeg"
                         alt="Another alt text">
                </a>
            </div>

             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1"
                   data-image="{{ asset('frontend') }}/assets/images/photo_gallery/206.jpeg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src= "{{ asset('frontend') }}/assets/images/photo_gallery/206.jpeg"
                         alt="Another alt text">
                </a>
            </div> -->

           

             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1"
                   data-image="{{ asset('frontend') }}/assets/images/photo_gallery/208.jpeg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src= "{{ asset('frontend') }}/assets/images/photo_gallery/208.jpeg"
                         alt="Another alt text">
                </a>
            </div>

             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1"
                   data-image="{{ asset('frontend') }}/assets/images/photo_gallery/209.jpeg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src= "{{ asset('frontend') }}/assets/images/photo_gallery/209.jpeg"
                         alt="Another alt text">
                </a>
            </div>

             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1"
                   data-image="{{ asset('frontend') }}/assets/images/photo_gallery/210.jpeg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src= "{{ asset('frontend') }}/assets/images/photo_gallery/210.jpeg"
                         alt="Another alt text">
                </a>
            </div>

             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1"
                   data-image="{{ asset('frontend') }}/assets/images/photo_gallery/211.jpeg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src= "{{ asset('frontend') }}/assets/images/photo_gallery/211.jpeg"
                         alt="Another alt text">
                </a>
            </div>

             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1"
                   data-image="{{ asset('frontend') }}/assets/images/photo_gallery/212.jpeg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src= "{{ asset('frontend') }}/assets/images/photo_gallery/212.jpeg"
                         alt="Another alt text">
                </a>
            </div>

             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1"
                   data-image="{{ asset('frontend') }}/assets/images/photo_gallery/213.jpeg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src= "{{ asset('frontend') }}/assets/images/photo_gallery/213.jpeg"
                         alt="Another alt text">
                </a>
            </div>

             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1"
                   data-image="{{ asset('frontend') }}/assets/images/photo_gallery/214.jpeg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src= "{{ asset('frontend') }}/assets/images/photo_gallery/214.jpeg"
                         alt="Another alt text">
                </a>
            </div>  

          
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1"
                   data-image="{{ asset('frontend') }}/assets/images/photo_gallery/215.jpeg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src= "{{ asset('frontend') }}/assets/images/photo_gallery/215.jpeg"
                         alt="Another alt text">
                </a>
            </div> 


            <!-- 20 -->

             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1"
                   data-image="{{ asset('frontend') }}/assets/images/photo_gallery/216.jpeg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src= "{{ asset('frontend') }}/assets/images/photo_gallery/216.jpeg"
                         alt="Another alt text">
                </a>
            </div>

             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1"
                   data-image="{{ asset('frontend') }}/assets/images/photo_gallery/217.jpeg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src= "{{ asset('frontend') }}/assets/images/photo_gallery/217.jpeg"
                         alt="Another alt text">
                </a>
            </div>

           

             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1"
                   data-image="{{ asset('frontend') }}/assets/images/photo_gallery/219.jpeg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src= "{{ asset('frontend') }}/assets/images/photo_gallery/219.jpeg"
                         alt="Another alt text">
                </a>
            </div>


             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1"
                   data-image="{{ asset('frontend') }}/assets/images/photo_gallery/220.jpeg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src= "{{ asset('frontend') }}/assets/images/photo_gallery/220.jpeg"
                         alt="Another alt text">
                </a>
            </div>

             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1"
                   data-image="{{ asset('frontend') }}/assets/images/photo_gallery/221.jpeg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src= "{{ asset('frontend') }}/assets/images/photo_gallery/221.jpeg"
                         alt="Another alt text">
                </a>
            </div>

             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1"
                   data-image="{{ asset('frontend') }}/assets/images/photo_gallery/222.jpeg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src= "{{ asset('frontend') }}/assets/images/photo_gallery/222.jpeg"
                         alt="Another alt text">
                </a>
            </div>


             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1"
                   data-image="{{ asset('frontend') }}/assets/images/photo_gallery/227.jpeg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src= "{{ asset('frontend') }}/assets/images/photo_gallery/227.jpeg"
                         alt="Another alt text">
                </a>
            </div>

             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1"
                   data-image="{{ asset('frontend') }}/assets/images/photo_gallery/228.jpeg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src= "{{ asset('frontend') }}/assets/images/photo_gallery/228.jpeg"
                         alt="Another alt text">
                </a>
            </div>

             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1"
                   data-image="{{ asset('frontend') }}/assets/images/photo_gallery/223.jpeg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src= "{{ asset('frontend') }}/assets/images/photo_gallery/223.jpeg"
                         alt="Another alt text">
                </a>
            </div>

             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1"
                   data-image="{{ asset('frontend') }}/assets/images/photo_gallery/224.jpeg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src= "{{ asset('frontend') }}/assets/images/photo_gallery/224.jpeg"
                         alt="Another alt text">
                </a>
            </div>

             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1"
                   data-image="{{ asset('frontend') }}/assets/images/photo_gallery/225.jpeg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src= "{{ asset('frontend') }}/assets/images/photo_gallery/225.jpeg"
                         alt="Another alt text">
                </a>
            </div>
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1"
                   data-image="{{ asset('frontend') }}/assets/images/photo_gallery/226.jpeg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src= "{{ asset('frontend') }}/assets/images/photo_gallery/226.jpeg"
                         alt="Another alt text">
                </a>
            </div>

              <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1"
                   data-image="{{ asset('frontend') }}/assets/images/photo_gallery/207.jpeg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src= "{{ asset('frontend') }}/assets/images/photo_gallery/207.jpeg"
                         alt="Another alt text">
                </a>
            </div>

           <!--    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1"
                   data-image="{{ asset('frontend') }}/assets/images/photo_gallery/218.jpeg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src= "{{ asset('frontend') }}/assets/images/photo_gallery/218.jpeg"
                         alt="Another alt text">
                </a>
            </div> -->

            
            
        </div>


        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="image-gallery-title"></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                        </button>

                        <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
   </div>
</div>



       
<script type="text/javascript">

   $('.portfolio-menu ul li').click(function(){
            $('.portfolio-menu ul li').removeClass('active');
            $(this).addClass('active');
            
            var selector = $(this).attr('data-filter');
            $('.portfolio-item').isotope({
               filter:selector
            });
            return  false;
         });
         $(document).ready(function() {
         var popup_btn = $('.popup-btn');
         popup_btn.magnificPopup({
         type : 'image',
         gallery : {
            enabled : true
         }
         });
         });




         let modalId = $('#image-gallery');

$(document)
  .ready(function () {

    loadGallery(true, 'a.thumbnail');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current) {
      $('#show-previous-image, #show-next-image')
        .show();
      if (counter_max === counter_current) {
        $('#show-next-image')
          .hide();
      } else if (counter_current === 1) {
        $('#show-previous-image')
          .hide();
      }
    }

    /**
     *
     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     * @param setClickAttr  Sets the attribute for the click handler.
     */

    function loadGallery(setIDs, setClickAttr) {
      let current_image,
        selector,
        counter = 0;

      $('#show-next-image, #show-previous-image')
        .click(function () {
          if ($(this)
            .attr('id') === 'show-previous-image') {
            current_image--;
          } else {
            current_image++;
          }

          selector = $('[data-image-id="' + current_image + '"]');
          updateGallery(selector);
        });

      function updateGallery(selector) {
        let $sel = selector;
        current_image = $sel.data('image-id');
        $('#image-gallery-title')
          .text($sel.data('title'));
        $('#image-gallery-image')
          .attr('src', $sel.data('image'));
        disableButtons(counter, $sel.data('image-id'));
      }

      if (setIDs == true) {
        $('[data-image-id]')
          .each(function () {
            counter++;
            $(this)
              .attr('data-image-id', counter);
          });
      }
      $(setClickAttr)
        .on('click', function () {
          updateGallery($(this));
        });
    }
  });

// build key actions
$(document)
  .keydown(function (e) {
    switch (e.which) {
      case 37: // left
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
          $('#show-previous-image')
            .click();
        }
        break;

      case 39: // right
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
          $('#show-next-image')
            .click();
        }
        break;

      default:
        return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
  });




</script>       
@endsection