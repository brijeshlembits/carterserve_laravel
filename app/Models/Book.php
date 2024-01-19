<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Book extends Model
{
    use HasFactory;
    protected $table="book";
    protected $fillable = [
        "email","date","phone","event_type","no_people","food","country","city","place",
    ];

    public function createBook($postdata){
        $book = new Book();
        $country=Country::all();
        $city=city::all();
        $place=Place::all();
        $auth=Auth::user();
        $book->user_id=$auth->id;
        $book->email = $postdata['email'];
        $book->date = $postdata['date'];
        $book->phone = $postdata['phone'];
        $book->event_type = $postdata['event_type'];
        $book->no_people = $postdata['people'];
        $book->food = $postdata['food'];
        $book->country = $postdata['country'];
        $book->city = $postdata['city'];
        $book->place = $postdata['place'];
        $book->save();
        return redirect()->route('home');



    }
}
