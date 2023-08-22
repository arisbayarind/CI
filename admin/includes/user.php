<?php
class User{
    public function find_all_user(){
        global $database;
        $result_set = $database->query("SELECT * from user");
        return $result_set;
    }
}

$user = new User();

?>