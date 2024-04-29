<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $_SESSION["user_name"] = "Salman06";
        $_SESSION["password"] = "!Salman06";
        
        // echo "session variables are set <br>";
        // echo $_SESSION["user_name"] . "<br>";
        // echo $_SESSION["password"];


    ?>
</body>
</html>