<?php

class CoreModel {
    private $conn;
    public function __construct() {
        $this -> conn = Database::connectPDO();
    }

    protected function getAll(string $sql) {
        $query = $this -> conn -> prepare($sql);
        $query -> execute();
        $result = $query -> fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    protected function insert(string $table, array $data) {
        $sql = "INSERT INTO $table(name, email, password) VALUES(:name, :email, :password)";
        $query = $this -> conn -> prepare($sql);
        $query -> execute($data);
    }
}


