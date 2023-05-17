<?php

namespace Source\Contracts;

interface UserInterface
{
    //classes que implementem esse contrato é obrigado a implementar essa assinatura

    //construtor só passa a fazer sentido se o construtor sempre for fixo ex: receber dados de conexão
    //do banco

    //public function __construct($firstName, $lastName, $email, $passwd);

    //public function setEmail($email);

    public function getFirstName();

    public function getLastName();

    public function getEmail();

}