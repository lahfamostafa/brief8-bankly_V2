<?php
    include "config.php";

    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $age = $_POST['age'];

    mysqli_query($conn, "update classeyc set nom = '$nom' , age = $age where id = $id");
    header("Location: index.php");
    exit;
?>