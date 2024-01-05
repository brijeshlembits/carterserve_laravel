<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\Gallery;
use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\MultipleInstanceManager;

class AdminController extends Controller
{
    //
    public function dashboard(Request $request)
    {
        return view("admin.dashboard");
    }
    public function country()
    {
        $countries = Country::all();
        return view("admin.country", compact("countries"));
    }
    public function city()
    {
        $city = City::all();
        $countries = Country::all();

        return view("admin.city", compact("city", "countries"));
    }
    public function place()
    {
        $place = Place::all();
        $city = City::all();
        return view("admin.place", compact("place", "city"));
    }
    public function countrydelete(Request $request, $id)
    {
        $country = Country::find($id);
        $country->delete();
        return redirect()->back();
    }
    public function countrycreate(Request $request)
    {
        return view('admin.createcountry');
    }
    public function countryprocess(Request $request)
    {
        $country = new Country();
        $country->name = $request->input('name');
        $country->save();
        return redirect()->route('country');
    }
    public function citydelete(Request $request, $id)
    {
        $city = City::find($id);
        $city->delete();
        return redirect()->back();
    }
    public function citycreate(Request $request)
    {
        $city = City::all();
        $country = Country::all();

        return view('admin.createcity', compact('city', 'country'));
    }
    public function cityprocess(Request $request)
    {
        $city = new City();
        $city->name = $request->input('name');
        $city->country_id = $request->input('country_id');
        $city->save();
        return redirect()->route('city');
    }
    public function placedelete(Request $request, $id)
    {
        $place = place::find($id);
        $place->delete();
        return redirect()->back();
    }
    public function placecreate(Request $request)
    {
        $place = place::all();
        $city = City::all();

        return view('admin.createplace', compact('place', 'city'));
    }
    public function placeprocess(Request $request)
    {
        $place = new place();
        $place->name = $request->input('name');
        $place->city_id = $request->input('city_id');
        $place->save();
        return redirect()->route('place');
    }
    public function gallery()
    {
        $gallery = Gallery::all();
        return view('admin.gallery', compact('gallery'));
    }
    public function creategallery(Request $request)
    {
        return view('admin.creategallery');
    }
    public function uploadmultipleimage(Request $request)
    {
        // dd($request->all() );
        $image = array();
        if ($files = $request->file('images')) {
            foreach ($files as $file) {
                $image_name = md5(rand(100, 1000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name . "." . $ext;
                $uplaod_path = "images/";
                $image_url = $uplaod_path . $image_full_name;
                $file->move($uplaod_path, $image_full_name);
                $image[] = $image_url;
            }
        }
        // dd($uplaod_path);
        Gallery::insert([
            'image' => implode('|', $image),
            'category'=> $request->input('category'),
        ]);
        return redirect()->route('gallery');
    }
    public function deleteimage(Request $request)
    {
        $image = $request->image;
        $id = $request->id;
        $check = Gallery::find($id);

        if ($check) {
            $checkname = explode('|', $check->image);
            // dd($checkname);

            $checkname = array_diff($checkname, [$image]);
            $check->update(['image' => implode('|', $checkname)]);
          
            Storage::delete('images/' . $image);
            $count = $check->image;
            // dd($count);
            if (strlen($count)==0) {
                // dd(1);
                $check->delete();
                return redirect()->back();
            }
            return redirect()->back()->with('success', 'Image Deleted');
        } else {
            return redirect()->back();
        }
    }
}