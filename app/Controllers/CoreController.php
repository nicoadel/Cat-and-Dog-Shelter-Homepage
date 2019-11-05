<?php

namespace App\Controllers;

class CoreController{

    /**
     * Display the page
     *
     * @param string $viewName
     */
    public function show(string $viewName){
        include __DIR__."/../views/site/header.tpl.php";
        include __DIR__."/../views/site/$viewName.tpl.php";
        include __DIR__."/../views/site/footer.tpl.php";
    }


}