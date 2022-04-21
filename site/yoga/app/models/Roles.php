<?php

class Roles
{
    private $id;
    private $name;


    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function getId () : int
    {
        return $this->id;
    }

    public function getName () : int
    {
        return $this->name;
    }

}