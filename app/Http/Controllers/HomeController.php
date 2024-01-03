<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view("users.index");
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
            $user = new User();
            $result=$user->loginprocess($request->all());
            if($result){
              
                return redirect()->route('home')->with('success','');
            }else{
                return redirect()->back()->with('error','something went wrong');
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
    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('home');
    }
    public function myaccount(Request $request){
        $user=Auth::user();
        return view('users.myaccount',compact('user'));
    }
}
