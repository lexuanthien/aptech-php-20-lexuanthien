<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; //thêm dòng này
use Illuminate\Http\Request;

class UserController extends Controller
{
    function IndulieutableUsers() {
        $dulieu_table = DB::table('users')->get();
        return view('users', ['dulieu'=>$dulieu_table]); //users là file users.blade.php ở bên mục view
    }
}
