<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories_data = Category::get();
        return view('CRUD_Categories/index', ['categories' => $categories_data]);
    }

    public function show($id)
    {
        $categories_data = Category::where('id', '=', $id)->first();
        return view('CRUD_Categories/show', ['category' => $categories_data]);
    }

    public function destroy($id)
    {
        Category::destroy($id);

        $categories_data = Category::get();
        return view('CRUD_Categories/index', ['categories' => $categories_data]);

    }

    public function create()
    {
        return view('CRUD_Categories/create');
    }

    public function store()
    {
        Category::insert(
            ['name' => $_POST['name'],
            'description_cat' => $_POST['categories_cat'],
            ]
        );
        $categories_data = Category::get();
        return view('CRUD_Categories/index', ['categories' => $categories_data]);
    }

    public function edit($id)
    {
        $categories_data = Category::where('id', '=', $id)->first();
        return view('CRUD_Categories/edit', ['category' => $categories_data]);
    }

    public function update(Request $request, $id)
    {
        $category = Category::where('id', '=', $id)->first();
        $category->name =$_POST['sua-name'];
        $category->description_cat =$_POST['sua-description'];
        $category->save();

        $categories_data = Category::get();
        return view('CRUD_Categories/index', ['categories' => $categories_data]);

        //cách 2:
        //User::where('id', '=', $id)->update([
            //'name' => $_POST['name-nguoi-dung'],
            //'email'...
        //])
    }
}
