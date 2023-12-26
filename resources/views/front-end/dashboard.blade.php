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
                <form method="POST" enctype="multipart/form-data" action="/addProduct">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="checkout-form">
                                <h3>Add Product</h3>
                                
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Product Name*</label>
                                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" required>
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
                                            <input type="text" name="size"  class="form-control @error('size') is-invalid @enderror" required>
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
                                            <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" required>
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
                                                <option value="{{$cat->id}}">{{$cat->name}}</option>
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
                                                <option value="{{$car->id}}">{{$car->type}}</option>
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
                                            <textarea name="description" cols="30" rows="6" placeholder="Notes about your order, e.g. special notes for delivery..." class="form-control @error('car_id') is-invalid @enderror" required></textarea>
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
                        
                        <div class="col-lg-6 col-md-12">
                            <div class="order-box">
                                <h3>Your Products</h3>
                                
                                <div class="order-table table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Photo</th>
                                                <th scope="col">Product Name</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">option</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($products as $product)
                                            <tr>
                                                <td class="product-thumbnail">
                                                    <a >
                                                        <img src="{{asset($product->image)}}" alt="shop">
                                                    </a>
                                                </td>
                                                <td>
                                                    <a >{{$product->name}}</a> x2
                                                </td>
                                                <td>
                                                    <span class="amount">${{$product->price}}</span>
                                                </td>
                                                <td>
                                                    <a href="/editProduct/{{$product->id}}"  class="btn btn-primary" class="option">edit</a>
                                                    <a href="/deleteProduct/{{$product->id}}"  class="btn btn-danger" class="option">delete</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- End Checkout Area -->

@include('front-end.layouts.footer')