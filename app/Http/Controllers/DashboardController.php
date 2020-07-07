<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use App\Order;
use App\Feed;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(User $user)
    {
    	$userCount= $user->count();
    	return view('dashboard', compact('user'));
    }
}
