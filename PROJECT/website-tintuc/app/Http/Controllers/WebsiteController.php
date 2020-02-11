<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use Carbon\Carbon;
use App\User;

use Illuminate\Support\Facades\Auth;

class WebsiteController extends Controller
{
    function __construct()
    {
        if(Auth::check()) {
            view()->share('thanhvien', Auth::user());
        }
    }
    
    function TrangChu()
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');

        $category = Category::get();

        $post = Post::get();

        return view('page_home.trangchu', ['categories' => $category, 'posts' => $post, 'time' => $dt]);
    }

    // LẤY DỮ LIỆU BẰNG SLUG TRUYÊN Ở ROUTE
    function TinTuc($slug)
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh'); //THỜI GIAN

        $category = Category::get(); //MENU

        $theloai = Category::where('slug', '=', $slug)->firstOrFail(); //SLUG NHẬP VÀO TRÊN ROUTE = SLUG DATA -> HIỂN THỊ
        if ($theloai !== null) {

            $posts = $theloai->posts()->orderBy('created_at', 'desc')->paginate(5);

            return view('page_home.trangtonghop', [
                'time' => $dt,
                'categories' => $category, 
                'theloaipost' => $theloai, 
                'posts' => $posts
                ]);
        }
    }

    function XemChiTiet($slug)
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh'); //TIME

        $category = Category::get(); //MENU

        $post = Post::where('slug', '=', $slug)->with('category')->first();

        // Tăng View
        $post->views += 1;
        $post->save();
        //

        $postlienquan = Post::where('category_id', '=', $post->category_id)->take(3)->get();


        return view('page_home.trangxemchitiet', [
            'categories' => $category,
            'posts' => $post, 
            'time' => $dt, 
            'tinlienquan' => $postlienquan
            ]);
    }

    function MoiNhat()
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');

        $category = Category::get();

        $post = Post::orderBy('created_at','desc')->paginate(10);

        return view('page_home.moinhat', ['categories' => $category, 'posts' => $post, 'time' => $dt]);
    }

    // LẤY DỮ LIỆU BẰNG ID TRUYÊN Ở ROUTE
   
    // function TinTuc($id) {
    //     $theloai = Category::get();
    //     $dt = Carbon::now('Asia/Ho_Chi_Minh');
    //     $category = Category::where('id', '=', $id)->first();
    //     $post = Post::where('category_id','=', $id)->orderBy('created_at', 'desc')->paginate(5);
    //     return view('home.trangtonghop', ['categories' => $category, 'theloaipost'=>$theloai, 'posts' => $post, 'time' => $dt]);
    // }
    
    // function XemChiTiet($id) {
    //     $post = Post::where('id', '=', $id)->first();
    //     $theloai = Category::get();
    //     $dt = Carbon::now('Asia/Ho_Chi_Minh');
    //     $category = Category::where('id', '=', $id)->first();
    //     return view('home.trangxemchitiet', ['categories' => $category, 'theloaipost'=>$theloai, 'posts' => $post, 'time' => $dt]);
    // }    

    function getRegister()
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh'); //THỜI GIAN

        $category = Category::get(); //MENU

        $post = Post::get();    

        return view('page_home.register', ['categories' => $category, 'posts' => $post, 'time' => $dt]);
    }
    
    function postRegister(Request $request) {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => 3,
            'password' => bcrypt($request->password),
        ]);
        if ($user)
            return redirect()->route('login');
    }

    // LOGIN
    function getLogin()
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');

        $category = Category::get();

        $post = Post::get();

        return view('page_home.login', ['categories' => $category, 'posts' => $post, 'time' => $dt]);
    }

    function postLogin(Request $request)
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
            return redirect()->route('trangchu');
        } else {
            return redirect()->route('login')->with('thongbao', 'Đăng Nhập Thất Bại: Sai Email hoặc Mật Khẩu');
        }
    }

    // ĐĂNG XUẤT
    function Logout(Request $request) {
        Auth::logout();
        return back();
    }

    // TÌM KIẾM
    function TimKiem(Request $request) {
        $dt = Carbon::now('Asia/Ho_Chi_Minh'); //TIME

        $category = Category::get(); //MENU

        $timkiem = $request->timkiem;

        $post = Post::Where('title','like', "%$timkiem%")->orWhere('description','like', "%$timkiem%")->orWhere('slug','like', "%$timkiem%")->take(10)->paginate(5);

        return view('page_home.search', [
            'categories' => $category,
            'time' => $dt, 
            'posts' => $post, 
            'timkiem' => $timkiem
            ]);
    }
}
