<?php

namespace Source\Bank;

use Source\App\Trigger;
use Source\App\User;

//classe abstrata serve como modelo de implementação
abstract class Account
{
    protected $branch;
    protected $account;
    protected $client;
    protected $balance;

    /**
     * @param $branch
     * @param $account
     * @param $client
     * @param $balance
     */
    protected function __construct($branch, $account, User $client, $balance)
    {
        $this->branch = $branch;
        $this->account = $account;
        $this->client = $client;
        $this->balance = $balance;
    }

    public function extract()
    {
        $extract = ($this->balance >= 1 ? Trigger::ACCEPT : Trigger::ERROR);
        Trigger::show("Extrato atual: {$this->toBrl($this->balance)}", $extract);
    }

    protected function toBrl($value)
    {
        return "R$ " . number_format($value, "2", ",", ".");
    }

    //métodos abstratos invertem a abstação para implementar essa classe tem que implementar
    //os métodos a seguir na classe filha
    abstract public function deposit($value);
    abstract public function withdraw($value);

}