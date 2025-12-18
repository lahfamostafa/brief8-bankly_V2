<?php include '../header.php'; 
$result = mysqli_query($conn,"select c.* , cl.nom as name_cl from compte c join client cl on c.client_id = cl.id");
?>
<style>
    .Comptes{
        color:blue;
    }
</style>
<h2 class="text-2xl font-bold mb-6">Liste des Compte</h2>

<div class="bg-white shadow rounded p-6">

    <div class="flex justify-between items-center mb-4">
        <h3 class="text-lg font-semibold">Compte</h3>
        <a href="add_compte.php"
           class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
            + Ajouter Compte
        </a>
    </div>
<?php if(mysqli_num_rows($result) > 0){ ?>

    <table class="min-w-full border border-gray-200">
        <thead class="bg-gray-100">
            <tr>
                <th class="border px-4 py-2 text-left">ID</th>
                <th class="border px-4 py-2 text-left">Numero commpte</th>
                <th class="border px-4 py-2 text-left">Client</th>
                <th class="border px-4 py-2 text-left">Solde</th>
                <th class="border px-4 py-2 text-center">Date creation</th>
                <th class="border px-4 py-2 text-center">Actions</th>
            </tr>
        </thead>
        
        <?php while($row = mysqli_fetch_assoc($result)) {?>
        <tbody>
            <tr class="hover:bg-gray-50">
                <td class="border px-4 py-2"><?= $row['id'] ?></td>
                <td class="border px-4 py-2"><?= $row['numero_commpte'] ?></td>
                <td class="border px-4 py-2"><?= $row['name_cl'] ?></td>
                <td class="border px-4 py-2"><?= $row['solde'] ?></td>
                <td class="border px-4 py-2"><?= $row['date_creation'] ?></td>
                <td class="border px-4 py-2 text-center">
                    <a href="update_compte.php?id=<?= $row['id'] ?>"
                    class="text-blue-600 hover:underline mr-3">
                        Modifier
                    </a>
                    <a href="delete_compte.php?id=<?= $row['id'] ?>" onclick="return confirm('supprimer ?')"
                    class="text-red-600 hover:underline">
                        Supprimer
                    </a>
                </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php }else{ ?>
        <p class="text-center text-gray-500">Acucun compte trouvé</p>
    <?php } ?>

</div>

<?php include '../footer.php'; ?>
