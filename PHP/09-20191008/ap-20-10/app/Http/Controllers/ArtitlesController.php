<?php

namespace App\Http\Controllers;

use App\Artitle; //nhớ thêm dòng này nữa
use Illuminate\Http\Request;

class ArtitlesController extends Controller
{
    function Artitles_dulieu() {
        $artitles = Artitle::get(); //bài này sử dụng Model Artitle để lấy dữ liệu từ bảng table, không như bài trước là dùng Query buder để lấy dử liệu (chú ý tạo Model đặt tên không thêm "s" phía sau như những cái khác)
        return view('artitles', ['dulieuartitle' => $artitles]);
    }
}
