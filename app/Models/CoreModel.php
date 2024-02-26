<?php

namespace App\Models;


abstract class CoreModel
{

    /**
     * data id
     *
     * @var int
     */
    private $id;

    /**
     * data creation date
     *
     * @var string
     */
    protected $created_at;

    /**
     * data updating date
     *
     * @var string
     */
    protected $updated_at;

    /************************************** */
    //          GETTERS & SETTERS
    /************************************** */
    
    /**
     * Get animal Id
     *
     * @return  string
     */
    protected function getId(): int
    {
        return $this->id;
    }


    /**
     * Get date when the animal was created in database
     *
     * @return  string
     */
    protected function getCreatedAt(): string
    {
        return $this->created_at;
    }

    /**
     * Get date when the animal profile was updated
     *
     * @return  string
     */
    protected function getUpdatedAt(): string
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
    public function setUpdatedAt(string $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }
    
    /************************************** */
    //          CRUD METHODS
    /************************************** */

    /**
     * Method to handle both update and insert 
     *
     * @return void
     */
    protected function save()
    {
        if(isset($this->id)){
            $this->update();
        }else{
            $this->insert();
        }

    }

    abstract protected static function find(int $id);

    abstract protected static function findAll();

    abstract protected function insert();

    abstract protected function update();

    abstract protected function delete();
}
