@php use Mcamara\LaravelLocalization\Facades\LaravelLocalization; @endphp
    <!doctype html>
<html class="no-js" lang="ar">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>
        @yield('title')
    </title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset("assets/images/logo.webp") }}" type="image/webp">


    <!-- CSS
    ============================================ -->

    <!--===== Vendor CSS (Bootstrap & Icon Font) =====-->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/default.css') }}">


    <!--===== Plugins CSS (All Plugins Files) =====-->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup.css') }}">

    <!--====== Main Style CSS ======-->
    <link rel="stylesheet"
          href="{{ asset('assets')}}/css{{ LaravelLocalization::getCurrentLocaleDirection() == 'rtl' ?'-rtl' :'' }}/style.css">
    <link rel="stylesheet"
          href="{{ asset('assets') }}/css{{ LaravelLocalization::getCurrentLocaleDirection() == 'rtl' ?'-rtl' : ''  }}/style.min.css">

    @yield('css')

</head>

<body style="text-align: right; ">
