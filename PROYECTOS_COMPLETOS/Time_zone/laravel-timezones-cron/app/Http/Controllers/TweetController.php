<?php

namespace App\Http\Controllers;

use App\Tweet;
use Carbon\Carbon;

class TweetController extends Controller
{
    public function index () {
    	$tweets = Tweet::paginate(10);
    	return view('tweets.index', compact('tweets'));
    }

    public function create () {
	    return view('tweets.form');
    }

    public function store () {
	    $date = Carbon::createFromFormat('Y-m-d H:i:s', Carbon::parse(request('datetime')), request('timezone'));
	    $date->setTimezone(config('app.timezone'));
	    Tweet::create([
		    'tweet' => request('tweet'),
		    'timezone' => request('timezone'),
		    'original_datetime' => Carbon::parse(request('datetime'))->toDateTimeString(),
		    'published_at' => Carbon::parse($date)->toDateTimeString()
	    ]);
	    return redirect(route('tweets.list'));
    }
}
