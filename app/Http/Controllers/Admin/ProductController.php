<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Product;
class ProductController extends Controller
{
    public function products(){
        $products = Product::with('user','category','car')->get();
        return view('dashboard.products.product',[
            'products' => $products
        ]);
    }
    // delete product
    public function delete($id)
    {
        $product = Product::find($id)->delete();
        return redirect()->back()->with('message','deleted successfully');
    }
}
