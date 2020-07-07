<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/hh5YWa4YJ0PR5Bd0XG3v6eYQRO0IdYb9m2A3jTch.jpeg';

        return '/storage/' . $imagePath;
    }
    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
