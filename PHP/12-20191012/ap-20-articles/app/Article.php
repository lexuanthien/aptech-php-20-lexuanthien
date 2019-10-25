<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ["title", "description", "content", "category_id"];

    public function category() {
        return $this->belongsTo('App\Category');
        //Hoặc như sau: return $this->belongsTo('App\Category', 'cat_id'); cat_id là khóa ngoại (forigen key) trong table Article
        //  Nếu không cài khóa ngoại cho cột cat_id trong bảng articles
    }
}
