<?php

class User {

    private $email;
    private $password;
    private $uuid;
    private $role;


    public function __construct(string $email, string $password, string $role = '', string $uuid = '')
    {
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
        $this->uuid = $uuid;

    }

    public function getEmail(): string
    {
        return $this->email;
    }


    public function getPassword(): string
    {
        return $this->password;
    }

    public function getUuid(): string
    {
        return $this->uuid;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function setUuid() : string
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < 10; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        return $randomString;
    }




}
