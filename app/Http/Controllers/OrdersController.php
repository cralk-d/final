<?php

namespace App\Http\Controllers;

use App\Order;
use App\Post;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

    public function index(Post $post)
    {
        return view('posts.show', compact('post'));
    	
    }

    public function store()
    {
        $data= request()->validate([
            'p_id'=>['required','unique:orders'],
        ]);

        auth()->user()->orders()->create([
            'p_id'=>$data['p_id'],
        ]);
         return redirect('/profile/' . auth()->user()->id) ->with('success','Your order is submitted successfully.');
    }
}
