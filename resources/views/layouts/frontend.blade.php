<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>{{$settings->site_name}}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">


    <!-- Font -->

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

    <!-- Stylesheets -->

    <link href="{{ asset('app/common-css/bootstrap.css') }}" rel="stylesheet">

    <link href="{{ asset('app/common-css/ionicons.css') }}" rel="stylesheet">

    <link href="{{ asset('app/common-css/swiper.css') }}" rel="stylesheet">


    <link href="{{ asset('app/single_post/css/styles.css') }}" rel="stylesheet">

    <link href="{{ asset('app/single_post/css/responsive.css') }}" rel="stylesheet">

    <link href="{{ asset('app/category/css/styles.css') }}" rel="stylesheet">

    <link href="{{ asset('app/category/css/responsive.css') }}" rel="stylesheet">

    <link href="{{ asset('app/all-categories/css/styles.css') }}" rel="stylesheet">

    <link href="{{ asset('app/all-categories/css/responsive.css') }}" rel="stylesheet">

</head>
<body >

@include('includes.header')


@yield('content')


@include('includes.footer')


    <!-- SCRIPTS -->

    <script src="{{ asset('app/common-js/jquery-3.1.1.min.js') }}"></script>

    <script src="{{ asset('app/common-js/tether.min.js') }}"></script>

    <script src="{{ asset('app/common-js/bootstrap.js') }}"></script>

    <script src="{{ asset('app/common-js/swiper.js') }}"></script>

    <script src="{{ asset('app/common-js/scripts.js') }}"></script>

</body>
</html>