<?php

namespace App\Models;

use PDO;

class UserModel {

    /**
     * User username
     *
     * @var string
     */
    private $username;

    /**
     * User password
     *
     * @var string
     */
    private $password;

    /**
     * User email
     *
     * @var string
     */
    private $email;

    /**
     * User role_id
     *
     * @var int
     */
    private $role;

    const TABLE_NAME = 'user';

    /************************************** */
    //          GETTERS & SETTERS
    /************************************** */

    /**
     * Get user username
     *
     * @return  string
     */ 
    public function getUsername() : string
    {
        return $this->username;
    }

    /**
     * Set user username
     *
     * @param  string  $username  User username
     *
     * @return  self
     */ 
    public function setUsername(string $username) : self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get user password
     *
     * @return  string
     */ 
    public function getPassword() : string
    {
        return $this->password;
    }

    /**
     * Set user password
     *
     * @param  string  $password  User password
     *
     * @return  self
     */ 
    public function setPassword(string $password) : self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get user email
     *
     * @return  string
     */ 
    public function getEmail() : string
    {
        return $this->email;
    }

    /**
     * Set user email
     *
     * @param  string  $email  User email
     *
     * @return  self
     */ 
    public function setEmail(string $email) : self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get user role_id
     *
     * @return  int
     */ 
    public function getRole() : int
    {
        return $this->role;
    }

    /**
     * Set user role_id
     *
     * @param  int  $role  User role_id
     *
     * @return  self
     */ 
    public function setRole(int $role) : self
    {
        $this->role = $role;

        return $this;
    }

    /************************************** */
    //          CRUD METHODS
    /************************************** */

     /**
     * Find a user by his id
     *
     * @param int $id
     * @return UserModel|false
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
     * Find all users from database
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
     * Insert a new user in database
     *
     * @return boolean
     */
    public function insert() : bool 
    {
        $sql= "
        INSERT INTO `".self::TABLE_NAME."`(`username`,`password`,`email`,`role`)
        VALUES(
            :username,
            :password,
            :email,
            :role,
        )
        ";

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->bindValue(':username',$this->username,PDO::PARAM_STR);
        $pdoStatement->bindValue(':password',$this->password,PDO::PARAM_STR);
        $pdoStatement->bindValue(':email',$this->email,PDO::PARAM_STR);
        $pdoStatement->bindValue(':role',$this->role,PDO::PARAM_INT);
        $pdoStatement->execute();

        $numRows = $pdoStatement->rowCount();

        return $numRows > 0;

    }

    /**
     * Update a user in database
     *
     * @return boolean
     */
    public function update() : bool
    {
        $sql = "
        UPDATE `".self::TABLE_NAME."`
        SET
            username = :username,
            password = :password,
            email = :email,
            role = :role";

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->bindValue(':username',$this->username,PDO::PARAM_STR);
        $pdoStatement->bindValue(':password',$this->password,PDO::PARAM_STR);
        $pdoStatement->bindValue(':email',$this->email,PDO::PARAM_STR);
        $pdoStatement->bindValue(':role',$this->role,PDO::PARAM_INT);
        $pdoStatement->execute();

        $numRows =  $pdoStatement->rowCount();

        return $numRows > 0;

    }

    /**
     * Delete a user in database
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
        $pdoStatement->bindValue(':id', $this->id, \PDO::PARAM_INT);
        $pdoStatement->execute();

        $numRows = $pdoStatement->rowCount();

        return $numRows > 0;
    }
}