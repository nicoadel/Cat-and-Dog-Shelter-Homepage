<?php

namespace App\Controllers;

use App\Models\CatModel;
use App\Models\DogModel;

class MainController extends CoreController{

    public function landing(){

        $animalArray = [];

        $pageName = "landing";

        for($i=0;$i<=1;$i++){
            $animalArray[] = DogModel::find(mt_rand(2,11));
            $animalArray[] = CatModel::find(mt_rand(12,21));
        }

        $this->show('landing',["animalArray" => $animalArray, "pageName" => $pageName]);
    }
}