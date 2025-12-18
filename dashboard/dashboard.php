<?php 
    include '../header.php'; 

    $result_cl = mysqli_query($conn , "select count(*) as total from client");
    $data_cl = mysqli_fetch_assoc($result_cl);
    $count_cl = $data_cl['total'];
    
    $result_cmpt = mysqli_query($conn , "select count(*) as total from compte");
    $data_cmpt = mysqli_fetch_assoc($result_cmpt);
    $count_cmpt = $data_cmpt['total'];

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
        <p class="text-4xl font-bold text-blue-600"><?php echo $count_cl ?></p>
    </div>

    <div class="bg-white p-6 rounded shadow  grid justify-center items-center">
        <h3 class="text-gray-500 text-3xl">Comptes</h3>
        <p class="text-3xl font-bold text-green-600"><?php echo $count_cmpt ?></p>
    </div>

    <div class="bg-white p-6 rounded shadow  grid justify-center items-center">
        <h3 class="text-gray-500 text-3xl">Transactions</h3>
        <p class="text-3xl font-bold text-purple-600">25</p>
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
