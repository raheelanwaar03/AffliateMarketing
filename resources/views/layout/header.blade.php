<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- SITE META -->
    <title>YourCoupon | Responsive Coupon Code Site Templates</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/images/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/images/apple-touch-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/images/apple-touch-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/images/apple-touch-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/images/apple-touch-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/images/apple-touch-icon-152x152.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">

    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/css/skins/skin1.css') }}" title="skin1"
        media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/css/skins/skin2.css') }}" title="skin2"
        media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/css/skins/skin3.css') }}" title="skin3"
        media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/css/skins/skin4.css') }}" title="skin4"
        media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/css/skins/skin5.css') }}" title="skin5"
        media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/css/skins/skin6.css') }}" title="skin6"
        media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/css/skins/skin7.css') }}" title="skin7"
        media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/css/skins/skin8.css') }}" title="skin8"
        media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/css/skins/skin9.css') }}" title="skin9"
        media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/css/skins/skin10.css') }}"
        title="skin10" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/css/skins/skin11.css') }}"
        title="skin11" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/css/skins/skin12.css') }}"
        title="skin12" media="all" />
    <link href="{{ asset('assets/switcher/switcher.css') }}" rel="stylesheet">

</head>

<body>

    {{-- <x-alert /> --}}

    <div id="wrapper">
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 center-xs">
                        <p class="topbar-text">
                            <strong><i class="fa fa-phone"></i></strong>{{ env('APP_NUM') }} &nbsp;&nbsp;
                            <strong><i class="fa fa-envelope-o"></i></strong> <a
                                href="mailto:info@yoursite.com">info@yoursite.com</a>
                        </p>
                    </div><!-- end col -->

                    <div class="col-md-6 col-sm-6 center-xs text-right">
                        <div class="topbar-links">
                            <ul class="list-inline">
                                <li><a href="user-favorites.html"><i class="fa fa-heart-o"></i> &nbsp;Favorites</a>
                                </li>
                                <li><a href="user-saved.html"><i class="fa fa-star-o"></i> &nbsp;Saved</a></li>
                                <li><a href="user-submit.html"><i class="fa fa-bullhorn"></i> &nbsp;Submit a
                                        Coupon</a></li>
                            </ul>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end topbar -->

        <div class="header">
            <div class="logo-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-6">
                            <a class="navbar-brand" href="{{ route('LandingPage') }}">YourCoupon <small>Discount Coupon
                                    Codes</small></a>
                        </div><!-- end col -->

                        <div class="col-md-2 col-sm-3 demo-1 hidden-xs">
                            <div id="dl-menu2" class="dl-menuwrapper">
                                <button class="dl-trigger"><i class="fa fa-share-alt"></i></button>
                                <p>Follow us</p>
                                <ul class="dl-menu">
                                    <li><a href="#"><i class="fa fa-facebook-square"></i> Facebook</a></li>
                                    <li><a href="#"><i class="fa fa-twitter-square"></i> Twitter</a></li>
                                    <li><a href="#"><i class="fa fa-youtube-square"></i> Youtube</a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square"></i> Linkedin</a></li>
                                    <li><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>
                                </ul>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end rpw -->
                </div><!-- end container -->
            </div>

            <div class="menu-wrapper">
                <div class="container">
                    <div class="hovermenu ttmenu menu-color">
                        <div class="navbar navbar-default" role="navigation">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div><!-- end navbar-header -->

                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <li><a class="active" href="{{ route('LandingPage') }}" title="Contact Us">Home</a>
                                    </li>
                                    <li><a href="{{ route('LandingPage.ContactUs') }}" title="Contact Us">Contact Us</a>
                                    </li>
                                    <li class="dropdown hasmenu">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories
                                            <span class="fa fa-angle-down"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            {{-- @foreach ($categorys as $category)
                                            <li><a href="{{ route('User.All.Category') }}">All Categories</a></li>
                                            <li><a href="{{ route('User.See.Category/',$category->category_slug) }}">{{ $category->category_name }}</a></li>
                                            @endforeach --}}
                                        </ul>
                                    </li>
                                    <li class="dropdown hasmenu">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Coupon Deals
                                            <span class="fa fa-angle-down"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            {{-- @foreach ($coupons as $coupon)
                                            <li><a href="{{ route('User.All.Coupon.Deals') }}">All Coupon Deals</a></li>
                                            <li><a href="{{ route('User.Coupon.Details/',$coupon->coupon_slug) }}">{{ $coupon->coupon_name }}</a></li>
                                            @endforeach --}}
                                        </ul>
                                    </li>
                                    </a></li>
                                    <li class="dropdown hasmenu">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Stores
                                            <span class="fa fa-angle-down"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            {{-- @fosch --}}
                                        </ul>
                                    </li>
                                    {{-- @if (auth()->user())
                                        <li><a href="{{ route('User.Dashboard') }}" title="">Dashboard</a></li> --}}
                                </ul>
                            {{-- @else
                                <li><a href="{{ route('login') }}" title="">Login</a></li>
                                <li><a href="{{ route('register') }}" title="">Register</a></li>
                                @endif --}}

                            </div>
                            <!--/.nav-collapse -->
                        </div><!-- end navbar navbar-default clearfix -->
                    </div><!-- end menu 1 -->
                </div><!-- end container -->
            </div><!-- / menu-wrapper -->
        </div><!-- end header -->

        <div class="section wb">
            <div class="container">
                <div class="section-title m30 text-center">
                    <h1>4.000+ Stores Publishes 20.000+ <span class="element"></span></h1>
                </div><!-- end title -->

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <form class="well">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                    <input id="typeahead" type="text" class="form-control"
                                        placeholder="Search for coupons..." autocomplete="off"
                                        data-provide="typeahead">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
