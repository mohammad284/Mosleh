<?php
$categories = App\Models\Category::withcount('products')->get();
$services = App\Models\Service::withcount('users')->get();
$products = App\Models\Product::all()->take(1);
?>

<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('front-end/assets/css/bootstrap.min.css') }}">
        <!-- IcoFont Min CSS -->
        <link rel="stylesheet" href="{{ asset('front-end/assets/css/icofont.min.css') }}">
		<!-- Classy Nav CSS -->
		<link rel="stylesheet" href="{{ asset('front-end/assets/css/classy-nav.min.css') }}">
		<!-- Animate CSS -->
		<link rel="stylesheet" href="{{ asset('front-end/assets/css/animate.css') }}">
		<!-- Owl Carousel CSS -->
		<link rel="stylesheet" href="{{ asset('front-end/assets/css/owl.carousel.css') }}">
		<!-- Magnific Popup CSS -->
		<link rel="stylesheet" href="{{ asset('front-end/assets/css/magnific-popup.css') }}">
		<!-- Owl Theme Default CSS -->
		<link rel="stylesheet" href="{{ asset('front-end/assets/css/owl.theme.default.min.css') }}">
		<!-- Style CSS -->
        <link rel="stylesheet" href="{{ asset('front-end/assets/css/style.css') }}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{ asset('front-end/assets/css/responsive.css') }}">

        <title>مصلح</title>
        
        <link rel="icon" type="image/png" href="/front-end/assets/img/logo.jpg">
    </head>
    <body>
        <!-- Start Main Menu Area -->
        <div class="main-header-area navbar-area header-sticky">
            <div class="container">
				<div class="classy-nav-container breakpoint-off">
					<!-- Classy Menu -->
					<nav class="classy-navbar justify-content-between" id="EduStudyNav">

						<!-- Logo -->
						<a class="nav-brand" href="index-default.html"><img style="width: 60px;" src="/front-end/assets/img/logo.jpg" alt="logo"></a>

						<!-- Navbar Toggler -->
						<div class="classy-navbar-toggler">
							<span class="navbarToggler"><span></span><span></span><span></span></span>
						</div>

						<!-- Menu -->
                        @if(Auth::user())
						<div class="classy-menu">

							<!-- Nav Start -->
							<div class="classynav">
								<ul>
									<li><a href="/">Home</a>
									</li>
									<li><a href="/profile">Profile</a>
									</li>
                                    <li><a href="#">Categories</a>
										<ul class="dropdown">
                                            @foreach($categories as $category)
                                            <li><a href="/categoryProduct/{{$category->id}}">{{$category->name}}({{$category->products_count}})</a></li>
                                            @endforeach
										</ul>
									</li>
                                    <li><a href="#">Services</a>
										<ul class="dropdown">
                                            @foreach($services as $service)
                                            <li><a href="/serviceProviders/{{$service->id}}">{{$service->name}}({{$service->users_count}})</a></li>
                                            @endforeach
										</ul>
									</li>
									<!-- <li><a href="#">Products</a>
										<ul class="dropdown">
                                            @foreach($products as $product)
                                            <li><a href="/productDetails/{{$product->id}}">{{$product->name}}</a></li>
                                            @endforeach
										</ul>
									</li> -->
									<li><a href="/aboutUs">About Us</a></li>
									@if(Auth::user()->status == 1 & Auth::user()->type == 'provider')
									<li><a href="/dashboard">dashboard</a></li>@endif
									<li><a href="/logout">logout</a></li>
									</li>
									<li ><p style="color: #f0c600;">Hi {{Auth::user()->first_name}}!</p></li>
								</ul>
							</div>
							<!-- Nav End -->
						</div>
                        @else
                        <div class="classy-menu">

							<!-- close btn -->
							<div class="classycloseIcon">
								<div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
							</div>

							<!-- Nav Start -->
							<div class="classynav">
								<ul>
									<li><a href="/signUp">Sign Up</a>
									</li>
								</ul>
							</div>
							<!-- Nav End -->
						</div>
                        @endif
					</nav>
				</div>
			</div>
        </div>
        <!-- End Main Menu Area -->
        
        <!-- Start Search Popup Area -->
        <!-- <div id="search-area">
            <button type="button" class="close">×</button>
            <form>
                <input type="search" value="" placeholder="Search Kewword(s)">
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div> -->
		@if(Auth::user()->status == 0 & Auth::user()->type == 'provider')
		    <!-- Start Page Title Area -->
				<h3 style="background-color: #d51e1e;text-align: center;">email not accepy</h3>
		
		@endif
        <!-- End Search Popup Area -->
       