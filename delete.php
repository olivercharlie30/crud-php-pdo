<?php


include_once("config.php");



function deleteUser($userId){

        
    try {
        $pdo = connect();

        $stmt = $pdo->prepare("DELETE FROM userdata WHERE id = :userId");
        $stmt->bindParam(':userId', $userId);
        $stmt->execute();

        echo "deleted user data!.";
// TRY CATCH allows you to define a block of code to be tested for errors while it is being executed. 
    } catch (PDOException $e) {
        echo "delete failured:" .$e->getMessage();
    }

}

deleteUser();