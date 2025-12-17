<?php

include "../config.php";

$id = $_GET['id'];
mysqli_query($conn, "delete from client where id = $id");
header("Location: list_clients.php");
?>