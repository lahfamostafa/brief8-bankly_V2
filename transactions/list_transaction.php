<?php include '../header.php'; 
$result = mysqli_query($conn,"select t.* , cl.nom as nom , c.numero_commpte as num_cmpt 
                                from transactions t join compte c 
                                on t.compte_id = c.id 
                                join client cl on c.client_id = cl.id");
?>
<style>
    .Transactions{
        color:blue;
    }
</style>
<h2 class="text-2xl font-bold mb-6">Liste des transactions</h2>

<div class="bg-white shadow rounded p-6">

    <div class="flex justify-between items-center mb-4">
        <h3 class="text-lg font-semibold">transactions</h3>
        <a href="add_transaction.php"
           class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
            + Ajouter transaction
        </a>
    </div>
<?php if(mysqli_num_rows($result) > 0){ ?>

    <table class="min-w-full border border-gray-200">
        <thead class="bg-gray-100">
            <tr>
                <th class="border px-4 py-2 text-left">ID</th>
                <th class="border px-4 py-2 text-left">Compte</th>
                <th class="border px-4 py-2 text-left">Client</th>
                <th class="border px-4 py-2 text-left">Type</th>
                <th class="border px-4 py-2 text-center">Montant</th>
                <th class="border px-4 py-2 text-center">Description</th>
                <th class="border px-4 py-2 text-center">Date transaction</th>
            </tr>
        </thead>
        
        <?php while($row = mysqli_fetch_assoc($result)) {?>
        <tbody>
            <tr class="hover:bg-gray-50">
                <td class="border px-4 py-2"><?= $row['id'] ?></td>
                <td class="border px-4 py-2"><?= $row['num_cmpt'] ?></td>
                <td class="border px-4 py-2"><?= $row['nom'] ?></td>
                <td class="border px-4 py-2"><?= $row['typeT'] ?></td>
                <td class="border px-4 py-2"><?= $row['montant'] ?></td>
                <td class="border px-4 py-2"><?= $row['descript'] ?></td>
                <td class="border px-4 py-2"><?= $row['dateT'] ?></td>
            </tr>
        </tbody>
        <?php } ?>
    </table>
    <?php }else{ ?>
        <p class="text-center text-gray-500">Acucun transaction trouvé</p>
    <?php } ?>

</div>

<?php include '../footer.php'; ?>
