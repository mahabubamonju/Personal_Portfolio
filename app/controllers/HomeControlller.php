<?php

namespace App\controllers;

class HomeControlller{
    public $page = 'pages/home.php';

    public function loadHomePage(){
        return $this->page;
    }
}