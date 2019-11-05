<?php 

    date_default_timezone_set('Asia/Dhaka');
    if(isset($_POST['submit'])){
        session_start();

        $_SESSION['name'] = htmlentities($_POST['name']);

        $_SESSION['email'] = htmlentities($_POST['email']);

        $_SESSION['time'] = htmlentities( date('m/d/Y h:i:sa'));

        header('Location: page2.php');
    
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Session</title>
</head>
<body>
    <form action="page1.php" method="post">
        <input type="text" name="name" id="name" placeholder="Enter Name">
        <br>
        <input type="text" name="email" id="email" placeholder="Enter Email">
        <br>
        <input name="submit" type="submit" value="submit">
    </form>
</body>
</html>