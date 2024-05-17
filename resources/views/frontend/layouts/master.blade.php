<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="TemplateMo">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
    rel="stylesheet">

  <title>@yield('title')</title>
  <link rel="icon" type="image/x-icon" href="{{ asset('uploads/favicon') }}/favicon.ico">
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('frontend') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/fontawesome.css">
  <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/templatemo-finance-business.css">
  <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/owl.css">
  {{-- Tostr cdn --}}
  <link rel="stylesheet" href=" {{ asset('backend') }}/lib/toastr/toastr.min.css">

    <style>
    </style>
  @yield('style')

</head>

<body>



  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div>

      </div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- Header Part Start -->
  @include('frontend.layouts.header')
  <!-- Header Part End -->

 

  <!-- Page Content -->


 @yield('contents')



    <!-- Footer Starts Here -->
  @include('frontend.layouts.footer')
    <!-- Footer Ends Here -->


    <!-- Footer Starts Here -->
  @include('frontend.layouts.bottom-footer')
    <!-- Footer Ends Here -->

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('frontend') }}/vendor/jquery/jquery.min.js"></script>
  <script src="{{ asset('frontend') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  {{-- ################## tostr cdn ###################--}}
  <script src=" {{ asset('backend/lib/toastr/jquery.min.js') }} "></script>
  <script src=" {{ asset('backend/lib/toastr/toastr.min.js') }} "></script>
  <script>
      @if (Session:: has('message'))
      toastr.options =
      {
          "closeButton": true,
          "progressBar": true
      }
      toastr.success("{{ session('message') }}");
      @endif

      @if (Session:: has('error'))
      toastr.options =
      {
          "closeButton": true,
          "progressBar": true
      }
      toastr.error("{{ session('error') }}");
      @endif

      @if (Session:: has('info'))
      toastr.options =
      {
          "closeButton": true,
          "progressBar": true
      }
      toastr.info("{{ session('info') }}");
      @endif

      @if (Session:: has('warning'))
      toastr.options =
      {
          "closeButton": true,
          "progressBar": true
      }
      toastr.warning("{{ session('warning') }}");
      @endif
  </script>


  <!-- Additional Scripts -->
  <script src="{{ asset('frontend') }}/assets/js/custom.js"></script>
  <script src="{{ asset('frontend') }}/assets/js/owl.js"></script>
  <script src="{{ asset('frontend') }}/assets/js/slick.js"></script>
  <script src="{{ asset('frontend') }}/assets/js/accordions.js"></script>

  <script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) {                   //declaring the array outside of the
      if (!cleared[t.id]) {                      // function makes it static and global
        cleared[t.id] = 1;  // you could use true and false, but that's more typing
        t.value = '';         // with more chance of typos
        t.style.color = '#fff';
    }
  </script>
  @yield('scripts')

</html>
