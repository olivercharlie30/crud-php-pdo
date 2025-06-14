<?php



include_once("config.php");

function editUser($fullName, $userId){


    try {
        $pdo = connect();

        $stmt = $pdo->prepare("UPDATE userdata SET full_name = :newFullname WHERE id =:userId");
        $stmt->bindParam(':newFullname', $fullName);
        $stmt->bindParam(':userId', $userId);
        $stmt->execute();

        echo "edited user data!.";
        
    
    // TRY CATCH allows you to define a block of code to be tested for errors while it is being executed. 
    } catch (PDOException $e) {
        echo "edit user data failure:" .$e->getMessage();
        
    }

}

editUser("pangit choco", 9);