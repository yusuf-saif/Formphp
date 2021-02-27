<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        print_r($_POST)
    ?>
    <br>
    <?php
        $firstname = $_POST["First_Name"];
        $lastname = $_POST["Last_Name"];
        $email = $_POST["Email"];
        $password = $_POST["Password"];

        echo "{$firstname} <br> {$lastname} <br> {$email} <br> {$password}"
        
    ?>


</body>
</html>