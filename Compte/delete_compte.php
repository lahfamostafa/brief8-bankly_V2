<?php

include "../config.php";

$id = $_GET['id'];
mysqli_query($conn, "delete from compte where id = $id");
header("Location: list_compte.php");
?>