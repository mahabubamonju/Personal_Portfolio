<?php

namespace App\controllers;

class FooterController{
    public $page = 'pages/includes/footer.php';

    public function loadFooter(){
        return $this->page;
    }
}