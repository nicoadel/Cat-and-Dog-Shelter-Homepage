<?php

namespace App\Models;

use PDO;

class TeamModel {

    /**
     * Team member name
     *
     * @var string
     */
    private $name;

    /**
     * Team Member image
     *
     * @var string
     */
    private $image;

    /**
     * Team member Description
     *
     * @var string
     */
    private $description;

    /**
     * Team member Role
     *
     * @var string
     */
    private $role;

    const TABLE_NAME = 'team';

    /************************************** */
    //          GETTERS & SETTERS
    /************************************** */

    /**
     * Get team member name
     *
     * @return  string
     */ 
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * Set team member name
     *
     * @param  string  $name  Team member name
     *
     * @return  self
     */ 
    public function setName(string $name) : self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get team Member image
     *
     * @return  string
     */ 
    public function getImage() : string
    {
        return $this->image;
    }

    /**
     * Set team Member image
     *
     * @param  string  $image  Team Member image
     *
     * @return  self
     */ 
    public function setImage(string $image) : self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get team member Description
     *
     * @return  string
     */ 
    public function getDescription() : string
    {
        return $this->description;
    }

    /**
     * Set team member Description
     *
     * @param  string  $description  Team member Description
     *
     * @return  self
     */ 
    public function setDescription(string $description) : self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get team member Role
     *
     * @return  string
     */ 
    public function getRole() : string
    {
        return $this->role;
    }

    /**
     * Set team member Role
     *
     * @param  string  $role  Team member Role
     *
     * @return  self
     */ 
    public function setRole(string $role) : self
    {
        $this->role = $role;

        return $this;
    }

    /************************************** */
    //          CRUD METHODS
    /************************************** */

         /**
     * Find a team member by his id
     *
     * @param int $id
     * @return TeamModel|false
     */
    public static function find(int $id)
    {

        $sql = "
        SELECT *
        FROM `".self::TABLE_NAME."`
        WHERE id = :id
        ";

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->bindValue(':id',$id,PDO::PARAM_INT);
        $pdoStatement->execute();
        $user = $pdoStatement->fetchObject(self::class);

        return $user;
    }

    /**
     * Find all team members from database
     *
     * @return array
     */
    public static function findAll() : array
    {
        $sql = "
        SELECT *
        FROM `".self::TABLE_NAME;

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $usersArray = $pdoStatement->fetchAll(PDO::FETCH_CLASS,self::class);

        return $usersArray;

    }

    /**
     * Insert a new team member in database
     *
     * @return boolean
     */
    public function insert() : bool 
    {
        $sql= "
        INSERT INTO `".self::TABLE_NAME."`(`name`,`image`,`description`,`role`)
        VALUES(
            :name,
            :image,
            :description,
            :role,
        )
        ";

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->bindValue(':name',$this->name,PDO::PARAM_STR);
        $pdoStatement->bindValue(':image',$this->image,PDO::PARAM_STR);
        $pdoStatement->bindValue(':description',$this->description,PDO::PARAM_STR);
        $pdoStatement->bindValue(':role',$this->role,PDO::PARAM_STR);
        $pdoStatement->execute();

        $numRows = $pdoStatement->rowCount();

        return $numRows > 0;

    }

    /**
     * Update a team member in database
     *
     * @return boolean
     */
    public function update() : bool
    {
        $sql = "
        UPDATE `".self::TABLE_NAME."`
        SET
            name = :name,
            image = :image,
            description = :description,
            role = :role";

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->bindValue(':name',$this->name,PDO::PARAM_STR);
        $pdoStatement->bindValue(':image',$this->image,PDO::PARAM_STR);
        $pdoStatement->bindValue(':description',$this->description,PDO::PARAM_STR);
        $pdoStatement->bindValue(':role',$this->role,PDO::PARAM_INT);
        $pdoStatement->execute();

        $numRows =  $pdoStatement->rowCount();

        return $numRows > 0;

    }

    /**
     * Delete a team member in database
     *
     * @return boolean
     */
    public function delete() : bool
    {
        $sql = "
        DELETE 
        FROM `".self::TABLE_NAME."`
        WHERE `id` = :id";

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->bindValue(':id', $this->id, PDO::PARAM_INT);
        $pdoStatement->execute();

        $numRows = $pdoStatement->rowCount();

        return $numRows > 0;
    }

}