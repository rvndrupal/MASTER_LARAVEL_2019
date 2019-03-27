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
	    self::saving(function ($post) {  //cuando se este guardando muy fregon
	    	if ( ! \App::runningInConsole()) {
	    		$post->user_id = auth()->id(); //si no es consola inserta el id en el campo post user_id
		    }
	    });
    }

	public function newQuery() {
		$query = parent::newQuery();
		return $query->withTrashed();
	}
}
