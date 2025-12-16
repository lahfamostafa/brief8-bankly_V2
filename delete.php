<?php

include "config.php";

$id = $_GET['id'];
$delete = "delete from classeyc where id=$id";
mysqli_query($conn,$delete);

header("Location: index.php")

?>