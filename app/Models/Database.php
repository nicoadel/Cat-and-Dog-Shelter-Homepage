<?php

namespace App\Models;

use PDO;

class Database {

    //TODO: GetPDO Method
    public static function getPDO(){
        $dsn = 'mysql:dbname=mustafac_piestany;host=localhost;charset=UTF8';
        $user = 'mustafac_piestany';
        $password = 'cosmos@@';

        try {
            $pdoConnexion = new PDO(
                $dsn,
                $user,
                $password,
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
        } catch (PDOException $exception) {
            echo ' Connexion échouée :' . $exception->getMessage();
        }
    }

}