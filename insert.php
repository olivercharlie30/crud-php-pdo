<?php

include_once("config.php");



function insert($fullname, $email, $address){



    try {

        $pdo = connect();
        $stmt = $pdo->prepare("INSERT INTO `userdata`(`full_name`, `email`, `address`)
                      VALUES (:fullname, :email, :address)");
        $stmt->bindParam(':fullname', $fullname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':address', $address);
        $stmt->execute();
        
        echo "new User Registered!.";
    // TRY CATCH allows you to define a block of code to be tested for errors while it is being executed. 
    } catch (PDOException $e) {
        echo "insert failured:" .$e->getMessage();
    }
}

insert();
