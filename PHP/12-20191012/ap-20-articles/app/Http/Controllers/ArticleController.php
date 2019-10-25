<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // SỬ DỤNG php artisan make:controller TenController --resource (CÓ --resource) ĐỂ TẠO CONTROLLER NÀY
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles_dulieu = Article::get();
        return view('index', ['articles' => $articles_dulieu]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('create', ['categories'=> $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        Article::insert(
            ['title' => $_POST['tieu-de'],
            'description' => $_POST['mieu-ta'],
            'content' => $_POST['noi-dung'],
            'category_id' => $_POST['category_id'],
            ]
        );
        $articles_dulieu = Article::get();
        return view('index', ['articles' => $articles_dulieu]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articles_dulieu = Article::where('id', '=', $id)->first();
        return view('show', ['article' => $articles_dulieu]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articles_dulieu = Article::where('id', '=', $id)->first(); //dùng get() thì qua bên view phải gọi vị trí số 0
        return view('edit', ['article' => $articles_dulieu]);
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
        $articles = Article::where('id', '=', $id)->first();
        $articles->title =$_POST['sua-tieu-de'];
        $articles->description =$_POST['sua-mieu-ta'];
        $articles->content =$_POST['sua-noi-dung'];
        $articles->save();

        $articles_dulieu = Article::get();
        return view('index', ['articles' => $articles_dulieu]);

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
        Article::destroy($id);

        $articles_dulieu = Article::get();
        return view('index', ['articles' => $articles_dulieu]);

    }
}
