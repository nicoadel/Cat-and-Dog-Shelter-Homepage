<?php

namespace App\Models;

use PDO;

class ReportModel extends CoreModel
{

    /**
     * Report title
     *
     * @var string
     */
    private $title;

    /**
     * Report description
     *
     * @var string
     */
    private $description;

    /**
     * Report image
     *
     * @var string
     */
    private $image;

    const TABLE_NAME = 'report';

    /************************************** */
    //          GETTERS & SETTERS
    /************************************** */

    /**
     * Get report title
     *
     * @return  string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set report title
     *
     * @param  string  $title  Report title
     *
     * @return  self
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get report description
     *
     * @return  string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set report description
     *
     * @param  string  $description  Report description
     *
     * @return  self
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get report image
     *
     * @return  string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * Set report image
     *
     * @param  string  $image  Report image
     *
     * @return  self
     */
    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }


    /************************************** */
    //          CRUD METHODS
    /************************************** */

    /**
     * Find a report by his id
     *
     * @param int $id
     * @return ReportModel|false
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
        $report = $pdoStatement->fetchObject(self::class);

        return $report;
    }

    /**
     * Find all reports from database
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
        $reportsArray = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);

        return $reportsArray;
    }

    /**
     * Insert a new report in database
     *
     * @return boolean
     */
    public function insert(): bool
    {
        $sql = "
        INSERT INTO `" . self::TABLE_NAME . "`(`title`,`image`,`description`)
        VALUES(
            :title,
            :image,
            :description,
        )
        ";

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->bindValue(':title', $this->title, PDO::PARAM_STR);
        $pdoStatement->bindValue(':image', $this->image, PDO::PARAM_STR);
        $pdoStatement->bindValue(':description', $this->description, PDO::PARAM_STR);
        $pdoStatement->execute();

        $numRows = $pdoStatement->rowCount();

        return $numRows > 0;
    }

    /**
     * Update a report in database
     *
     * @return boolean
     */
    public function update(): bool
    {
        $sql = "
        UPDATE `" . self::TABLE_NAME . "`
        SET
            title = :title,
            updated_at = NOW(),
            image = :image,
            description = :description,
            WHERE id = :id";

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->bindValue(':id', $this->id, PDO::PARAM_STR);
        $pdoStatement->bindValue(':title', $this->title, PDO::PARAM_STR);
        $pdoStatement->bindValue(':image', $this->image, PDO::PARAM_STR);
        $pdoStatement->bindValue(':description', $this->description, PDO::PARAM_STR);
        $pdoStatement->execute();

        $numRows =  $pdoStatement->rowCount();

        return $numRows > 0;
    }

    /**
     * Delete a report in database
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
        $pdoStatement->bindValue(':id', $this->id, \PDO::PARAM_INT);
        $pdoStatement->execute();

        $numRows = $pdoStatement->rowCount();

        return $numRows > 0;
    }
}
