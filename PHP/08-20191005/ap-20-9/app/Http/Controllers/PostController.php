<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function Indulieubaiviet() {
        $dulieu = DB::table('posts')->get(); //gán dữ liệu trong bảng posts vào biến dulieu
        return view('viewpost', ['baiviet' => $dulieu]); //dat ten bien 'baiviet' lay du lieu cua $dulieu roi gui qua file viewpost ben cho view
    }
}
