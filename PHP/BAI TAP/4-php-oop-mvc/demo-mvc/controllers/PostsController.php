<?php

require_once 'controllers/BaseController.php';
require_once 'models/post.php';

class PostsController extends BaseController
{
    public function __construct()
    {
        $this->folder = 'posts';
    }

    public function index()
    {
        $posts = Post::all();
        $data = ['posts' => $posts];
        $this->view('index', $data);
    }

    public function showPost()
    {

        $post = Post::find($_GET['id']);
        $data = ['posts' => $post];
        $this->view('show', $data);
    }

}
