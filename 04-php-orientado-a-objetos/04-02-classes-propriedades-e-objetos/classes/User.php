<?php

namespace classes;
/**
 *
 */
class User
{
    public $firstName;
    public $lastName;
    public $email;

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param $firstName
     * @return void
     */
    public function setFirstName($firstName)
    {
        $this->firstName = htmlspecialchars($firstName);
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param $lastName
     * @return void
     */
    public function setLastName($lastName): void
    {
        $this->lastName = htmlspecialchars($lastName);
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Valida o e-mail do usuário em um formato válido!
     * @param $email
     * @return bool
     */
    public function setEmail($email): bool
    {
        $this->email = $email;
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }

}