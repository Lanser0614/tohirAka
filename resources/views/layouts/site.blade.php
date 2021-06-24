<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Travelo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/slicknav.css')}}">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->

@include('layouts.menu')

@yield('content')

    
  <!-- Modal -->

    <!-- link that opens popup -->
<!--     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>

    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script> -->
    <!-- JS here -->
    <script src="{{asset('asset/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('asset/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('asset/js/popper.min.js')}}"></script>
    <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('asset/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('asset/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('asset/js/ajax-form.js')}}"></script>
    <script src="{{asset('asset/js/waypoints.min.js')}}"></script>
    <script src="{{asset('asset/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('asset/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('asset/js/scrollIt.js')}}"></script>
    <script src="{{asset('asset/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('asset/js/wow.min.js')}}"></script>
    <script src="{{asset('asset/js/nice-select.min.js')}}"></script>
    <script src="{{asset('asset/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{asset('asset/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('asset/js/plugins.js')}}"></script>
    <script src="{{asset('asset/js/gijgo.min.js')}}"></script>
    <script src="{{asset('asset/js/slick.min.js')}}"></script>
   

    
    <!--contact js-->
    <script src="{{asset('asset/js/contact.js')}}"></script>
    <script src="{{asset('asset/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('asset/js/jquery.form.js')}}"></script>
    <script src="{{asset('asset/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('asset/js/mail-script.js')}}"></script>


    <script src="{{asset('asset/js/main.js')}}"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });
    </script>
</body>
