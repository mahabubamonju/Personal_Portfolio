<?php

namespace App\controllers;

class PortfolioController{
    public $page = 'pages/portfolio.php';

    public function loadPortfolioPage(){
        return $this->page;
    }
}