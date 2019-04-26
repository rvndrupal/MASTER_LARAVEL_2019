<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = ['user_id', 'title', 'body'];

    public static function boot() {
	    parent::boot();
	    self::saving(function ($post) {
	    	if ( ! \App::runningInConsole()) {
	    		$post->user_id = auth()->id();
		    }
	    });
    }

	public function newQuery() {
		$query = parent::newQuery();
		return $query->withTrashed();
	}
}
