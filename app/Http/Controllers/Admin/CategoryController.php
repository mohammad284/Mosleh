<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth:admin');
    // }
    //get all categories
    public function all_categories()
    {
        $data = Category::all();
        return view('dashboard.category.all-categories',[
            'data'=>$data
        ]);
    }
    // store new category
    public function store_category(Request $request){
        $cat = new Category;
        $cat->name = $request->category;
        $cat->save();
        // $data = [
        //     'name' =>$request->category
        // ];
        // Category::create($data);

        // Category::create([
        //     'name' =>$request->category
        // ]);
        return redirect()->back();
    }
    //delete category
    public function delete_category($id)
    {
        $cat = Category::find($id);
        $cat->delete();
        return redirect()->back();
    }
    //edit category
    public function update_category(Request $request,$id)
    {
        $category = Category::find($id);
        $category->name = $request->category;
        $category->save();

        $data = [
            'name' => $request->category
        ];
        $category->update($data);
        return redirect()->back();
    }
}
