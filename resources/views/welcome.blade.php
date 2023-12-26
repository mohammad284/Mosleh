
@include('front-end.layouts.header')
        
 
        <!-- Start Page Title Area -->
        <div class="page-title">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <h3>Login</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->
        
        <!-- Start Login Area -->
        <section class="login-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <form id="login-form">
                            <div class="heading">Login</div>
                            <div class="left">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" placeholder="Username">
                                </div>
                                
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                            
                            <div class="right">
                                <div class="connect">Connect with</div>
                                <a href="#" class="facebook"><i class="icofont-facebook"></i> Facebook</a>
                                <a href="#" class="twitter"><i class="icofont-twitter"></i> Twitter</a>
                                <a href="#" class="google-plus"><i class="icofont-google-plus"></i> Google Plus</a>
                            </div>
                        </form>  
                    </div>
                </div>
            </div>
        </section>
        <!-- End Login Area -->

@include('front-end.layouts.footer')