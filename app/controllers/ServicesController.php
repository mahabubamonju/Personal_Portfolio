<?php

namespace App\controllers;

class ServicesController{
    public $page = 'pages/services.php';

    public function loadServicesPage(){
        return $this->page;
    }
}