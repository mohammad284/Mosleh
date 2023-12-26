<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faten;
class FatenController extends Controller
{
    public function data()
    {
        // return array
        // $result = Faten::all();
        $result = Faten::where('age',26)->get();

        //return object
        // $result = Faten::find(1);
        $result = Faten::where('id','>',1)->first();
        return $result;
    }
}
