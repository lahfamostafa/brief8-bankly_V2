<?php
include "config.php";
$select = "select*from classeyc";
$result = mysqli_query($conn , $select);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="select.php" method="post">
        <input type="text" name="nom" placeholder="Nom" required>
        <br><br>
        <input type="number" name="age" placeholder="Age" required>
        <br><br>
        <button type="submit">send</button>
    </form>
    <br><br>
    <h2>Liste des utilisateurs .</h2><br>

    <table>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Age</th>
        </tr>

        <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
            <td><?= $row['id']?></td>
            <td><?= $row['nom']?></td>
            <td><?= $row['age']?></td>
            <td><a href="edit.php?id=<?=$row['id'] ?>">update</a>
            |
            <a href="delete.php?id=<?=$row['id'] ?>">delete</a></td>
            </tr>
        <?php }?>
    </table>
</body>
</html>