<?php

namespace App\controllers;

class AboutController{
    public $page = 'pages/about.php';

    public function loadAboutPage(){
        return $this->page;
    }
}