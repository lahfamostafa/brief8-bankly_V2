<?php include '../header.php'; ?>

<h2 class="text-2xl font-bold mb-6">Liste des Clients</h2>

<div class="bg-white shadow rounded p-6">

    <div class="flex justify-between items-center mb-4">
        <h3 class="text-lg font-semibold">Clients</h3>
        <a href="add_client.php"
           class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
            + Ajouter Client
        </a>
    </div>

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

        <tbody>
            <!-- Exemple statique -->
            <tr class="hover:bg-gray-50">
                <td class="border px-4 py-2">1</td>
                <td class="border px-4 py-2">Ahmed Ali</td>
                <td class="border px-4 py-2">ahmed@gmail.com</td>
                <td class="border px-4 py-2">AA12345</td>
                <td class="border px-4 py-2 text-center">
                    <a href="#"
                       class="text-blue-600 hover:underline mr-3">
                        Modifier
                    </a>
                    <a href="#"
                       class="text-red-600 hover:underline">
                        Supprimer
                    </a>
                </td>
            </tr>

            <tr class="hover:bg-gray-50">
                <td class="border px-4 py-2">2</td>
                <td class="border px-4 py-2">Sara Ben</td>
                <td class="border px-4 py-2">sara@gmail.com</td>
                <td class="border px-4 py-2">BB98765</td>
                <td class="border px-4 py-2 text-center">
                    <a href="#" class="text-blue-600 hover:underline mr-3">
                        Modifier
                    </a>
                    <a href="#" class="text-red-600 hover:underline">
                        Supprimer
                    </a>
                </td>
            </tr>
        </tbody>
    </table>

</div>

<?php include '../footer.php'; ?>
