<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ["title", 'description', 'content', "image",'category_id'];

    public $timestamps = false;

    public function category() {
        return $this->belongsTo('App\Category');
    }
}
