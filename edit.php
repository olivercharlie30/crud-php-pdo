<?php



include_once("config.php");



try {
    $pdo = connect()
    


} catch (PDOException $e) {
    echo "edit user data failure:" .$e->getMessage();
    
}