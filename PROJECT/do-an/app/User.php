<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ["name", 'email', 'password', 'role_id'];

    public $timestamps = false;

    public function role() {
        return $this->belongsTo('App\Role');
    }

    public function posts() {
        return $this->hasMany('App\Post');
    }
}
