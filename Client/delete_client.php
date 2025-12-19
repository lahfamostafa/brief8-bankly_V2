<?php

include "../config.php";

$id = $_GET['id'];
$stm = mysqli_prepare($conn, "delete from client where id = ?");
mysqli_stmt_bind_param($stm , 'i' , $id);
mysqli_stmt_execute($stm);
header("Location: list_clients.php");
?>