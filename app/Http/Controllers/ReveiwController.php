<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reveiw;
use Illuminate\Support\Facades\Auth;
class ReveiwController extends Controller
{
    // add Review  to products
    public function add_review(Request $request)
    {
        Reveiw::create([
            'user_id' => Auth::user()->id ,
            'comment' =>$request->comment,
            'product_id' =>$request->product_id,
        ]);
        return redirect()->back()->with('message','added successfully');
    }
    
}
