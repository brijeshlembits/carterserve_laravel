<?php

namespace App\Http\Controllers;

use App\Models\Country;
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
        return view("admin.city");
    }
    public function place()
    {
        return view("admin place");
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
}
