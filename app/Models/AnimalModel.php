<?php

namespace App\Models;

use DateTime;

abstract class AnimalModel extends CoreModel
{

    /**
     * Animal Name
     *
     * @var string
     */
    protected $name;

    /**
     * Animal Gender
     *
     * @var string
     */
    protected $gender;

    /**
     * Animal Birthdate
     *
     * @var string
     */
    protected $born_date;

    /**
     * Animal Castration
     *
     * @var boolean
     */
    protected $castration;

    /**
     * Animal official identification number
     *
     * @var string
     */
    protected $identification_number;

    /**
     * Animal Height
     *
     * @var int
     */
    protected $height;

    /**
     * Animal Weight
     *
     * @var int
     */
    protected $weight;

    /**
     * Animal Description
     *
     * @var string
     */
    protected $description;

    /**
     * Animal breed
     *
     * @var string
     */
    protected $breed;

    /**
     * Animal Type
     *
     * @var string
     */
    protected $type;

    /************************************** */
    //          GETTERS & SETTERS
    /************************************** */

    /**
     * Get animal Name
     *
     * @return  string
     */
    public function getName(): string
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
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get animal Gender
     *
     * @return  string
     */ 
    public function getGender() : string
    {
        return $this->gender;
    }

    /**
     * Set animal Gender
     *
     * @param  string  $gender  Animal Gender
     *
     * @return  self
     */ 
    public function setGender(string $gender) : self
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get animal Birthdate
     *
     * @return  string
     */
    public function getBornDate(): string
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
    public function setBornDate(string $born_date): self
    {
        $this->born_date = $born_date;

        return $this;
    }

    /**
     * Get animal Castration
     *
     * @return  boolean
     */
    public function getCastration(): bool
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
    public function setCastration(bool $castration): self
    {
        $this->castration = $castration;

        return $this;
    }

    /**
     * Get animal official identification number
     *
     * @return  string
     */
    public function getIdentificationNumber(): string
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
    public function setIdentificationNumber(string $identification_number): self
    {
        $this->identification_number = $identification_number;

        return $this;
    }

    /**
     * Get animal Height
     *
     * @return  int
     */
    public function getHeight(): int
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
    public function setHeight(int $height): self
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get animal Weight
     *
     * @return  int
     */
    public function getWeight(): int
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
    public function setWeight(int $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get animal Description
     *
     * @return  string
     */
    public function getDescription(): string
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
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get animal breed
     *
     * @return  string
     */
    public function getBreed(): string
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
    public function setBreed(string $breed): self
    {
        $this->breed = $breed;

        return $this;
    }

    /**
     * Get animal Type
     *
     * @return  string
     */
    public function getType(): string
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
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

}
