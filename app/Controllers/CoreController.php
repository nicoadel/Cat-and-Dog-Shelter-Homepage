<?php

namespace App\Controllers;

class CoreController{

    public function show(string $viewName){
        include __DIR__."/../views/$viewName.tpl.php";
    }


}