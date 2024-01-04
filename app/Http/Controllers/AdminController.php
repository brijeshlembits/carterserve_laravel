<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\Place;
use Illuminate\Http\Request;

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

        return view("admin.city",compact("city","countries"));
    }
    public function place()
    {
        $place= Place::all();
        $city= City::all();
        return view("admin.place",compact("place","city"));
    }
    public function countrydelete(Request $request,$id){
        $country = Country::find($id);
        $country->delete();
        return redirect()->back();
    }
    public function countrycreate(Request $request){
        return view('admin.createcountry');

    }
    public function countryprocess(Request $request){
        $country = new Country();
        $country->name= $request->input('name');
        $country->save();
        return redirect()->route('country');
    }
    public function citydelete(Request $request,$id){
        $city = City::find($id);
        $city->delete();
        return redirect()->back();
    }
    public function citycreate(Request $request){
        $city = City::all();
        $country = Country::all();

        return view('admin.createcity',compact('city','country'));

    }
    public function cityprocess(Request $request){
        $city = new City();
        $city->name= $request->input('name');
        $city->country_id = $request->input('country_id');
        $city->save();
        return redirect()->route('city');
    }
    public function placedelete(Request $request,$id){
        $place = place::find($id);
        $place->delete();
        return redirect()->back();
    }
    public function placecreate(Request $request){
        $place = place::all();
        $city = City::all();

        return view('admin.createplace',compact('place','city'));

    }
    public function placeprocess(Request $request){
        $place = new place();
        $place->name= $request->input('name');
        $place->city_id = $request->input('city_id');
        $place->save();
        return redirect()->route('place');
    }
    public function gallery(){
        return view('admin.gallery');
    }
    public function creategallery(Request $request){
        return view('admin.creategallery');

    }

}
