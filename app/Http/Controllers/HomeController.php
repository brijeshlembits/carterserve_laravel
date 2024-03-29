<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\City;
use App\Models\Country;
use App\Models\Gallery;
use App\Models\Menu;
use App\Models\Place;
use App\Models\Services;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    //
    public function index()
    {
        $country = Country::all();
        $city = City::all();
        $place = Place::all();
        $gallery = Gallery::all();
        $menu = Menu::all();
        $services = Services::latest()->take(8)->get();

        return view("users.index", compact('country', 'city', 'place', 'gallery', 'menu', 'services'));
    }
    public function login()
    {
        return view('users.login');
    }
    public function loginprocess(Request $request)
    {
        $validator = Validator::make(request()->all(), []);
        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator)->withInput();
        } else {
            $user = User::where('email', $request->input('email'))->first();
            if ($user->checkPassword($request->input('password'), $user->password)) {

                if ($user->user_type == 1 || $user->user_type === 1) {
                    $user->save();
                    Auth::guard()->login($user);

                    return redirect()->route('dashboard');
                } else {
                    $user->save();
                    Auth::guard()->login($user);

                    return redirect()->route('home');
                }
            } else {
                return redirect()->back();
            }
        }
    }

    public function registration()
    {
        return view('users.registration');
    }
    public function registrationprocess(Request $request)
    {
        $data = $request->all();
        $validater = Validator::make($data, [
            'email' => 'required| unique:users',
            'password' => 'required',
            'name' => 'required',
            'phone' => 'required',
        ]);
        if ($validater->fails()) {
            return redirect()->back()->withErrors($validater)->withInput();
        } else {
            $user = new User();
            $result = $user->registerprocess($request->all());
            if ($result) {
                return redirect()->route('login')->with('success', '');
            } else {
                return redirect()->back()->with('error', '');
            }
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('home');
    }
    public function myaccount(Request $request)
    {
        $user = Auth::user();
        return view('users.myaccount', compact('user'));
    }
    public function bookcreate(Request $request)
    {
        $rules = [
            'country' => 'required',
            'city' => 'required',
            'place' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'date' => 'required',
            'food' => 'required',
            'event_type' => 'required',
            'people' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back();
        }
        $book = new Book();
        $result = $book->createBook($request->all());
        if ($result) {
            return redirect()->route('home')->with('success', '');
        }
    }

    public function city(Request $request)
    {
        $city = City::where(['country_id' => $request->country_id])->get();
        return response()->json($city);
    }
    public function place(Request $request)
    {
        $place = Place::where(['city_id' => $request->city_id])->get();
        return response()->json($place);
    }
    public function eventchange(Request $request)
    {
        $event = Gallery::where(['category' => $request->category])->get();

        return response()->json($event);
    }
    public function menuchange(Request $request)
    {
        $menu = Menu::where(['category' => $request->category])->get();
        // dd($request);
        return response()->json($menu);
    }
    public function booking(Request $request)
    {
        $book=Book::orderBy('date', 'ASC')->get();
        return view('users.booking',compact('book'));
    }
    public function userbooking(Request $request){
        $auth=Auth::user();
        // dd($auth->id);
        if($auth){

            $book = Book::where('user_id', $auth->id)->get();
            return view('users.userbooking',compact('book'));
        }else{
            return redirect()->route('login');
        }
        // dd($book);

    }
    public function menuitems(Request $request){
        $menu=Menu::all();
        return view('users.menuitems',compact('menu'));
    }
}
