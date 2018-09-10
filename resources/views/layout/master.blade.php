<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <title>Unique</title>
    <link rel="icon" href="favicon.png" type="front/image/png">
    <link href="{{ URL::asset('front/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('front/css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('front/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('front/css/animate.css')}}" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]>
    <script src="{{ URL::asset('front/js/respond-1.1.0.min.js')}}"></script>
    <script src="{{ URL::asset('front/js/html5shiv.js')}}"></script>
    <script src="{{ URL::asset('front/js/html5element.js')}}"></script>
    <![endif]-->

</head>
<body>

@include('layout.header_section.header')

@yield('main_content')

@include('layout.footer_section.footer')

<!--  Javascripts--------- -->
<script type="text/javascript" src="{{ URL::asset('front/')}}js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('front/')}}js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('front/')}}js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="{{ URL::asset('front/')}}js/jquery.nav.js"></script>
<script type="text/javascript" src="{{ URL::asset('front/')}}js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="{{ URL::asset('front/')}}js/jquery.isotope.js"></script>
<script type="text/javascript" src="{{ URL::asset('front/')}}js/wow.js"></script>
<script type="text/javascript" src="{{ URL::asset('front/')}}js/custom.js"></script>

</body>
</html>