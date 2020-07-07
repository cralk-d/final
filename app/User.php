<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /**
     * @var mixed
     */
    /**
     * @var mixed
     */
    protected static function boot()
    {
        parent::boot();

        static::created( function($user){
            $user->profile()->create([
                'description'=> $user->role,]);
        });
    }
    //relation ship with invoice table

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    //relation ship with orders table

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

   //relation ship with posts table
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    //relationship with following table
    
    public function following()
    {
        return $this->belongsToMany(Profile::class);
    }

    //relationship with profiles table
    public function profile()
    {
     return $this->hasOne(Profile::class);
    }

    
    
}
