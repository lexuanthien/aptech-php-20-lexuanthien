<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;

    protected $fillable = ["name"];
    protected $dates = ['deleted_at'];

    public $timestamps = false;

    public function users() {
        return $this->hasMany('App\User');
    }
}
