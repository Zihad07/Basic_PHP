<?php 

    if(isset($_POST['submit'])){
        // echo "form submit";

        $name = array('nahid','student','teacher','admin');

        $minimum = 5;
        $maximum = 10;

        $username = $_POST['username'];
        $password = $_POST['password'];

        if (strlen($username) < $minimum){
            echo "Username has to be longer than five";
        }elseif(strlen($username) > $maximum){
            echo "Username can not be longer than 10";
        }elseif(!in_array($username,$name)){
            echo "Sorry you are not allowed";
        }else{
            echo "<h2>Welecome</h2>";
            echo "<p>Your Username : {$username}</p>";
            echo "<p>Your Password : {$password}</p>";
        }


    }

    if(isset($_POST['logout'])){
        header("Location: form,php");
        die();
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="form.php">
        <input type="submit" value="logout" name="logout">
    </form>
</body>
</html>