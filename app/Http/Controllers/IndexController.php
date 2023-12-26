<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\User;
use App\Models\Car;
use App\Models\Category;
use App\Models\Service;
use Image;
use App\Services\PayUService\Exception;
class IndexController extends Controller
{
    public function uplodeImage($icon)
    {
            $image = $icon;
            $input['name'] = $image->getClientOriginalName();
            $path = 'images/photo/';
            $destinationPath = 'images/photo/';
            $img = Image::make($image->getRealPath());
            $img->resize(1200, 1200, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.time().$input['name']);
            $name = $path.time().$input['name'];
            return $name;
    }
    public function categoryProduct($id)
    {
        $products = Product::with('user:id,first_name','category:id,name','car:id,type')
        ->where('category_id',$id)->get();
        return view('front-end.products.products',[
            'products'=> $products
        ]);
    }

    public function product_details($id)
    {
        $product = Product::with('user','category','car','reviews.user:id,first_name,last_name')
        ->where('id',$id)
        ->first();
        $more_products = Product::with('user','category')
        ->where('category_id',$product->category_id)
        ->where('id','!=',$id)
        ->take(5)->get();
        return view('front-end.products.details',[
            'details'=> $product,
            'more_products' => $more_products
        ]);
    }

    public function serviceProviders($id)
    {
        $providers = User::where('service_id',$id)->where('status',1)->get();
        return view('front-end.user.all-providers',[
            'providers'=>$providers
        ]);
    }
    public function dashboard()
    {
        $products = Product::where('user_id',Auth::user()->id)->get();
        $categories = Category::all();
        $cars = Car::all();
        return view('front-end.dashboard',[
            'categories' => $categories,
            'cars' => $cars,
            'products' => $products,
        ]);
    }
    public function addProduct(Request $request)
    {
        request()->validate([
            'category_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'size' => 'required',
            'car_id' => 'required',
            'price' => 'required',
            'image' => 'required',
        ]);
        $icon = $this->uplodeImage($request->file('image'));
        Product::create([
            'user_id' => Auth::user()->id,
            'category_id' => $request->category_id,
            'name' => $request->name,
            'description' => $request->description,
            'size' => $request->size,
            'car_id' => $request->car_id,
            'price' => $request->price,
            'image' => $icon,
        ]);
        return redirect()->back()->with('message','added successfully');
    }
    public function editProduct($id)
    {
        try {

            $product = Product::find($id);
            $categories = Category::all();
            $cars = Car::all();
            if(Auth::user()->id == $product->user_id){
                $product = Product::where('user_id',Auth::user()->id)
                ->where('id',$id)
                ->first();
                return view('front-end.products.edit-product',[
                    'product' => $product,
                    'categories' => $categories,
                    'cars' => $cars,
                ]);
            }else{
            return back();
            }          
          } catch (\Exception $e) {
          
              return 'error';
          }
        
    }
    public function updateProduct(Request $request , $id)
    {
        try {
            $product = Product::find($id);
            $icon = $this->uplodeImage($request->file('image'));
            if(Auth::user()->id == $product->user_id){
                $data = [
                    'category_id' => $request->category_id,
                    'name' => $request->name,
                    'description' => $request->description,
                    'size' => $request->size,
                    'car_id' => $request->car_id,
                    'price' => $request->price,
                    'image' => $icon,
                ];
                $product->update($data);
                return redirect('/dashboard'); 
            }else{
            return back();
            }          
          } catch (\Exception $e) {
          
              return 'error';
          }
    }
    public function deleteProduct($id)
    {
        $product = product::find($id)->delete();
        return back();
    }

    public function allServices()
    {
        $services = Service::all();
        return view('front-end.services.all-services',[
            'services' => $services
        ]);
    }
}
