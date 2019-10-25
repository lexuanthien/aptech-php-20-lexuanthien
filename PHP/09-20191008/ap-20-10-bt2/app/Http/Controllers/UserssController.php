<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserssController extends Controller
{
    // SỬ DỤNG php artisan make:controller TenController --resource (CÓ --resource) ĐỂ TẠO CONTROLLER NÀY
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_dulieu = User::get();
        return view('index', ['users' => $user_dulieu]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        User::insert(
            ['name' => $_POST['name'],
            'email' => $_POST['email-nguoi-dung'],
            'password' => $_POST['mat-khau']
            ]
        );
        $user_dulieu = User::get();
        return view('index', ['users' => $user_dulieu]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user_dulieu = User::where('id', '=', $id)->first();
        return view('show', ['users' => $user_dulieu]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user_dulieu = User::where('id', '=', $id)->first(); //dùng get() thì qua bên view phải gọi vị trí số 0
        return view('edit', ['users' => $user_dulieu]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $edit_user = User::where('id', '=', $id)->first();
        $edit_user->name =$_POST['name-nguoi-dung'];
        $edit_user->email =$_POST['email-nguoi-dung'];
        $edit_user->password =$_POST['password-nguoi-dung'];
        $edit_user->save();

        $user_dulieu = User::get();
        return view('index', ['users' => $user_dulieu]);


        //cách 2:
        //User::where('id', '=', $id)->update([
            //'name' => $_POST['name-nguoi-dung'],
            //'email'...
        //])
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        $user_dulieu = User::get();
        return view('index', ['users' => $user_dulieu]);

    }
}
