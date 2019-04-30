<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'galleries';

    protected $fillable = ['title', 'caption', 'image', 'mime_type', 'original_name', 'file_size'];
}
