<?php
    function dbConnect(){
        try{
            $username = 'root';
            $password = 'root';
            $conn = new pdo("mysql:host=localhost;dbname=users;", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;

        }   catch(PDOException $e){
            echo 'ERROR', $e->getMessage();
        }
    }
?>