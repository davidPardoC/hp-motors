<?php 
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $databaseName = 'hp-motors';

    try {
       $dbConnection = new PDO("mysql:host=$server;dbname=$databaseName;",$username,$password);
    } catch (PDOException $e) {
        die("Connection failes:" .$e->getMessage());
    }
?>