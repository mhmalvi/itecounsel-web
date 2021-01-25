<!-- Bootstrap  -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/stylesheets/bootstrap.css')}}" >

{{-- Font-awesome --}}
<link rel="stylesheet" type="text/css" href="{{asset('assets/stylesheets/font-awesome.min.css')}}" >

<!-- Theme Style -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/stylesheets/style.css')}}">

{{-- toastr --}}
<link rel="stylesheet" type="text/css" href="{{asset('assets/stylesheets/toastr.min.css')}}">

<!-- Responsive -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/stylesheets/responsive.css')}}">

<!-- Colors -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/stylesheets/colors/color1.css')}}" id="colors">

<!-- Animation Style -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/stylesheets/animate.css')}}">

<!-- Favicon and touch icons  -->
<link href="{{asset('assets/icon/apple-touch-icon-48-precomposed.png')}}" rel="apple-touch-icon-precomposed" sizes="48x48">
<link href="{{asset('assets/icon/apple-touch-icon-32-precomposed.png')}}" rel="apple-touch-icon-precomposed">
<link href="{{asset('assets/icon/favicon.png')}}" rel="shortcut icon">

<!--[if lt IE 9]>
<script src="javascript/html5shiv.js"></script>
<script src="javascript/respond.min.js"></script>
<![endif]-->

{{-- aditional styles --}}
@stack('styles')