<?php

namespace Source\Related;

class Company
{
    private $company;
    /**
     * @var Address
     */
    //referencia um objeto Address
    private $address;
    private $team;
    private $products;

    public function bootCompany($company, $address)
    {
        $this->company = $company;
        $this->address = $address;
    }

    public function boot($company, Address $address)
    {
        $this->company = $company;
        $this->address = $address;
    }

    public function addProduct(Product $product)
    {
        $this->products[] = $product;
    }

    public function addTeamMember($job, $firstName, $lastName)
    {
        $this->team[] = new User($job, $firstName, $lastName);
    }

    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @return mixed
     */
    //O retorno obtido desse método e do objeto Address
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * @return array
     */
    public function getProducts()
    {
        return $this->products;
    }


}