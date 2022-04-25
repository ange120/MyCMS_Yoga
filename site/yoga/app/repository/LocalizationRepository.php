<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/User.php';

class LocalizationRepository extends Repository
{
    /**
     * @return mixed|void
     */
    public function getLocalization ()
    {
        $arrayLocal = $this->getDbLocal();
        foreach ($arrayLocal as $value){
            if($value['status'] == 1){
                return $value['name'];
            }
        }
    }

    /**
     * @return array|null
     */
    private function getDbLocal ()
    {
        $localization = $this->database->getRows('SELECT `name`, `status`  FROM location');
        if ($localization == false) {
            return null;
        }

        return $localization;
    }

    public function updateLocalization (string $name)
    {
        $this->disableLocalization(0);

        $stmt = $this->database->prepare('
           UPDATE `location` SET `status` = 1 WHERE `name` = :name');

        $stmt->bindParam(':name', $name, PDO::PARAM_STR);

        $stmt->execute();
    }

    private function disableLocalization (int $status)
    {
        $name = $this->getLocalization();

        $stmt = $this->database->prepare('
           UPDATE `location` SET `status` = :status WHERE `name` = :name');

        $stmt->bindParam(':status', $status, PDO::PARAM_STR);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);

        $stmt->execute();
    }
}