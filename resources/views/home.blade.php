
@include('front-end.layouts.header')
        

<div class="main-home-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="home-content">
                            <h1 style="color: #fff;">here you will find every things about your car</h1>
                            <!-- <form><input class="form-control" placeholder="Search courses..." /> <button type="submit" class="btn btn-primary">Search</button></form> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="boxes-area">
            <div class="container">
                <div class="boxes-inner-content">
                    <div class="row">
                        @foreach($categories as $category)
                        <div class="col-lg-4 col-md-6">
                            <a href="/categoryProduct/{{$category->id}}"><div class="single-box">
                                <div class="box-content">
                                    <h3>{{$category->name}}</h3>
                                </div>
                            </div></a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section class="popular-courses-area ptb-100">
            <div class="top-divider"></div>
            <div class="container">
                <div class="section-title">
                    <h3>خدماتنا </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco .</p>
                </div>
                <div class="row">
                    @foreach($services as $service)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-courses-item">
                            <div class="courses-img"><img style="height: 200px;" src="{{asset ($service->icon)}}" alt="course" /></div>
                            <div class="courses-content">
                                <h3><a href="#">{{$service->name}}</a></h3>
                                <ul>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                </ul>
                            </div>
                            <div class="courses-content-bottom">
                                <h4><i class="icofont-ui-user"></i> 120 Students</h4>
                                <h4 class="price">$120</h4>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-lg-12 col-md-12">
                        <div class="view-all text-center">
                            <a href="/allServices" class="btn btn-primary">View All Services <i class="icofont-rounded-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="why-choose-us">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-12"><div class="image"></div></div>
                    <div class="col-lg-6 col-md-12">
                        <div class="why-choose ptb-100">
                            <h3>Why Choose Us</h3>
                            <div class="single-choose">
                                <div class="icon"><i class="icofont-book-alt"></i></div>
                                <div class="content">
                                    <h4>Popular Courses</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                </div>
                            </div>
                            <div class="single-choose">
                                <div class="icon"><i class="icofont-teacher"></i></div>
                                <div class="content">
                                    <h4>Qualified Teachers</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                </div>
                            </div>
                            <div class="single-choose mb-0">
                                <div class="icon"><i class="icofont-support"></i></div>
                                <div class="content">
                                    <h4>24/7 Online Support</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="teacher-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <h3>عملائنا</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco .</p>
                </div>
                <div class="row">
                    @foreach($providers as $provider)
                    <div class="col-lg-4 col-md-6">
                        <div class="teacher-box">
                            <img style="height: 200px;" src="{{asset('images/user.png')}}" alt="teacher" />
                            <div class="teacher-content">
                                <h3 class="title">{{$provider->first_name}} {{$provider->last_name}}</h3>
                                <span class="post">{{$provider->email}}</span>
                                <ul>
                                    <li>
                                        <a href="#"><i class="icofont-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icofont-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icofont-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icofont-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

@include('front-end.layouts.footer')