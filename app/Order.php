<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{  
	protected $guarded =[];
	
	public function posts()
	{
		return $this->belongsToMany(Post::class);
	}
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
