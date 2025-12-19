<?php
include "../header.php";
$result = mysqli_query($conn,"select c.* , cl.nom as name_cl from compte c join client cl on c.client_id = cl.id");
?>

<style>
    .Transactions{
        color:blue;
    }
</style>
    <div class="container grid justify-center">
        <form action="add_transaction.php" method="post" class="grid justify-center gap-4">
            <select name="compte_id" required class="border py-3 px-4">
                <option disabled selected>-- Compte bancaire --</option>
                <?php while($row = mysqli_fetch_assoc($result)) { ?>
                <option value="<?= $row['id'] ?>"><?= $row['numero_commpte']?> - <?= $row['name_cl']?> (<?= $row['solde']?> MAD)</option>
                <?php } ?>
            </select>
            <select name="type" required class="border py-3 px-4">
                <option disabled selected>-- Type transaction --</option>
                <option value="depot">Depot</option>
                <option value="retrait">Retrait</option>
            </select>
            <input required name="montant" type="number" step="0.01" placeholder="Montant" class="border py-3 px-4">
            <input required name="description" type="text" step="0.01" placeholder="Description" class="border py-3 px-4">
            <input type="submit" value="Ajouter" class="border py-3 px-4 bg-blue-400 text-white">
        </form>
    </div>
</body>
</html>
<?php
    if(isset($_POST['type'] , $_POST['description'] , $_POST['compte_id'] , $_POST['montant'])){
        $compte_id = $_POST['compte_id'];
        $type = $_POST['type'];
        $description = $_POST['description'];
        $montant = $_POST['montant'];
        
        $stm = mysqli_prepare($conn, "insert into transactions (typeT , montant , compte_id , descript) value(? , ? , ? , ?)");
        mysqli_stmt_bind_param($stm , 'sdis' , $type , $montant , $compte_id , $description);
        mysqli_stmt_execute($stm);
        echo "
        <script>
            alert('Transaction ajouté avec succès');
            window.location.href='list_transaction.php'
        </script>";
        
    }
?>