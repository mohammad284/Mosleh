@include('front-end.layout.header')
<!-- Start Page Title Area -->
<!-- <div class="page-title">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <h3>Login</h3>
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
            <div class="register-content">
                <div class="heading">Register</div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Full Name">
                            </div>
                        </div>
                        
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email Address">
                            </div>
                        </div>
                            
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                        </div>
                        
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Repeat Password">
                            </div>
                        </div>
                        
                        <!-- <div class="col-lg-12 col-md-12">
                            <button class="btn btn-primary" type="submit">Sign Up</button>
                        </div> -->
                    </div>
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                </form>
                <h4>Are you a member? <a href="/">Login Now!</a></h4>
            </div>
            </div>
        </div>
    </div>
</section>
<!-- End Login Area -->
        
@include('front-end.layout.footer')