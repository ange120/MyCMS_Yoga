<?php

require_once 'Repository.php';

class NewsArticleRepository extends Repository
{
    /**
     * @param int $id
     * @return Roles|null
     */
    public function getAllNews ()
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