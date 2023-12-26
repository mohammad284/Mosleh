
<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset ('front-end/assets/css/bootstrap.min.css')}}">
        <!-- IcoFont Min CSS -->
        <link rel="stylesheet" href="{{asset ('front-end/assets/css/icofont.min.css')}}">
		<!-- Classy Nav CSS -->
		<link rel="stylesheet" href="{{asset ('front-end/assets/css/classy-nav.min.css')}}">
		<!-- Animate CSS -->
		<link rel="stylesheet" href="{{asset ('front-end/assets/css/animate.css')}}">
		<!-- Owl Carousel CSS -->
		<link rel="stylesheet" href="{{asset ('front-end/assets/css/owl.carousel.css')}}">
		<!-- Magnific Popup CSS -->
		<link rel="stylesheet" href="{{asset ('front-end/assets/css/magnific-popup.css')}}">
		<!-- Owl Theme Default CSS -->
		<link rel="stylesheet" href="{{asset ('front-end/assets/css/owl.theme.default.min.css')}}">
		<!-- Style CSS -->
        <link rel="stylesheet" href="{{asset ('front-end/assets/css/style.css')}}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{asset ('front-end/assets/css/responsive.css')}}">

        <title>EduField - Education & Online Courses HTML Template</title>
        
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
        <style>
            .user-type {
                margin: 10px;
                position: relative;
                list-style: none;
                display: inline-block;
                text-align: center;
                width: 75px;
                border-radius: 5px;
                padding: 10px;
                background-color: #ddd;
            }
        </style>
    </head>
    <body>
       
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
						<div class="classy-menu">

							<!-- close btn -->
							<div class="classycloseIcon">
								<div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
							</div>

							<!-- Nav Start -->
							<div class="classynav">
								<ul>
									<li><a href="/login">Log In</a>
									</li>
									
									<li><a href="#search" class="search-btn"><i class="icofont-search-2"></i></a></li>
								</ul>
							</div>
							<!-- Nav End -->
						</div>
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
        <!-- End Search Popup Area -->
        
        <!-- Start Page Title Area -->
        <!-- <div class="page-title">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <h3>Sign Up</h3>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- End Page Title Area -->
        
        <!-- Start Login Area -->
        <section class="login-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <form id="login-form" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="heading">Sing Up</div>
                            <div class="left">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label>Password Confirmation</label>
                                    <input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required >
                                    @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <ul id="tabs">
                                        <li class="user-type" id="tab_1">provider</li>
                                        <input type="radio" name="type" value="provider" >
                                        <li class="user-type" id="tab_2">user</li>
                                        <input type="radio" name="type" value="user" checked>
                                    </ul>
                                </div>
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>  
                    </div>
                </div>
            </div>
        </section>
        <!-- End Login Area -->
        
        <!-- Start Footer Area -->
        <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-footer">
                            <h3>About EduField</h3>
                            
                            <ul class="footer-contact-info">
                                <li>2750 Quadra Street , Park Area, Victoria, Canada.</li>
                                <li><a href="#">+4 (05) 345 6789</a></li>
                                <li><a href="#">+4 (15) 345 6789</a></li>
                                <li><a href="#">contact@EduField.org</a></li>
                            </ul>
                            
                            <ul class="social">
                                <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                                <li><a href="#"><i class="icofont-google-plus"></i></a></li>
                                <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="single-footer">
                            <h3>Courses</h3>
                            
                            <ul class="list">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Notice</a></li>
                                <li><a href="#">Research</a></li>
                                <li><a href="#">Scholarship</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="single-footer">
                            <h3>Research</h3>
                            
                            <ul class="list">
                                <li><a href="#">Forums</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Login</a></li>
                                <li><a href="#">Documenation</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="single-footer">
                            <h3>Support</h3>
                            
                            <ul class="list">
                                <li><a href="#">Language Packs</a></li>
                                <li><a href="#">Relase Status</a></li>
                                <li><a href="#">Events</a></li>
                                <li><a href="#">Become A Teacher</a></li>
                                <li><a href="#">Courses</a></li>
                                <li><a href="#">LearnPress</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="copyright-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-7">
                            <p>Copyright <i class="icofont-copyright"></i> 2021 EduField Template by EnvyTheme. All rights reserved</p>
                        </div>
                        
                        <div class="col-lg-5 col-md-5">
                            <ul>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer Area -->
        
        <!-- Back to top -->
        <a class="scrolltop" href="#top"><i class="icofont-hand-drawn-up"></i></a>
        <!-- End Back to top -->
        
        <!-- jQuery Min JS -->
        <script src="{{asset ('front-end/assets/js/jquery.min.js') }}"></script>
        <!-- Prpper JS -->
        <script src="{{asset ('front-end/assets/js/popper.min.js') }}"></script>
        <!-- Bootstrap Min JS -->
        <script src="{{asset ('front-end/assets/js/bootstrap.min.js') }}"></script>
        <!-- Classy Nav Min Js -->
        <script src="{{asset ('front-end/assets/js/classy-nav.min.js') }}"></script>
        <!-- Owl Carousel Min Js -->
        <script src="{{asset ('front-end/assets/js/owl.carousel.min.js') }}"></script>
        <!-- Magnific Popup JS -->
        <script src="{{asset ('front-end/assets/js/jquery.magnific-popup.min.js') }}"></script>
        <!-- CounterUp JS -->
        <script src="{{asset ('front-end/assets/js/jquery.counterup.min.js') }}"></script>
        <!-- Waypoints JS -->
        <script src="{{asset ('front-end/assets/js/waypoints.min.js') }}"></script>
        <!-- Form Validator Min JS -->
        <script src="{{asset ('front-end/assets/js/form-validator.min.js') }}"></script>
        <!-- Contact Form Min JS -->
        <script src="{{asset ('front-end/assets/js/contact-form-script.js') }}"></script>
        <!-- Main JS -->
        <!-- <script src="{{asset ('front-end/assets/js/main.js') }}"></script> -->
    </body>
</html>