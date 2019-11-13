<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = ["name", 'email', 'password', 'role_id'];

    public $timestamps = false;

    public function role() {
        return $this->belongsTo('App\Role');
    }

    public function comments() {
        return $this->hasMany('App\Comment');
    }


    public function setAttribute($key, $value)
    {
        $isRememberTokenAttribute = $key == $this->getRememberTokenName();
            if (!$isRememberTokenAttribute)
            {
            parent::setAttribute($key, $value);
            }
        }
    }
