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

        <title>EduField - Education & Online Courses HTML Template</title>
        
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
    </head>
    <body>
        <!-- Start Preloader Area -->
        <!-- <div class="preloader-area">
            <div class="loader">
                <div class="dots">
                    <i class="dots-item dots-item-move-down"></i>
                    <i class="dots-item dots-item-move-left"></i>
                    <i class="dots-item dots-item-move-left"></i>
                    <i class="dots-item dots-item-move-left"></i>
                    <i class="dots-item dots-item-move-left"></i>
                    <i class="dots-item dots-item-move-down"></i>
                    <i class="dots-item dots-item-move-right"></i>
                    <i class="dots-item dots-item-move-right"></i>
                    <i class="dots-item dots-item-move-down"></i>
                    <i class="dots-item dots-item-move-up"></i>
                    <i class="dots-item dots-item-move-down"></i>
                    <i class="dots-item dots-item-move-up"></i>

                    <i class="dots-item"></i>

                    <i class="dots-item dots-item-move-down"></i>
                    <i class="dots-item dots-item-move-up"></i>
                    <i class="dots-item dots-item-move-down"></i>
                    <i class="dots-item dots-item-move-up"></i>
                    <i class="dots-item dots-item-move-left"></i>
                    <i class="dots-item dots-item-move-left"></i>
                    <i class="dots-item dots-item-move-up"></i>
                    <i class="dots-item dots-item-move-right"></i>
                    <i class="dots-item dots-item-move-right"></i>
                    <i class="dots-item dots-item-move-right"></i>
                    <i class="dots-item dots-item-move-right"></i>
                    <i class="dots-item dots-item-move-up"></i>
                </div>
            </div>
        </div> -->
        <!-- End Preloader Area -->
       
        <!-- Start Main Menu Area -->
        <div class="main-header-area navbar-area header-sticky">
            <div class="container">
				<div class="classy-nav-container breakpoint-off">
					<!-- Classy Menu -->
					<nav class="classy-navbar justify-content-between" id="EduStudyNav">

						<!-- Logo -->
						<a class="nav-brand" href="index-default.html"><img src="assets/img/logo.png" alt="logo"></a>

						<!-- Navbar Toggler -->
						<div class="classy-navbar-toggler">
							<span class="navbarToggler"><span></span><span></span><span></span></span>
						</div>

						<!-- Menu -->
                        @if(Auth::user())
						<div class="classy-menu">

							<!-- close btn -->
							<div class="classycloseIcon">
								<div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
							</div>

							<!-- Nav Start -->
							<div class="classynav">
								<ul>
									<li><a href="#">Home</a>
										<ul class="dropdown">
                                            <li><a href="index-default.html">Home Demo One</a></li>
                                            <li><a href="index-two.html">Home Demo Two</a></li>
                                            <li><a href="index-three.html">Home Demo Three</a></li>
                                            <li><a href="index-four.html">Home Demo Four</a></li>
										</ul>
									</li>
                                   
                                    <li><a href="#">About Us</a>
                                        <ul class="dropdown">
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="admission.html">Admission</a></li>
                                            <li><a href="teacher-style-one.html">Teacher Style One</a></li>
                                            <li><a href="teacher-style-two.html">Teacher Style Two</a></li>
                                            <li><a href="single-teacher.html">Teacher Details</a></li>
                                        </ul>
                                    </li>
                                   
                                    <li><a href="#">Courses</a>
                                        <ul class="dropdown">
                                            <li><a href="courses-style-one.html">Courses Style One</a></li>
                                            <li><a href="courses-style-two.html">Courses Style Two</a></li>
                                            <li><a href="single-courses.html">Courses Details</a></li>
                                        </ul>
                                    </li>
                                    
                                    <li><a href="#">Events</a>
                                        <ul class="dropdown">
                                            <li><a href="event-style-one.html">Events Style One</a></li>
                                            <li><a href="event-style-two.html">Events Style Two</a></li>
                                            <li><a href="single-events.html">Events Details</a></li>
                                        </ul>
                                    </li>
                                    
									<li><a href="#" class="active">Pages</a>
										<ul class="dropdown">
											<li><a href="about.html">About Us</a></li>
											<li><a href="#">Blog</a>
												<ul class="dropdown">
													<li><a href="blog-style-one.html">Blog Style One</a></li>
													<li><a href="blog-style-two.html">Blog Style Two</a></li>
													<li><a href="blog-style-three.html">Blog Style Three</a></li>
													<li><a href="single-blog.html">Blog Details</a></li>
												</ul>
											</li>
											<li><a href="#">Shop</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop-style-one.html">Shop Style One</a></li>
                                                    <li><a href="shop-style-two.html">Shop Style Two</a></li>
                                                    <li><a href="single-shop.html">Shop Details</a></li>
                                                    <li><a href="cart.html">Cart</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Courses</a>
                                                <ul class="dropdown">
                                                    <li><a href="courses-style-one.html">Courses Style One</a></li>
                                                    <li><a href="courses-style-two.html">Courses Style Two</a></li>
                                                    <li><a href="single-courses.html">Courses Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Teacher</a>
                                                <ul class="dropdown">
                                                    <li><a href="teacher-style-one.html">Teacher Style One</a></li>
													<li><a href="teacher-style-two.html">Teacher Style Two</a></li>
													<li><a href="single-teacher.html">Teacher Details</a></li>
                                                </ul>
                                            </li>
											<li><a href="#">Events</a>
												<ul class="dropdown">
													<li><a href="event-style-one.html">Events Style One</a></li>
                                                    <li><a href="event-style-two.html">Events Style Two</a></li>
                                                    <li><a href="single-events.html">Events Details</a></li>
												</ul>
											</li>
                                            <li><a href="#">Contact</a>
												<ul class="dropdown">
													<li><a href="contact-style-one.html">Contact Style One</a></li>
                                                    <li><a href="contact-style-two.html">Contact Style Two</a></li>
												</ul>
											</li>
                                            <li><a href="admission.html">Admission</a></li>
											<li><a href="error.html">404 Error</a></li>
											<li><a href="faq.html">FAQ</a></li>
											<li class="active"><a href="login.html">Login</a></li>
											<li><a href="register.html">Register</a></li>
										</ul>
									</li>
									
									<li><a href="#">Blog</a>
										<ul class="dropdown">
											<li><a href="blog-style-one.html">Blog Style One</a></li>
                                            <li><a href="blog-style-two.html">Blog Style Two</a></li>
                                            <li><a href="blog-style-three.html">Blog Style Three</a></li>
                                            <li><a href="single-blog.html">Blog Details</a></li>
										</ul>
									</li>
									
									<li><a href="#">Shop</a>
										<ul class="dropdown">
											<li><a href="shop-style-one.html">Shop Style One</a></li>
                                            <li><a href="shop-style-two.html">Shop Style Two</a></li>
                                            <li><a href="single-shop.html">Shop Details</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
										</ul>
									</li>
									
									<li><a href="#">Contact</a>
										<ul class="dropdown">
											<li><a href="contact-style-one.html">Contact Style One</a></li>
                                            <li><a href="contact-style-two.html">Contact Style Two</a></li>
										</ul>
									</li>
									
									<li><a href="#search" class="search-btn"><i class="icofont-search-2"></i></a></li>
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
        <div id="search-area">
            <button type="button" class="close">×</button>
            <form>
                <input type="search" value="" placeholder="Search Kewword(s)">
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
        <!-- End Search Popup Area -->
       