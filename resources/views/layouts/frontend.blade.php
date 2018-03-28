<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>{{$settings->site_name}} | {{$title}}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">


    <!-- Font -->

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

    <!-- Stylesheets -->

    <link href="{{ asset('app/common-css/bootstrap.css') }}" rel="stylesheet">

    <link href="{{ asset('app/common-css/ionicons.css') }}" rel="stylesheet">


    <link href="{{ asset('app/single_post/css/styles.css') }}" rel="stylesheet">

    <link href="{{ asset('app/single_post/css/responsive.css') }}" rel="stylesheet">

<!-- <style>
    .dropbtn {
        background-color: #4CAF50;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {background-color: #ddd}

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: #3e8e41;
    }
</style> -->

</head>
<body >

@include('includes.header')


@yield('content')






 @include('includes.footer')


    <!-- SCIPTS -->

    <script src="{{ asset('app/common-js/jquery-3.1.1.min.js') }}"></script>

    <script src="{{ asset('app/common-js/tether.min.js') }}"></script>

    <script src="{{ asset('app/common-js/bootstrap.js') }}"></script>

    <script src="{{ asset('app/common-js/scripts.js') }}"></script>

</body>
</html>