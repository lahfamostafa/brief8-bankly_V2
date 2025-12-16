<?php

    include "config.php";

    if(isset($_POST['nom']) && isset($_POST['age'])){
        $nom = $_POST['nom'];
        $age = $_POST['age'];
    
        $insert = "insert into classeyc (nom,age) values ('$nom','$age')";
        mysqli_query($conn ,$insert);
    }
    
    header("Location: index.php");
    $conn -> close();

?>