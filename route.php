<?php

require_once "vendor/autoload.php";


use App\controllers\HeaderController;
use App\controllers\HomeControlller;
use App\controllers\AboutController;
use App\controllers\PortfolioController;
use App\controllers\BlogsController;
use App\controllers\ServicesController;
use App\controllers\ContactController;
use App\controllers\FooterController;



include_once (new HeaderController())->loadHeader();


if("home" == $_GET['page']){
    include_once(new HomeControlller())->loadHomePage();

}elseif ('about'==$_GET['page']){
    include_once(new AboutController())->loadAboutPage();
}elseif ('portfolio'==$_GET['page']){
    include_once(new PortfolioController())->loadPortfolioPage();
}elseif ('blogs'==$_GET['page']){
    include_once(new BlogsController())->loadBlogsPage();
}elseif ('services'==$_GET['page']){
    include_once(new ServicesController())->loadServicesPage();
}elseif ('contact'==$_GET['page']){
    include_once(new ContactController())->loadContactPage();
}

include_once (new FooterController())->loadFooter();