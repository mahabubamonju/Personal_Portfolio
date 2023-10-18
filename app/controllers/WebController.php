<?php

namespace App\controllers;

class WebController{
    public function index(){
        return header("Location: route.php?page=home");
    }
}

