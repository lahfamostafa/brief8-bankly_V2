<?php include '../header.php'; 
$result = mysqli_query($conn,"select * from client");
?>
<style>
    .Clients{
        color:blue;
    }
</style>
<h2 class="text-2xl font-bold mb-6">Liste des Clients</h2>

<div class="bg-white shadow rounded p-6">

    <div class="flex justify-between items-center mb-4">
        <h3 class="text-lg font-semibold">Clients</h3>
        <a href="add_client.php"
           class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
            + Ajouter Client
        </a>
    </div>
<?php if(mysqli_num_rows($result) > 0){ ?>

    <table class="min-w-full border border-gray-200">
        <thead class="bg-gray-100">
            <tr>
                <th class="border px-4 py-2 text-left">ID</th>
                <th class="border px-4 py-2 text-left">Nom</th>
                <th class="border px-4 py-2 text-left">Email</th>
                <th class="border px-4 py-2 text-left">CIN</th>
                <th class="border px-4 py-2 text-center">Actions</th>
            </tr>
        </thead>
        
        <?php while($row = mysqli_fetch_assoc($result)) {?>
        <tbody>
            <tr class="hover:bg-gray-50">
                <td class="border px-4 py-2"><?= $row['id'] ?></td>
                <td class="border px-4 py-2"><?= $row['nom'] ?></td>
                <td class="border px-4 py-2"><?= $row['email'] ?></td>
                <td class="border px-4 py-2"><?= $row['CIN'] ?></td>
                <td class="border px-4 py-2 text-center">
                    <a href="#"
                        class="text-blue-600 hover:underline mr-3">
                            Modifier
                        </a>
                        <a href="delete_client.php?id=<?=$row['id'] ?>" onclick="return confirm('supprimer ?')"
                        class="text-red-600 hover:underline">
                            Supprimer
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php }else{ ?>
        <p class="text-center text-gray-500">Acucun client trouvé</p>
    <?php } ?>

</div>

<?php include '../footer.php'; ?>
