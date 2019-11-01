<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ["title", 'description', 'content', 'numberlike', "image", 'slug', 'user_id', 'category_id'];

    public $timestamps = false;

    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
