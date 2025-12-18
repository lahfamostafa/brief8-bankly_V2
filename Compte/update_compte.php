<?php
include "../header.php";
include "../config.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = mysqli_query($conn,"select c.* , cl.nom as name_cl from compte c join client cl on c.client_id = cl.id WHERE c.id = $id");
    $compte = mysqli_fetch_assoc($sql);
    $clients = mysqli_query($conn, "select * from client ");
}
?>

<style>
    .Comptes{
        color:blue;
    }
</style>
    <div class="container grid justify-center">
        <form method="post" class="grid justify-center gap-4">
            <input type="hidden" name="id" value="<?= $compte['id']?>" >
            <select name="client_id" required class="border py-3 px-4">
                <?php while($row= mysqli_fetch_assoc($clients)) { ?>
                <option value="<?= $row['id'] ?>" <?= $row['id']==$compte['client_id'] ? 'selected' : '' ?>><?= $row['nom']?></option>
                <?php } ?>
            </select>
            <input required name="num" value="<?= $compte['numero_commpte']?>" type="text" placeholder="Numero compte" class="border py-3 px-4">
            <input required name="solde" value="<?= $compte['solde']?>" type="number" step="0.01" placeholder="Solde" class="border py-3 px-4">
            <input type="submit" value="Modifier" class="border py-3 px-4 bg-blue-400 text-white">
        </form>
    </div>
</body>
</html>
<?php
    if(isset($_POST['id'] , $_POST['client_id'] , $_POST['num'] , $_POST['solde'])){
        $id = $_POST['id'];
        $client_id = $_POST['client_id'];
        $num = $_POST['num'];
        $solde = $_POST['solde'];
        
        mysqli_query($conn, "update compte set client_id = '$client_id' , numero_commpte = '$num' , solde = $solde where id = $id");
        echo "
        <script>
            alert(\"Compte mis a jour avec succès\");
            window.location.href='list_compte.php'
        </script>";
        
    }

?>