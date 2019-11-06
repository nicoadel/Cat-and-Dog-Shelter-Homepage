<?php

namespace App\Models;

abstract class CoreModel {

    //TODO: Typehint Setters Return
    /**
     * Animal Id
     *
     * @var string
     */
    private $id;

    /**
     * Animal Name
     *
     * @var string
     */
    private $name;

    /**
     * Date when the animal was created in database
     *
     * @var string
     */
    private $post_date;

    /**
     * Animal Birthdate
     *
     * @var string
     */
    private $born_date;

    /**
     * Date when the animal profile was updated
     *
     * @var string
     */
    private $updated_at;

    /**
     * Animal Castration
     *
     * @var boolean
     */
    private $castration;

    /**
     * Animal official identification number
     *
     * @var string
     */
    private $identification_number;

    /**
     * Animal Height
     *
     * @var int
     */
    private $height;

    /**
     * Animal Weight
     *
     * @var int
     */
    private $weight;

    /**
     * Animal Description
     *
     * @var int
     */
    private $description;

    /**
     * Animal breed
     *
     * @var string
     */
    private $breed;

    /**
     * Animal Type
     *
     * @var string
     */
    private $type;

    /**
     * Get animal Id
     *
     * @return  string
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get animal Name
     *
     * @return  string
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set animal Name
     *
     * @param  string  $name  Animal Name
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get date when the animal was created in database
     *
     * @return  string
     */ 
    public function getPost_date()
    {
        return $this->post_date;
    }

    /**
     * Get animal Birthdate
     *
     * @return  string
     */ 
    public function getBorn_date()
    {
        return $this->born_date;
    }

    /**
     * Set animal Birthdate
     *
     * @param  string  $born_date  Animal Birthdate
     *
     * @return  self
     */ 
    public function setBorn_date(string $born_date)
    {
        $this->born_date = $born_date;

        return $this;
    }

    /**
     * Get date when the animal profile was updated
     *
     * @return  string
     */ 
    public function getUpdated_at()
    {
        return $this->updated_at;
    }

    /**
     * Set date when the animal profile was updated
     *
     * @param  string  $updated_at  Date when the animal profile was updated
     *
     * @return  self
     */ 
    public function setUpdated_at(string $updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * Get animal Castration
     *
     * @return  boolean
     */ 
    public function getCastration()
    {
        return $this->castration;
    }

    /**
     * Set animal Castration
     *
     * @param  boolean  $castration  Animal Castration
     *
     * @return  self
     */ 
    public function setCastration(bool $castration)
    {
        $this->castration = $castration;

        return $this;
    }

    /**
     * Get animal official identification number
     *
     * @return  string
     */ 
    public function getIdentification_number()
    {
        return $this->identification_number;
    }

    /**
     * Set animal official identification number
     *
     * @param  string  $identification_number  Animal official identification number
     *
     * @return  self
     */ 
    public function setIdentification_number(string $identification_number)
    {
        $this->identification_number = $identification_number;

        return $this;
    }

    /**
     * Get animal Height
     *
     * @return  int
     */ 
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set animal Height
     *
     * @param  int  $height  Animal Height
     *
     * @return  self
     */ 
    public function setHeight(int $height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get animal Weight
     *
     * @return  int
     */ 
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set animal Weight
     *
     * @param  int  $weight  Animal Weight
     *
     * @return  self
     */ 
    public function setWeight(int $weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get animal Description
     *
     * @return  int
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set animal Description
     *
     * @param  int  $description  Animal Description
     *
     * @return  self
     */ 
    public function setDescription(int $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get animal breed
     *
     * @return  string
     */ 
    public function getBreed()
    {
        return $this->breed;
    }

    /**
     * Set animal breed
     *
     * @param  string  $breed  Animal breed
     *
     * @return  self
     */ 
    public function setBreed(string $breed)
    {
        $this->breed = $breed;

        return $this;
    }

    /**
     * Get animal Type
     *
     * @return  string
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set animal Type
     *
     * @param  string  $type  Animal Type
     *
     * @return  self
     */ 
    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }
}