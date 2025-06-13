<?php


include_once("config.php");



function deleteUser($userId){

        
    try {
        $pdo = connect();

        $stmt = $pdo->prepare("DELETE FROM userdata WHERE id = :userId");
        $stmt->bindParam(':userId', $userId);
        $stmt->execute();

        echo "deleted user data!.";

    } catch (PDOException $e) {
        echo "delete failured:" .$e->getMessage();
    }

}

deleteUser();