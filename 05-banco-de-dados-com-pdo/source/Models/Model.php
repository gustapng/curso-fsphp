<?php

namespace Source\Models;

abstract class Model
{

    /** @var object|null */
    protected $data;

    /** @var \PDOException|null */
    protected $fail;

    /** @var string|null */
    protected $message;

    /**
     * @return object|null
     */
    public function data(): ?object
    {
        return $this->data;
    }

    /**
     * @return \PDOException
     */
    public function fail(): ?\PDOException
    {
        return $this->fail;
    }

    /**
     * @return string|null
     */
    public function message(): ?string
    {
        return $this->message;
    }

    protected function create()
    {

    }

    protected function read()
    {

    }

    protected function update()
    {

    }

    protected function delete()
    {

    }

    protected function safe(): ?array
    {

    }

    private function filter()
    {

    }
}