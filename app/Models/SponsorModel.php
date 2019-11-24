<?php

namespace App\Models;

use PDO;

class SponsorModel extends CoreModel
{

    /**
     * Sponsor name
     *
     * @var string
     */
    private $name;

    /**
     * Sponsor Adress
     *
     * @var string
     */
    private $adress;

    /**
     * Sponsor Logo
     *
     * @var string
     */
    private $logo;

    /**
     * Sponsor Email
     *
     * @var string
     */
    private $email;

    const TABLE_NAME = 'Sponsor';

    /************************************** */
    //          GETTERS & SETTERS
    /************************************** */


    /**
     * Get sponsor name
     *
     * @return  string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set sponsor name
     *
     * @param  string  $name  Sponsor name
     *
     * @return  self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get sponsor Adress
     *
     * @return  string
     */
    public function getAdress(): string
    {
        return $this->adress;
    }

    /**
     * Set sponsor Adress
     *
     * @param  string  $adress  Sponsor Adress
     *
     * @return  self
     */
    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get sponsor Logo
     *
     * @return  string
     */
    public function getLogo(): string
    {
        return $this->logo;
    }

    /**
     * Set sponsor Logo
     *
     * @param  string  $logo  Sponsor Logo
     *
     * @return  self
     */
    public function setLogo(string $logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get sponsor Email
     *
     * @return  string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set sponsor Email
     *
     * @param  string  $email  Sponsor Email
     *
     * @return  self
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /************************************** */
    //          CRUD METHODS
    /************************************** */

    /**
     * Find a sponsor by his id
     *
     * @param int $id
     * @return SponsorModel|false
     */
    public static function find(int $id)
    {

        $sql = "
        SELECT *
        FROM `" . self::TABLE_NAME . "`
        WHERE id = :id
        ";

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->bindValue(':id', $id, PDO::PARAM_INT);
        $pdoStatement->execute();
        $sponsor = $pdoStatement->fetchObject(self::class);

        return $sponsor;
    }

    /**
     * Find all sponsors from database
     *
     * @return array
     */
    public static function findAll(): array
    {
        $sql = "
        SELECT *
        FROM `" . self::TABLE_NAME . "`";

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $sponsorsArray = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);

        return $sponsorsArray;
    }

    /**
     * Insert a new sponsor in database
     *
     * @return boolean
     */
    public function insert(): bool
    {
        $sql = "
        INSERT INTO `" . self::TABLE_NAME . "`(`logo`,`adress`,`email`,`name`)
        VALUES(
            :logo,
            :adress,
            :email,
            :name
        )
        ";

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->bindValue(':logo', $this->logo, PDO::PARAM_STR);
        $pdoStatement->bindValue(':adress', $this->adress, PDO::PARAM_STR);
        $pdoStatement->bindValue(':email', $this->email, PDO::PARAM_STR);
        $pdoStatement->bindValue(':name', $this->name, PDO::PARAM_STR);
        $pdoStatement->execute();

        $numRows = $pdoStatement->rowCount();

        return $numRows > 0;
    }

    /**
     * Update a sponsor in database
     *
     * @return boolean
     */
    public function update(): bool
    {
        $sql = "
        UPDATE `" . self::TABLE_NAME . "`
        SET
            logo = :logo,
            updated_at = NOW(),
            adress = :adress,
            email = :email,
            WHERE id = :id";

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->bindValue(':id', $this->id, PDO::PARAM_STR);
        $pdoStatement->bindValue(':logo', $this->logo, PDO::PARAM_STR);
        $pdoStatement->bindValue(':adress', $this->adress, PDO::PARAM_STR);
        $pdoStatement->bindValue(':email', $this->email, PDO::PARAM_STR);
        $pdoStatement->bindValue(':name', $this->name, PDO::PARAM_STR);
        $pdoStatement->execute();

        $numRows =  $pdoStatement->rowCount();

        return $numRows > 0;
    }

    /**
     * Delete a sponsor in database
     *
     * @return boolean
     */
    public function delete(): bool
    {
        $sql = "
        DELETE 
        FROM `" . self::TABLE_NAME . "`
        WHERE `id` = :id";

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->bindValue(':id', $this->id, PDO::PARAM_INT);
        $pdoStatement->execute();

        $numRows = $pdoStatement->rowCount();

        return $numRows > 0;
    }
}
