<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Validator;
use Image;
class ServiceController extends Controller
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
    //return all services
    public function services()
    {
        $services = Service::all();
        return view('dashboard.service.all-services',[
            'services' => $services
        ]);
    }
    // add service 
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'image' => ['required'],
        ]);
        if ($validator->fails()) {
           return redirect()->back()->withErrors($validator);
        }
        $icon = $this->uplodeImage($request->file('image'));
        Service::create([
            'name' => $request->name,
            'icon' => $icon
        ]);
        return redirect()->back()->with('message','added successfully');
    }
    // update services
    public function update(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'image' => ['required'],
        ]);
        if ($validator->fails()) {
           return redirect()->back()->withErrors($validator);
        }
        $service = Service::find($id);
        if($request->file('image')){
            $icon = $this->uplodeImage($request->file('image'));
        }else{
            $icon = $service->icon;
        }
        $service->update([
            'name' => $request->name,
            'icon' => $icon
        ]);
        return redirect()->back()->with('message','updated successfully');
    }
    //delete service
    public function delete($id)
    {
        $service = Service::find($id)->delete();
        return redirect()->back()->with('message','deleted successfully');
    }
}
