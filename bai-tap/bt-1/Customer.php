<?php

class King {
    private $name;
    private $date_of_birth;
    private $address;

    /**
     * Customer constructor.
     * @param $name
     * @param $date_of_birth
     * @param $address
     */
    public function __construct($name, $date_of_birth, $address)
    {
        $this->name = $name;
        $this->date_of_birth = $date_of_birth;
        $this->address = $address;
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDateOfBirth()
    {
        return $this->date_of_birth;
    }

    /**
     * @param mixed $date_of_birth
     */
    public function setDateOfBirth($date_of_birth)
    {
        $this->date_of_birth = $date_of_birth;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }



}
