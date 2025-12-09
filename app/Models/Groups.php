<?php 

class Groups extends CoreModel {

    public function _construct() {
        parent::__construct();
    }

    public function getAllGroups() {
        return $this -> getAll("SELECT * FROM groups");
    }

    public function insertGroup($data) {
        $this -> insert("groups", $data);
    }
}