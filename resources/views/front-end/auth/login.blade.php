@include('front-end.layout.header')

<!-- Start Login Area -->
<section class="login-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
            <div class="register-content">
                <div class="heading">Login</div>
                <form method="POST" action="{{ route('login') }}">
                @csrf
                    <div class="left" >
                        <div class="form-group">
                            <label>Useremail</label>
                            <input type="text" name="email" class="form-control" placeholder="email">
                        </div>
                        
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
                <h4>Are you a member? <a href="/signUp">Sign Up Now!</a></h4>
            </div>
            </div>
        </div>
    </div>
</section>
<!-- End Login Area -->
        
@include('front-end.layout.footer')