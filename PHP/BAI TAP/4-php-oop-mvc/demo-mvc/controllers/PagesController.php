<?php
require_once 'controllers/BaseController.php';

class PagesController extends BaseController
{
    public function __construct()
    {
        $this->folder = 'pages';
    }

    public function home()
    {
        $data = [
            'name' => 'Nam NH',
            'project' => 'Blog Website',
        ];

        $this->view('home', $data);
    }

    public function error()
    {
        $this->view('error');
    }
}
