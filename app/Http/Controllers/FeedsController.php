<?php

namespace App\Http\Controllers;

use App\Feed;

use Illuminate\Http\Request;

class FeedsController extends Controller
{
	public function __construct()
	{
		return $this->middleware('auth');
	}
    public function index()
    {
    	$users = auth()->user();

        $feeds = Feed::whereIn('user_id', $users)->with('user')->latest()->paginate(30);
    	return view('feeds.index', compact('feeds'));

    }

    public function create()
    {
    	return view('feeds.create');
    }

    public function store()
    {
    	$data = request()->validate
    	([
    		'message'=>['required','max:500'],
    	]);
    	auth()->user()->feeds()->create([ 'message'=>$data['message'],]);

    	 return redirect('/f/' . auth()->user()->id) ->with('success','message send successfully.');
    }

    public function show(Feed $feed)
    {
    	return view('feeds.show', compact('feed'));
    }
}
