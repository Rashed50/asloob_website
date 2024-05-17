<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="">
    <meta name="twitter:creator" content="">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

    <!-- Facebook -->
    <meta property="og:url" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">

    <meta property="og:image" content="">
    <meta property="og:image:secure_url" content="">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="">
    <meta name="author" content="">


    <title>@yield('title')</title>

    <!-- vendor css -->
    <link href=" {{ asset('backend') }}/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href=" {{ asset('backend') }}/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href=" {{ asset('backend') }}/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href=" {{ asset('backend') }}/lib/rickshaw/rickshaw.min.css" rel="stylesheet">
    <link href=" {{ asset('backend') }}/lib/datatables/jquery.dataTables.css" rel="stylesheet">
    <link href=" {{ asset('backend') }}/lib/select2/css/select2.min.css" rel="stylesheet">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href=" {{ asset('backend') }}/css/starlight.css">
    {{-- Tostr cdn --}}
    <link rel="stylesheet" href=" {{ asset('backend') }}/lib/toastr/toastr.min.css">
    {{-- Sweetalert 2 --}}
    <link rel="stylesheet" href=" {{ asset('backend') }}/lib/sweetalert/sweetalert2.min.css">
    {{-- Summernote Text Editor --}}
    <link href=" {{ asset('backend') }}/lib/summernote/summernote-bs4.css" rel="stylesheet">
</head>

<body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><a href=" {{ route('frontend') }} " target="_blank"><i class="icon ion-android-star-outline"></i>ASLOOB BEDAA
        </a></div>
    @include('admin.layouts.leftbar')
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    @include('admin.layouts.header')
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    @include('admin.layouts.header-notification')
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL / Content Part ########## -->
    <div class="sl-mainpanel">

        @yield('content')

        <!-- START: sl-pagefooter -->
        @include('admin.layouts.footer')
        <!-- START: sl-pagefooter -->

    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL / Content Part ########## -->


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

    <script src=" {{ asset('backend') }}/lib/jquery/jquery.js"></script>
    <script src=" {{ asset('backend') }}/lib/popper.js/popper.js"></script>
    <script src=" {{ asset('backend') }}/lib/bootstrap/bootstrap.js"></script>
    <script src=" {{ asset('backend') }}/lib/jquery-ui/jquery-ui.js"></script>
    <script src=" {{ asset('backend') }}/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>

    @yield('scripts')



    {{-- ################## Summernote Text Editor ###################--}}
    <script src=" {{ asset('backend') }}/lib/summernote/summernote-bs4.min.js"></script>

    {{-- ################## Sweetalert 2 ###################--}}
    <script src=" {{ asset('backend') }}/lib/sweetalert/sweetalert2.all.min.js "></script>
    <script>
        $(document).on("click", "#delete", function (e) {
            e.preventDefault();
            var link = $(this).attr("href");

            Swal.fire({
                title: 'Are you sure to delete this data?',
                text: "Once deleted, You won't be able to revert this!",
                icon: 'question',
                dangerMode: true,
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, Delete it!'
            })
                .then((willDelete) => {
                    if (willDelete.isConfirmed) {
                        window.location.href = link;
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    } else if (
                        willDelete.dismiss === Swal.DismissReason.cancel
                    ) {
                        swalWithBootstrapButtons.fire(
                            'Cancelled',
                            'Your imaginary file is safe :)',
                            'error'
                        )
                    }
                });
        });
    </script>

    <script src=" {{ asset('backend') }}/lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
    <script src=" {{ asset('backend') }}/lib/d3/d3.js"></script>
    <script src=" {{ asset('backend') }}/lib/rickshaw/rickshaw.min.js"></script>
    <script src=" {{ asset('backend') }}/lib/chart.js/Chart.js"></script>
    <script src=" {{ asset('backend') }}/lib/Flot/jquery.flot.js"></script>
    <script src=" {{ asset('backend') }}/lib/Flot/jquery.flot.pie.js"></script>
    <script src=" {{ asset('backend') }}/lib/Flot/jquery.flot.resize.js"></script>
    <script src=" {{ asset('backend') }}/lib/flot-spline/jquery.flot.spline.js"></script>
    <script src=" {{ asset('backend') }}/js/starlight.js"></script>
    <script src=" {{ asset('backend') }}/js/ResizeSensor.js"></script>
    <script src=" {{ asset('backend') }}/js/dashboard.js"></script>
</body>

</html>
