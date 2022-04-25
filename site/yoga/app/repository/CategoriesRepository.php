<?php

require_once 'Repository.php';

class CategoriesRepository extends Repository
{
    public function getActiveRepository (string $localization)
    {
        return $this->database->getRows('SELECT id, name_'.$localization.' AS name, button_'.$localization.' AS button FROM categories WHERE `satus` = 1');
    }
}