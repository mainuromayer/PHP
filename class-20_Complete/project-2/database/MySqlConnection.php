<?php

class MySqlConnection{

    public function connect(){
        $connection = new mysqli('localhost', 'root', '', 'project-2');
        if ($connection->connect_error) {
            die("Connection Failed : " . $connection->connect_error);
        }
        return $connection;
    }
}

?>