<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\Gallery;
use App\Models\Menu;
use App\Models\Place;
use App\Models\Services;
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
            'category' => $request->input('category'),
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
            if (strlen($count) == 0) {
                // dd(1);
                $check->delete();
                return redirect()->back();
            }
            return redirect()->back()->with('success', 'Image Deleted');
        } else {
            return redirect()->back();
        }
    }
    public function menu(Request $request)
    {

        $menu = Menu::all();
        return view('admin.menu', compact('menu'));
    }
    public function menucreate(Request $request)
    {
        return view('admin.menucreate');
    }
    public function menuprocess(Request $request)
    {
        if ($id = $request->id) {
            $menu = Menu::find($id);
            // dd($menu);
            $menu->image = $request->input('old_image');
            // dd( $menu->image);
        } else {

            $menu = new Menu();
            if ($data = $request->file('image')) {
                $image = $request->file('image') . '.' . $request->image->extension();
                $move = $request->image->move('images/', $image);
                $menu->image = $move;
            }
        }
        $menu->title = $request->input('title');
        $menu->description = $request->input('description');
        $menu->price = $request->input('price');
        $menu->category = $request->input('category');

        $menu->save();
        return redirect()->route('menu');
    }
    public function menudelete(Request $request, $id)
    {
        $find = Menu::find($id);
        $find->delete();
        return redirect()->route('menu');
    }
    public function menuupdate(Request $request, $id)
    {
        $menu = Menu::find($id);
        return view('admin.menucreate', compact('menu'));
    }
    public function services(Request $request)
    {
        $services = Services::all();
        return view('admin.services', compact('services'));
    }
    public function servicecreate(Request $request)
    {
        return view('admin.servicecreate');
    }
    public function serviceprocess(Request $request)
    {
        if ($id = $request->id) {
            $services = Services::find($id);
            // dd($request->input('old_image'));
            $services->icon = $request->input('old_image');
        } else {
            $services = new Services();
            $services->icon = $request->selectIcon;
        }
        $services->title = $request->title;
        $services->description = $request->description;
        // dd($request->selectedIcon);  
        $services->save();
        // $ser=Services::latest()->first();
        return redirect()->route('services');
    }
    public function servicedelete(Request $request, $id)
    {
        $deleteservice = Services::find($id);
        $deleteservice->delete();
        return redirect()->route('services');
    }
    public function serviceupdate(Request $request, $id)
    {
        $service = Services::find($id);
        return view('admin.servicecreate', compact('service'));
    }
}
