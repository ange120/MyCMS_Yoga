<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../models/UserInfo.php';

class UserRepository extends Repository
{
    /**
     * @param string $email
     * @return User|null
     */
    public function findUserByEmail(string $email): ?User
    {
        $stmt = $this->database->prepare('
            SELECT * FROM users WHERE email = :email
        ');

        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {
            return null;
        }

        return new User(
            $user['email'],
            $user['password'],
            $user['role'],
            $user['uuid']
        );
    }

    /**
     * @param string $uuid
     * @return User|null
     */
    public function findUserByUuid(string $uuid): ?User
    {
        $stmt = $this->database->prepare('
            SELECT * FROM users WHERE `uuid` = :uuid
        ');

        $stmt->bindParam(':uuid', $uuid, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {
            return null;
        }
        return new User(
            $user['email'],
            $user['password'],
            $user['role'],
            $user['uuid']
        );
    }

    /**
     * @param $userUuid
     * @return mixed|null
     */
    public function getInfoUserByUuid($userUuid)
    {
        $stmt = $this->database->prepare('
            SELECT `name`,`user_name`,`age`,`role`,`email` FROM users WHERE uuid = :uuid
        ');

        $stmt->bindParam(':uuid', $userUuid, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {
            return null;
        }
        return $user;
    }


    /**
     * @param array $data
     * @return string
     */
    public function createUser(array $data): string

    {
        $pass = md5($data['password']);

        $user = new User($data['email'], $data['password']);
        $createUuid = $user->setUuid();
        $roleUser = 2;
        $stmt = $this->database->prepare('
            INSERT INTO  `users` ( `uuid`,`name`,`user_name`,`age`,`role`,`email`,`password`)
                VALUE (:uuid, :name, :user_name, :age, :role, :email, :password)
        ');
        $stmt->bindParam(':uuid', $createUuid, PDO::PARAM_STR);
        $stmt->bindParam(':name', $data['name'], PDO::PARAM_STR);
        $stmt->bindParam(':user_name', $data['userName'], PDO::PARAM_STR);
        $stmt->bindParam(':age', $data['age'], PDO::PARAM_STR);
        $stmt->bindParam(':role', $roleUser, PDO::PARAM_STR);
        $stmt->bindParam(':email', $data['email'], PDO::PARAM_STR);
        $stmt->bindParam(':password', $pass, PDO::PARAM_STR);

        $stmt->execute();

        return $createUuid;
    }

    public function getListUser ()
    {

    }

    /**
     * @param string $uuid
     * @param array $data
     */
    public function updateInfoUser(string $uuid, array $data)
    {
        $stmt = $this->database->prepare('
           UPDATE `user_info` SET `name` = :name,`user_name` = :user_name,
                                  `age` = :age, `role` = :role,
                                  `email` = :email
                                   WHERE `uuid` = :uuid
        ');

        $stmt->bindParam(':uuid', $uuid, PDO::PARAM_STR);
        $stmt->bindParam(':name', $data['name'], PDO::PARAM_STR);
        $stmt->bindParam(':user_name', $data['user_name'], PDO::PARAM_STR);
        $stmt->bindParam(':age', $data['age'], PDO::PARAM_STR);
        $stmt->bindParam(':role', $data['role'], PDO::PARAM_STR);
        $stmt->bindParam(':email', $data['email'], PDO::PARAM_STR);

        $stmt->execute();
    }


    public function deleteUserByUuid (string $uuid)
    {
        $stmt = $this->database->prepare('
            DELETE FROM `users` WHERE `uuid` = :uuid
        ');
        $stmt->bindParam(':uuid', $uuid, PDO::PARAM_STR);
        $stmt->execute();

    }

}
