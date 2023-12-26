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
        <!-- Start Checkout Area -->
        <section class="checkout-area ptb-100">
            <div class="container">
                <form method="POST" enctype="multipart/form-data" action="/updateProduct/{{$product->id}}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="checkout-form">
                                <h3>Edit Product</h3>
                                
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Product Name*</label>
                                            <input type="text" name="name" value="{{$product->name}}" class="form-control @error('name') is-invalid @enderror" required>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Size</label>
                                            <input type="text" name="size" value="{{$product->size}}" class="form-control @error('size') is-invalid @enderror" required>
                                            @error('size')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="text" name="price" value="{{$product->price}}" class="form-control @error('price') is-invalid @enderror" required>
                                            @error('price')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Product Image</label>
                                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" required>
                                            @error('image')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>category*</label>
                                            <select class="form-control @error('category_id') is-invalid @enderror" required name="category_id" aria-label="Default select example">
                                                @foreach($categories as $cat)
                                                <option value="{{$cat->id}}" @if($product->category_id == $cat->id) selected @endif>{{$cat->name}}</option>
                                                @endforeach
                                            </select>
                                            @error('category_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>car type</label>
                                            <select class="form-control @error('car_id') is-invalid @enderror" required name="car_id" aria-label="Default select example">
                                                @foreach($cars as $car)
                                                <option value="{{$car->id}}" @if($product->car_id == $car->id) selected @endif>{{$car->type}}</option>
                                                @endforeach
                                            </select>
                                            @error('car_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea name="description" cols="30" rows="6" placeholder="Notes about your order, e.g. special notes for delivery..." class="form-control @error('description') is-invalid @enderror" required>{{$product->description}}</textarea>
                                            @error('description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- End Checkout Area -->

@include('front-end.layouts.footer')