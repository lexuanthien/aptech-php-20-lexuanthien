<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use Carbon\Carbon;

class WebsiteController extends Controller
{
    function TrangChu() {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');

        $category = Category::get();
        
        $post = Post::get();

        return view('page_home.trangchu', ['categories' => $category, 'posts' => $post, 'time' => $dt]);
    }

    function TinTuc($id) {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');

        $category = Category::get();

        $theloai = Category::where('id', '=', $id)->first();

        $post = Post::where('category_id','=', $id)->orderBy('created_at', 'desc')->paginate(5); //paginate(5) để hiển thị 5 tin trong 1 trang

        return view('page_home.trangtonghop', ['categories' => $category, 'theloaipost'=>$theloai, 'posts' => $post, 'time' => $dt]);
    }
    
    function XemChiTiet($id) {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');

        $category = Category::get();

        $post = Post::where('id', '=', $id)->first();

        $postlienquan = Post::where('category_id', '=', $post->category_id)->take(3)->get();
        
       
        $theloai = Category::where('id', '=', $id)->first();

        return view('page_home.trangxemchitiet', ['categories' => $category, 'theloaipost'=>$theloai, 'posts' => $post, 'time' => $dt, 'tinlienquan' => $postlienquan]);
    }

    function Login() {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');

        $category = Category::get();
        
        $post = Post::get();

        return view('page_home.login', ['categories' => $category, 'posts' => $post, 'time' => $dt]);
    }

    function Register() {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');

        $category = Category::get();
        
        $post = Post::get();

        return view('page_home.register', ['categories' => $category, 'posts' => $post, 'time' => $dt]);
    }
}
