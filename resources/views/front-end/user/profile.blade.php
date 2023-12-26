
@include('front-end.layouts.header')
    <!-- Start Page Title Area -->
    <div class="page-title">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <h3>Profile</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->
    <!-- Start Checkout Area -->
    <section class="checkout-area ptb-100">
        <div class="container">
            <form method="POST" action="/updateProfile"> 
                @csrf
                <div class="row">
                    <div class="col-lg-12 col-md-12" style="width:80%;">
                        <div class="checkout-form">
                            <h3>Personal Information</h3>
                            
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>First Name*</label>
                                        <input type="text" name="first_name" value="{{Auth::user()->first_name}}" class="form-control @error('first_name') is-invalid @enderror" required>
                                        @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Last Name*</label>
                                        <input type="text" name="last_name" value="{{Auth::user()->last_name}}" class="form-control @error('last_name') is-invalid @enderror" required>
                                        @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Email*</label>
                                        <input type="email" name="email" value="{{Auth::user()->email}}" class="form-control  @error('email') is-invalid @enderror" required>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Phone*</label>
                                        <input type="text" name="phone" value="{{Auth::user()->phone}}" class="form-control @error('phone') is-invalid @enderror" required>
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if(Auth::user()->type == 'provider')
                        <div class="checkout-form">
                            <h3>Company Information</h3>
                            
                            <div class="row">
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label>company Name</label>
                                        <input type="text" name="company_name" value="{{Auth::user()->company_name}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Addreess</label>
                                        <input type="text" name="address" value="{{Auth::user()->address}}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Servies*</label>
                                    <select class="form-select" name="service_id" aria-label="Default select example">
                                        @if(Auth::user()->service_id == 0)
                                        <option>Select Your service</option>
                                        @else
                                        <option  value="{{$user['service']->id}}">{{$user['service']->name}}</option>
                                        @endif
                                        @foreach($servies as $serv)
                                        <option value="{{$serv->id}}">{{$serv->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Bio</label>
                                        <textarea name="bio" cols="30" rows="6" placeholder="Notes about your order, e.g. special notes for delivery..." class="form-control">{{Auth::user()->bio}}</textarea>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        <!-- <div class="shipping-details">
                            <h3>Shipping Details</h3>
                            
                            <div class="form-check">
                                <input type="checkbox">
                                <label>Ship to a different address</label>
                            </div>
                            <div class="form-group mb-0">
                                <label>Order Notes</label>
                                <textarea name="message" cols="30" rows="6" placeholder="Notes about your order, e.g. special notes for delivery..." class="form-control"></textarea>
                            </div>
                        </div> -->
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </section>
    <!-- End Checkout Area -->
@include('front-end.layouts.footer')