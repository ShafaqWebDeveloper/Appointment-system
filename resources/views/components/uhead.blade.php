<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="csrf-token" content="{{csrf_token()}}">
    <!-- Title  -->
    <title>Medi &amp; Health </title>

    <!-- Favicon  -->
    <link rel="icon" href="{{asset('ufiles/img/core-img/favicon.ico')}}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('ufiles/css/core-style.css')}}">
    <link rel="stylesheet" href="{{asset('ufiles/style.css')}}">
    <link rel="stylesheet" href="{{asset('ufiles/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('ufiles/css/owl.carousel')}}">
<link rel="stylesheet" href="{{asset('ufiles/css/magnific-popup')}}">
<link rel="stylesheet" href="{{asset('ufiles/css/animate')}}">
<link rel="stylesheet" href="{{asset('ufiles/css/font-awesome.min')}}">
<link rel="stylesheet" href="{{asset('ufiles/css/themify-icons')}}">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="medilife-load"></div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <!-- Top Header Area -->
        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 h-100">
                        <div class="main-menu h-100">
                            <nav class="navbar h-100 navbar-expand-lg">
                                <!-- Logo Area  -->
                                <a class="navbar-brand" href="index.html"><img src="{{asset('ufiles/img/core-img/logo.png')}}" alt="Logo"></a>

                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#medilifeMenu" aria-controls="medilifeMenu" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                                <div class="collapse navbar-collapse" id="medilifeMenu">
                                    <!-- Menu Area -->
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="{{url('/')}}">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('/about')}}">About Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('/services')}}">Services</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="contact.html">Contact</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('/login')}}">Admin</a>
                                        </li>
                                    </ul>
                                    <!-- Appointment Button -->
                                    <a href="#" class="btn medilife-appoint-btn ml-30">For <span>emergencies</span> Click here</a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
