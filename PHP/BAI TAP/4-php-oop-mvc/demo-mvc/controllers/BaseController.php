<?php
class BaseController
{
    protected $folder;

    public function view($file, $data = [])
    {
        $view_file = 'views/' . $this->folder . '/' . $file . '.php';
        if (is_file($view_file)) {
            require_once $view_file;
            require_once 'views/layouts/application.php';
        } else {
            header('Location : index.php?controller=pages&action=error');
        }
    }
}
