<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth; //có dòng này mới làm được cái đăng nhập Admin
use Illuminate\Http\Request;

class LoginAdminController extends Controller
{
    public function getLoginAdmin() {
        return view('admin.login_admin');
    }

    public function postLoginAdmin(Request $request) {
        $this->validate($request, [
            'email'=>'required',
            'password'=> 'required'
        ],[
            'email.required' => 'Bạn chưa nhập Email.',
            'password.required' => 'Bạn chưa nhập Password.'
        ]);
        
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($data)) {
            return redirect()->route('users.index');
        } else {
            return redirect()->route('login.input')->with('thongbao', 'Đăng Nhập Không Thành Công');
        }
    }
}
