<?php

namespace App\controllers;

class ContactController{
    public $page = 'pages/contact.php';

    public function loadContactPage(){
        return $this->page;
    }
}