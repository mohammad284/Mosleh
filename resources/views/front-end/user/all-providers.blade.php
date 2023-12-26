@include('front-end.layouts.header')
        <!-- Start Page Title Area -->
        <div class="page-title">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <h3>Providers</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->
        
        <!-- Start Courses Area -->
        <section class="courses-area ptb-100">
            <div class="container">
                <div class="row">
                    @foreach($providers as $provider)
                    <div class="col-lg-4 col-md-6">
                        <div class="courses-item">
                            <div class="courses-img">
                                <img src="{{asset('images/user.png')}}" alt="course">
                            </div>
                            
                            <div class="courses-content">
                                <h3><a href="#">{{$provider->first_name}} {{$provider->last_name}}</a></h3>
                                <p>{{$provider->email}}</p>
                                <br>
                                <div class="courses-content-bottom">
                                    <h4 class="price"> {{$provider->phone}}</h4>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End Courses Area -->
@include('front-end.layouts.footer')