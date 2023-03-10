{{-- @extends('layouts.app')
@section('content') --}}

{{-- @endsection --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Imam Form Login</title>
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
      <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="codedthemes" />
      <!-- Favicon icon -->

      <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
      <!-- Google font-->     
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="{{URL::to('assets/css/bootstrap/css/bootstrap.min.css')}}">
      <!-- waves.css -->
      <link rel="stylesheet" href="{{URL::to('assets/pages/waves/css/waves.min.css')}}" type="text/css" media="all">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="{{URL::to('assets/icon/themify-icons/themify-icons.css')}}">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="{{URL::to('assets/icon/icofont/css/icofont.css')}}">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="{{URL::to('assets/icon/font-awesome/css/font-awesome.min.css')}}">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="{{URL::to('assets/css/style.css')}}">
  </head>

  <body themebg-pattern="theme1">
  <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
	@yield('content')

    <!-- Warning Section Starts -->
	<!-- Warning Section Ends -->
	<!-- Required Jquery -->
    <script type="text/javascript" src="{{URL::to('assets/js/jquery/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{URL::to('assets/js/jquery-ui/jquery-ui.min.js')}}"></script>
	<script type="text/javascript" src="{{URL::to('assets/js/popper.js/popper.min.js')}}"></script>
	<script type="text/javascript" src="{{URL::to('assets/js/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- waves js -->
    <script src="{{URL::to('assets/pages/waves/js/waves.min.js')}}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{URL::to('assets/js/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
    <!-- modernizr js -->
	<script type="text/javascript" src="{{URL::to('assets/js/SmoothScroll.js')}}"></script>
	<script src="{{URL::to('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="{{URL::to('bower_components/i18next/js/i18next.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('bower_components/jquery-i18next/js/jquery-i18next.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('assets/js/common-pages.js')}}"></script>

</body>
</html>