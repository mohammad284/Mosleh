<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
class FrontHomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::all();
        $services = Service::all();
        $providers = User::where('type','provider')->where('status',1)->get();

        return view('home',[
            'categories' => $categories,
            'services' => $services,
            'providers' => $providers,
        ]);
    }
    // user profile

    public function profile()
    {
        $user = User::with('service')->find(Auth::id());
        $servies = Service::all();
        return view('front-end.user.profile',[
            'user' => $user,
            'servies'=>$servies
        ]);
    }
    public function update_profile(User $user)
    {     
        $user = Auth::user();
        request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required|numeric',
            'email' => 'unique:users,email,'.$user->id
            // 'email' => "unique:users,email,$this->id,id"
            // 'email'=> 'required|email|unique:users,email,' . Auth::user()->id,
        ]);
        $user->first_name = request('first_name');
        $user->last_name = request('last_name');
        $user->email = request('email');
        $user->company_name = request('company_name');
        $user->phone = request('phone');
        $user->address = request('address');
        $user->service_id = request('service_id');
        $user->bio = request('bio');
        $user->type = $user->type;
        $user->password = request('password') ? bcrypt(request('password')) : $user->password;
        $user->save();
        return redirect()->back()->with('message','updated successfully');
    }
}
