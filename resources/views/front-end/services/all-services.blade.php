@include('front-end.layouts.header')
    <!-- Start Page Title Area -->
    <div class="page-title">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <h3>Services</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->
    
    <!-- Start Courses Area -->
    <section class="courses-area ptb-100">
        <div class="container">
            <div class="row">
                @foreach($services as $service)
                <div class="col-lg-4 col-md-6">
                    <div class="courses-item">
                        <div class="courses-img">
                            <a href="/serviceProviders/{{$service->id}}"><img style="height: 200px;" src="{{asset($service->icon)}}" alt="course"></a> 
                        </div>
                        
                        <div class="courses-content">
                            <h3><a href="/serviceProviders/{{$service->id}}">{{$service->name}}</a></h3>
                            
                            <p>{{$service->description}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Courses Area -->
@include('front-end.layouts.footer')