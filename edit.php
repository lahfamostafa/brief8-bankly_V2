<?php

include "config.php";

$id = $_GET['id'];
$result = mysqli_query($conn , "select * from classeyc where id = $id");
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="POST">
        <input type="number"  name="id" value="<?=$row['id']?>">
        <br><br>
        <input type="text" name="nom" value="<?=$row['nom']?>">
        <br><br>
        <input type="number" name="age" value="<?=$row['age']?>">
        <br><br>
        <button type="submit">update</button>
    </form>

</body>
</html>