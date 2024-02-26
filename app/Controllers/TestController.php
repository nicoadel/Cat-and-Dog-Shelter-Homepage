<?php

namespace App\Controllers;

use Faker;
use App\Models\DogModel;

class TestController extends CoreController{


    /**
     * Methods to test stuff
     * Comment or Delete in production
     */
    public function test(){
        DogModel::find(3);
    }

    public function insertFakeDog(){
        $faker = Faker\Factory::create();

        function setWeight($height){
            if($height <= 60){
                return mt_rand(2,5);
            }else if($height <= 90){
                return mt_rand(5,10);
            }else{
                return mt_rand(10,30);
            }
        }

        for($i=0; $i<10; $i++){
            //Instanciate Dog
            $newdog = new DogModel();

            //Create Fake Data
            $dogname = $faker->colorName;
            $borndate = $faker->dateTimeThisDecade->format('Y-m-d');
            $castration = $faker->boolean(50);
            $idNumber = $faker->md5;
            $height = mt_rand(30,120);
            $weight = setWeight($height);
            $description = $faker->paragraph(3);
            $breed =  $faker->safeColorName;            

            //Set Data to Dog Object
            $newdog->setName($dogname);
            $newdog->setBornDate($borndate);
            $newdog->setCastration($castration);
            $newdog->setIdentificationNumber($idNumber);
            $newdog->setHeight($height);
            $newdog->setWeight($weight);
            $newdog->setDescription($description);
            $newdog->setBreed($breed);
            
            dump($newdog);
            //Uncomment to add Data
            //$newdog->insert();            
            
        }
    }

}