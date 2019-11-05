<?php 

    session_start();
    $name = $_SESSION['name'] ?? 'Guest';
    $email = $_SESSION['email'] ?? 'None';
    $time = $_SESSION['time'] ?? 'None';

    session_destroy();

    header('Location: page1.php');

?>

