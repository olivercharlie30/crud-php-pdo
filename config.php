<?php

function connect(){

    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "staytuned";


   
// TRY CATCH allows you to define a block of code to be tested for errors while it is being executed. 
    try{

        $pdo = new PDO("mysql:host=$host;dbname=$dbname",$user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //echo "connected to database";
        return $pdo;

    }catch (PDOException $e){
        echo "connection failed:".$e->getMessage();
    }
}

connect();