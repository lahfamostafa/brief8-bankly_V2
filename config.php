<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "Bankly_V2";

    $conn = mysqli_connect($server , $user , $password , $db);

    if(!$conn){
        die("connection erronéz : ".mysql_connect_error());
    }
?>