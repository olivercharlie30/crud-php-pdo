<?php

 include_once("config.php");
 include_once("insert.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="container">
        <div class="wrapperForm">
            <form action="insert.php" method="POST">
                <input type="text" name="c" placeholder="enter full name"/>
                <input type="email" name="email" placeholder="enter email"/>
                <input type="text" name="address" placeholder="enter address"/>
                <button name="btnRegister">Register</button>
            </form>
        </div>
    </div>
</body>
</html>