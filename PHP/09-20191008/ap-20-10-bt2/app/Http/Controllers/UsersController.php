<?php

namespace App\Http\Controllers;

use App\User; //nhớ có dòng này do dùng model lấy dữ liệu (thay cho dòng  use Illuminate\Support\Facades\DB; lấy dữ liệu bằng DB)
use Illuminate\Http\Request;


class UsersController extends Controller
{
    function dulieuusers(){
        $user_dulieu = User::get();
        return view('users', ['dulieuusers' => $user_dulieu]);
    }
    
}
