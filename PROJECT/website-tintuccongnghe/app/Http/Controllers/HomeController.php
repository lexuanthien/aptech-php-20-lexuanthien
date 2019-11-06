<?php

namespace App\Http\Controllers;

use App\Home;
use Illuminate\Http\Request;
use App\Category;
use App\Post;
use Carbon\Carbon;

use Illuminate\Support\Collection;


class HomeController extends Controller
{
    function TrangChu() {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        $category = Category::get();
        $post = Post::get();
        return view('home.trangchu', ['categories' => $category, 'posts' => $post, 'time' => $dt]);
    }

    function TinTuc($id) {
        $theloai = Category::get();
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        $category = Category::where('id', '=', $id)->first();
        $post = Post::where('category_id','=', $id)->paginate(5);
        return view('home.trangtonghop', ['categories' => $category, 'theloaipost'=>$theloai, 'posts' => $post, 'time' => $dt]);
    }
}
