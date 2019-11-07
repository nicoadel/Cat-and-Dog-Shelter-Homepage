<?php

namespace App\Models;

use PDO;
use App\Models\Database;


class CatModel extends AnimalModel{

    const TYPE_NAME = 'cat'; 

    /**
     * Find a dog by his id
     *
     * @param int $id
     * @return CatModel|false
     */
    public static function find(int $id)
    {

        $sql = "
        SELECT *
        FROM `animal`
        WHERE id = :id
        ";

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->bindValue(':id',$id,PDO::PARAM_INT);
        $pdoStatement->execute();
        $dog = $pdoStatement->fetchObject(self::class);

        return $dog;
    }

    /**
     * Fin all dogs from database
     *
     * @return array
     */
    public static function findAll() : array
    {
        $sql = "
        SELECT *
        FROM `animal`
        WHERE `type` = ".self::TYPE_NAME
        ;

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $dogsArray = $pdoStatement->fetchAll(PDO::FETCH_CLASS,self::class);

        return $dogsArray;

    }

    /**
     * Insert a new dog in database
     *
     * @return boolean
     */
    public function insert() : bool 
    {
        $sql= "
        INSERT INTO `animal` VALUES (`name`,`post_date`,`born_date`,`castration`,`identification_number`,`height`,`weight`,`description`,`breed`, `type`)
        VALUES(
            :name,
            NOW(),
            :born_date,
            :castration,
            :identification_number,
            :height,
            :weight,
            :description,
            :breed,
            ".self::TYPE_NAME."
        )
        ";

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->bindValue(':name',$this->name,PDO::PARAM_STR);
        $pdoStatement->bindValue(':born_date',$this->born_date,PDO::PARAM_STR);
        $pdoStatement->bindValue(':castration',$this->castration,PDO::PARAM_BOOL);
        $pdoStatement->bindValue(':identification_number',$this->identification_number,PDO::PARAM_STR);
        $pdoStatement->bindValue(':height',$this->height,PDO::PARAM_INT);
        $pdoStatement->bindValue(':weight',$this->weight,PDO::PARAM_INT);
        $pdoStatement->bindValue(':description',$this->description,PDO::PARAM_STR);
        $pdoStatement->bindValue(':breed',$this->breed,PDO::PARAM_STR);
        $pdoStatement->bindValue(':type',$this->type,PDO::PARAM_STR);
        $pdoStatement->execute();

        $numRows = $pdoStatement->rowCount();

        return $numRows > 0;

    }

    /**
     * Update a dog in database
     *
     * @return boolean
     */
    public function update() : bool
    {
        $sql = "
        UPDATE `animal`
        SET
            name = :name,
            updated_at = NOW(),
            born_date = :born_date,
            castration = :castration,
            identification_number = :identification_number,
            height = :height,
            weight = :weight,
            description = :description,
            breed = :breed,
            WHERE id = :id";

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->bindValue(':id',$this->id,PDO::PARAM_STR);
        $pdoStatement->bindValue(':name',$this->name,PDO::PARAM_STR);
        $pdoStatement->bindValue(':born_date',$this->born_date,PDO::PARAM_STR);
        $pdoStatement->bindValue(':castration',$this->castration,PDO::PARAM_BOOL);
        $pdoStatement->bindValue(':identification_number',$this->identification_number,PDO::PARAM_STR);
        $pdoStatement->bindValue(':height',$this->height,PDO::PARAM_INT);
        $pdoStatement->bindValue(':weight',$this->weight,PDO::PARAM_INT);
        $pdoStatement->bindValue(':description',$this->description,PDO::PARAM_STR);
        $pdoStatement->bindValue(':breed',$this->breed,PDO::PARAM_STR);
        $pdoStatement->execute();

        $numRows =  $pdoStatement->rowCount();

        return $numRows > 0;

    }

    /**
     * Delete a dog in database
     *
     * @return boolean
     */
    public function delete() : bool
    {
        $sql = "
        DELETE 
        FROM `animal`
        WHERE `id` = :id";

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->bindValue(':id', $this->id, \PDO::PARAM_INT);
        $pdoStatement->execute();

        $numRows = $pdoStatement->rowCount();

        return $numRows > 0;
    }
}