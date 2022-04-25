<?php

require_once __DIR__.'../../Config/Database.php';

class Repository {
    protected $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    /**
     * @param string $table
     * @return PDOStatement
     * @throws Exception
     */
    public function getColumns (string $table)
    {
        $columns = [];
        $sql =  $this->database->query("SELECT * FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME= '{$table}'");
        $sql->execute();
        $Table = $sql->fetchAll(PDO::FETCH_ASSOC);
        foreach ($Table as  $value){
            $columns[] = $value['COLUMN_NAME'];
        }
        return  $columns;
    }
}