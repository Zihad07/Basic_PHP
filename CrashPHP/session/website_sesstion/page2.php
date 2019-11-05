<?php 

    session_start();
    $name = $_SESSION['name'] ?? 'Guest';
    $email = $_SESSION['email'] ?? 'None';
    $time = $_SESSION['time'] ?? 'None';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Session | page2</title>
</head>
<body>
    <h1>Hello Session</h1>
    <h2>
        Thank you <?php echo $name?>, You have subscribe with
        the eamil <?php echo $email?><br>
        At Time : <?php echo $time?>
    </h2>


    <a href="page3.php">Logout</a>
</body>
</html>