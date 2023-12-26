@include('front-end.layouts.header')
    <!-- Start Page Title Area -->
    <div class="page-title">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <h3>Product Details</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->
    <section class="blog-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="blog-details">
                        <div class="article-img">
                            <img style="height: 550px;" src="{{asset($details->image)}}" alt="blog-details">
                            <!-- <div class="date">20 <br> Dec</div> -->
                        </div>
                        
                        <div class="article-text">
                            <ul class="post-meta">
                                <li><i class="icofont-clock-time"></i> {{$details->created_at->format('Y.m.d')}}</li>
                                <li><i class="icofont-ui-user"></i> <a href="#">{{$details['user']->first_name}}</a></li>
                                <li><i class="icofont-folder-open"></i> <a href="#">{{$details['category']->name}}</a></li>
                                <!-- <li><i class="icofont-speech-comments"></i> <a href="#">03</a></li> -->
                            </ul>
                            
                            <h4 class="title">{{$details->name}}</h4>
                            <p>{{$details->description}}</p>

                            <div class="author-share">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="article-author">
                                            <div class="author-img">
                                                <img src="{{asset('images/user.png')}}" alt="client">
                                            </div>

                                            <div class="author-title">
                                                <h4>{{$details['user']->first_name}} {{$details['user']->last_name}}</h4>
                                                <span>{{$details['user']->service_id}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6">
                                        <ul class="social-share">
                                            <li><a href="#" data-bs-toggle="tooltip" data-placement="top" title="Share on Facebook"><i class="icofont-facebook"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" data-placement="top" title="Share on Twitter"><i class="icofont-twitter"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" data-placement="top" title="Share on Linkedin"><i class="icofont-linkedin"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" data-placement="top" title="Share on Instagram"><i class="icofont-instagram"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" data-placement="top" title="Share on Google Plus"><i class="icofont-google-plus"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" data-placement="top" title="Share on Vimeo"><i class="icofont-vimeo"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="post-controls-buttons">
                    </div>
                    <div class="post-comments">
                    <!-- <li><i class="icofont-speech-comments"></i> <a href="#">03</a></li> -->
                        <h3 class="title mt-0"><i style="    color: #f0c600;margin-right: 2px;" class="icofont-speech-comments"></i>Comments</h3>
                        @foreach($details['reviews'] as $review)
                        <div class="single-comment">
                            <div class="comment-img">
                                <img src="{{asset('images/user.png')}}" alt="client">
                            </div>
                            <div class="comment-content">
                                <h4>{{$review['user']->first_name}} {{$review['user']->last_name}}</h4>
                                <p>{{$review->comment}}</p>
                                <span>{{$review->created_at->format('Y.m.d')}}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                    <div class="leave-a-reply">
                        <h3 class="title mt-0">Leave a Comment</h3>
                        <form method="post" action="/addComent">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" value="{{Auth::user()->first_name}}" class="form-control" placeholder="Full Name" disabled>
                                        <input type="hidden" name="product_id" value="{{$details->id}}" class="form-control" placeholder="Full Name" >
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="email" value="{{Auth::user()->email}}" class="form-control" placeholder="E-Mail" disabled>
                                    </div>
                                </div>
                                
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="comment" name="comment" cols="30" rows="5" class="form-control" placeholder="Your Comment"></textarea>
                                    </div>
                                </div>
                                
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-12">
                    <div class="side-bar mb-0">
                        <!-- <div class="single-widget search-box">
                            <h3 class="title">Search</h3>
                            <form>
                                <input type="text" class="form-control" placeholder="Search...">
                                <button type="submit" class="btn btn-primary"><i class="icofont icofont-search"></i></button>
                            </form>
                        </div> -->
                        
                        <div class="single-widget recent-post">
                            <h3 class="title">More Products</h3>
                            @foreach($more_products as $product)
                            <div class="single-recent-post">
                                <div class="img">
                                    <a href="#"><img src="{{asset($product->image)}}" alt="blog"></a>
                                </div>
                                
                                <div class="content">
                                    <h4><a href="/productDetails/{{$product->id}}">{{$product->name}}</a></h4>
                                    
                                    <span>{{$product['user']->first_name}}</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                        <!-- <div class="single-widget categories-box">
                            <h3 class="title">Categories</h3>
                            
                            <ul>
                                <li><a href="#"><i class="icofont-double-right"></i> Analysis & Features</a></li>
                                <li><a href="#"><i class="icofont-double-right"></i> Video Reviews</a></li>
                                <li><a href="#"><i class="icofont-double-right"></i> Engineering Tech</a></li>
                                <li><a href="#"><i class="icofont-double-right"></i> Righteous Indignation</a></li>
                                <li><a href="#"><i class="icofont-double-right"></i> General Education</a></li>
                            </ul>
                        </div>
                        
                        <div class="single-widget tags-box">
                            <h3 class="title">Popular Tags</h3>
                            
                            <ul>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Travel</a></li>
                                <li><a href="#">Amazing</a></li>
                                <li><a href="#">Clean</a></li>
                                <li><a href="#">Read</a></li>
                                <li><a href="#">Study</a></li>
                                <li><a href="#">Class</a></li>
                                <li><a href="#">Courses</a></li>
                            </ul>
                        </div>
                        
                        <div class="single-widget archives-box mb-0">
                            <h3 class="title">Archives</h3>
                            
                            <ul>
                                <li><a href="#"><i class="icofont-double-right"></i> December 2021</a></li>
                                <li><a href="#"><i class="icofont-double-right"></i> November 2021</a></li>
                                <li><a href="#"><i class="icofont-double-right"></i> October 2021</a></li>
                                <li><a href="#"><i class="icofont-double-right"></i> August 2021</a></li>
                                <li><a href="#"><i class="icofont-double-right"></i> July 2021</a></li>
                                <li><a href="#"><i class="icofont-double-right"></i> June 2021</a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Details Area -->
@include('front-end.layouts.footer')