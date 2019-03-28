<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
	protected $guarded = ['id'];

	protected $dates = ['published_at', 'original_datetime'];

	public function getPublishedAttribute ($value) {
		return $value ? 'Sí' : 'No';
	}
}
