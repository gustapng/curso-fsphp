<?php

namespace Source\Contracts;

//cumprir o contrato e necessário implementar todos os recursos da interface
class User implements UserInterface
{
    private $firstName;
    private $lastName;
    private $email;

    public function __construct($firstName, $lastName, $email)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    //    public function setEmail($email)
    //    {
    //        $this->email = $email;
    //    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getEmail()
    {
        return $this->email;
    }




}