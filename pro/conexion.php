<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'prousuario';

    try{
        $conn = new PDO("mysql:host=$server;dbname=$db;",$username,$password);
    }catch(PDOException $e){
        die('Conexion fallida' .$e->getMessage());
    }
?>