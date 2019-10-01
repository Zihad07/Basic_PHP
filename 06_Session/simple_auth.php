<?php
session_start([
  'cookie_lifetime' => 15, //5 minute
]);


//echo md5('ami');
//session_destroy();
$error = false;

if(isset($_POST['username']) && isset($_POST['password'])){
    if('admin' == $_POST['username'] && '6c5b7de29192b42ed9cc6c7f635c92e0' == md5($_POST['password'])){
        $_SESSION['loggedin'] = true;
    }else{
        $_SESSION['loggedin'] = false;
        $error = true;
    }
}

if(isset($_POST['logout'])){
    $_SESSION['loggedin'] = false;
    session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Auth form</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
    <style>
        body {
            margin-top: 30px;
        }
    </style>
</head>
<body>
<div class="container">

    <div class="row">
        <div class="column column-60 column-offset-20">
            <h2>Simple Authentication</h2>
            <p>A sample project to perform Authentication operations by PHP Session</p>
        </div>
    </div>
    <div class="row">
        <div class="column column-60 column-offset-20">
            <?php
            if($_SESSION['loggedin']){
                echo  "Hello Admin, Welcome";
            }else{
                echo  "Hello Stranger, Login Below";
            }

            ?>
<!--            <p>Hellow Stranger</p>-->
        </div>
    </div>

    <div class="row">
        <div class="column column-60 column-offset-20">

            <?php if($error):?>
            <blockquote>Username or Password wrong</blockquote>
            <?php endif;?>

            <?php  if (false == $_SESSION['loggedin']):?>
            <form action="" method="POST">
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
                <label for="lname">Password</label>
                <input type="password" name="password" id="password">

                <button type="submit" class="button-primary" name="submit">LogIn</button>
            </form>

            <?php
            else:
            ?>

            <form action="simple_auth.php" method="POST">
                <input type="hidden" name="logout" value="1">
                <button type="submit" class="button-primary" name="submit">Logout</button>
            </form>

            <?php
            endif;
            ?>

        </div>
    </div>
</div>
</body>
</html>