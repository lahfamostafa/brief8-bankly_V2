<?php
include "../header.php";
include "../config.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = mysqli_query($conn, "select * from client where id = '$id'");
    $row = mysqli_fetch_assoc($sql);
}
?>

<style>
    .Clients{
        color:blue;
    }
</style>
    <div class="container grid justify-center">
        <form action="update_client.php" method="post" class="grid justify-center gap-4">
            <input name="id" type="hidden" class="border py-3 px-4" value="<?= $row['id'] ?>">
            <input required name="nom" type="text" class="border py-3 px-4" value="<?= $row['nom'] ?>">
            <input required name="email" type="email" class="border py-3 px-4" value="<?= $row['email'] ?>">
            <input required name="cin" type="text" class="border py-3 px-4" value="<?= $row['CIN'] ?>">
            <input type="submit" value="Update" class="border py-3 px-4 bg-blue-400 text-white">
        </form>
    </div>
</body>
</html>
<?php
    if(isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['cin'])){
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $cin = $_POST['cin'];
        
        mysqli_query($conn, "update client set nom = '$nom' , email = '$email' , CIN = '$cin' where id = $id");
        echo "
        <script>
            alert(\"Client ' $nom ' mis a jour avec succès\");
            window.location.href='list_clients.php'
        </script>";
        
    }
?>