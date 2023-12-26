<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function providers()
    {
        $providers = User::where('status',1)->where('type','provider')->get();
        return view('dashboard.users.providers',[
            'providers' => $providers
        ]);
    }
    public function provider_req()
    {
        $providers = User::where('status',0)->where('type','provider')->get();
        return view('dashboard.users.provider-req',[
            'providers' => $providers
        ]);
    }
    
    public function accept($id)
    {
        $provider = User::where('id',$id)->first();
        $provider->status = 1;
        $provider->save();
        return back();
    }
}
