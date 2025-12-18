<?php
include "../header.php";
$result = mysqli_query($conn,"select * from client");
?>

<style>
    .Comptes{
        color:blue;
    }
</style>
    <div class="container grid justify-center">
        <form action="add_compte.php" method="post" class="grid justify-center gap-4">
            <select name="client_id" required class="border py-3 px-4">
                <option disabled selected>-- Choisir votre client --</option>
                <?php while($row = mysqli_fetch_assoc($result)) { ?>
                <option value="<?= $row['id'] ?>"><?= $row['nom']?></option>
                <?php } ?>
            </select>
            <input required name="num" type="text" placeholder="Numero compte" class="border py-3 px-4">
            <input required name="solde" type="number" step="0.01" placeholder="Solde" class="border py-3 px-4">
            <input type="submit" value="Ajouter" class="border py-3 px-4 bg-blue-400 text-white">
        </form>
    </div>
</body>
</html>
<?php
    if(isset($_POST['num']) && isset($_POST['solde']) && isset($_POST['client_id'])){
        $client_id = $_POST['client_id'];
        $num = $_POST['num'];
        $solde = $_POST['solde'];
        
        mysqli_query($conn, "insert into compte (numero_commpte , solde, client_id) value('$num' , '$solde' , '$client_id')");
        echo "
        <script>
            alert('Compte ajouté avec succès');
            window.location.href='list_compte.php'
        </script>";
        
    }
?>