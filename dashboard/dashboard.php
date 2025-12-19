<?php 
    include '../header.php'; 

    $sql_client = mysqli_query($conn , "select count(*) as total from client");
    $result_client = mysqli_fetch_assoc($sql_client);
    $count_client = $result_client['total'];
    
    $sql_compte = mysqli_query($conn , "select count(*) as total from compte");
    $result_compte = mysqli_fetch_assoc($sql_compte);
    $count_compte = $result_compte['total'];

    $sql_transactions = mysqli_query($conn , "select count(*) as total from transactions");
    $result_transaction = mysqli_fetch_assoc($sql_transactions);
    $count_transaction = $result_transaction['total']

?>
<style>
    .Dashboard{
        color:blue;
    }
</style>
<h2 class="text-2xl font-bold mb-6">Dashboard</h2>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8 h-79.5">

    <div class="bg-white p-6 rounded shadow grid justify-center items-center">
        <h3 class="text-gray-500 text-3xl">Clients</h3>
        <p class="text-4xl font-bold text-blue-600"><?php echo $count_client ?></p>
    </div>

    <div class="bg-white p-6 rounded shadow  grid justify-center items-center">
        <h3 class="text-gray-500 text-3xl">Comptes</h3>
        <p class="text-3xl font-bold text-green-600"><?php echo $count_compte ?></p>
    </div>

    <div class="bg-white p-6 rounded shadow  grid justify-center items-center">
        <h3 class="text-gray-500 text-3xl">Transactions</h3>
        <p class="text-3xl font-bold text-purple-600"><?php echo $count_transaction ?></p>
    </div>

</div>

<div class="bg-white p-6 rounded shadow">
    <h3 class="text-xl font-semibold mb-4">Bienvenue <?php echo $_SESSION['user'] ?></h3>
    <p class="text-gray-600">
        Vous êtes connecté à <b>Bankly V2</b>.  
        Utilisez le menu pour gérer les clients, comptes et transactions.
    </p>
</div>

<?php include '../footer.php'; ?>
