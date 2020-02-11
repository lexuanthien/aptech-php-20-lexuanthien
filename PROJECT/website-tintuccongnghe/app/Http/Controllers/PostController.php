<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts_dulieu = Post::get();
        return view('admin.post.index', ['posts' => $posts_dulieu]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('admin.post.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $posts = new Post;
        $posts->title = $request->title;
        $posts->description  = $request->description;
        $posts->content  = $request->content;
        $posts->category_id  = $request->category_id;
        $posts->tin_hot = $request->news;
        $posts->slug = str_slug($request->title);
        $posts->likes = 0;
        $posts->views = 0;

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/posts', $filename);
            $posts->image = $filename;
        } else {
            return $request;
            $posts->image = '';
        }
        $posts->save();

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.post.show', ['posts' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::get();
        return view('admin.post.edit', ['posts' => $post, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->title = $_POST['title_edit'];
        $post->description  = $_POST['description_edit'];
        $post->content  = $_POST['content_edit'];
        $post->category_id  = $_POST['category_id'];
        $post->tin_hot = $_POST['news'];
        $post->slug = str_slug($_POST['title_edit']);


        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/posts', $filename);
            $post->image = $filename;
        }

        $post->save();

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
    
    // Like
    public function like(Request $request,  $id)
    {
        $post = Post::findOrFail($id);
        if ($post !== null) {

            $post->likes += 1;

            $post->save();

            return response()->json([
                "success" => true,
                "value" => $post->likes
            ], 200);
        }
    }
}
