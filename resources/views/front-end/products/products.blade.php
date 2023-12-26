@include('front-end.layouts.header')
    <!-- Start Page Title Area -->
    <div class="page-title">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <h3>Products</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->
    
    <!-- Start Courses Area -->
    <section class="courses-area ptb-100">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                <div class="col-lg-4 col-md-6">
                    <div class="courses-item">
                        <div class="courses-img">
                            <img style="height: 200px;" src="{{asset($product->image)}}" alt="course">
                        </div>
                        
                        <div class="courses-content">
                            <h3><a href="/productDetails/{{$product->id}}">{{$product->name}}</a></h3>
                            <ul>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><span>(15 reviews)</span></li>
                            </ul>
                            
                            <p>{{$product->description}}</p>
                        </div>
                        
                        <div class="courses-content-bottom">
                            <h4 class="price"> {{$product->price}}</h4>
                            <h4><a href="/productDetails/{{$product->id}}" class="btn btn-primary">Read More</a></h4>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Courses Area -->
@include('front-end.layouts.footer')