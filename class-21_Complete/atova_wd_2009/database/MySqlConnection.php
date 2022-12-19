<?php

class MySqlConnection{
    
    public function connect(){
        $conn = new mysqli('localhost','root','','atova_wd_2009');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
        return $conn;
    }
}