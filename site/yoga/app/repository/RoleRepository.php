<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/Roles.php';

class RoleRepository extends Repository
{
    /**
     * @param int $id
     * @return Roles|null
     */
    public function getNameById (int $id)
    {
        $stmt = $this->database->prepare('SELECT *  FROM user_role WHERE `id` = :id');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $userRole = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($userRole == false) {
            return null;
        }

        return new Roles(
            $id,$userRole['name']
        );

    }
}