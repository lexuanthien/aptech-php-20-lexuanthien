<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use SoftDeletes;
    protected $fillable = ["name", 'email', 'password', 'role_id'];
    protected $dates = ['deleted_at'];

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
