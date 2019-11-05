<?php 
    include ("db_config.php");

    function sanitize($value){
        global $connection;
        return mysqli_real_escape_string($connection,$value);
    }



?>