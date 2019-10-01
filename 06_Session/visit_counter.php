<?php
//Sesstion start
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Your Visit History</h2>

    <?php
        if(!isset($_SESSION['visits'])){
            echo 'This is your first visit';
        }else{
            echo  "You Previously visited this page on: <br>";
            foreach ($_SESSION['visits'] as $visit){
                echo date('d M Y h:i:s',$visit)."<br>";
            }
        }
    ?>
</body>
</html>


<?php
// add current date/time stamp to session array
$_SESSION['visits'][] = time();
print_r($_SESSION);
//session_destroy();
?>