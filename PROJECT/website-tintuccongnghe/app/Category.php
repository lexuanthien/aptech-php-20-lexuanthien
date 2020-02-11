<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    
    protected $fillable = ["name","slug"];
    protected $dates = ['deleted_at'];

    public $timestamps = false;

    public function posts() {
        return $this->hasMany('App\Post');
    }
}
