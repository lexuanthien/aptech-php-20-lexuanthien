<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth; //có dòng này mới làm được cái đăng nhập Admin
use Illuminate\Http\Request;
use App\User;

class LoginAdminController extends Controller
{

    //ĐĂNG NHẬP
    public function getLoginAdmin()
    {
        return view('admin.login_admin');
    }

    public function postLoginAdmin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Bạn chưa nhập Email.',
            'password.required' => 'Bạn chưa nhập Password.'
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($data)) {
            return redirect()->route('posts.index');
        } else {
            return redirect()->route('login.input')->with('thongbao', 'Đăng Nhập Không Thành Công');
        }
    }

    // ĐĂNG KÝ
    public function getRegisterAdmin()
    {
        return view('admin.register_admin');
    }

    public function postRegisterAdmin(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => 3,
            'password' => bcrypt($request->password),
        ]);
        if ($user)
            return redirect()->route('login.input');
    }

    //ĐĂNG XUẤT
    public function LogoutAdmin(Request $request) {
        Auth::logout();
        return redirect()->route('login.input');
    }
}
