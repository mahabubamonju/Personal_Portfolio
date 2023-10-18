<?php

namespace App\controllers;

class BlogsController{
    public $page = 'pages/blogs.php';

    public function loadBlogsPage(){
        return $this->page;
    }
}