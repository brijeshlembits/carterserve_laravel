<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function registerprocess($postdata)
    {
        $user = new User();
        $user->name = $postdata['name'];
        $user->email = $postdata['email'];
        $user->password = $this->encryptpassword($postdata['password']);
        $user->phone = $postdata['phone'];
        $user->save();
        return $user;
    }
    
    public function encryptpassword($password)
    {
        return \Illuminate\Support\Facades\Hash::make($password);
    }
    public function checkPassword($password, $encryptedPassword)
    {
        return \Illuminate\Support\Facades\Hash::check($password, $encryptedPassword);
    }
  
}
