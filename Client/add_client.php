<?php
include "../header.php"
?>

<style>
    .Clients{
        color:blue;
    }
</style>
    <div class="container grid justify-center">
        <form action="add_client.php" method="post" class="grid justify-center gap-4">
            <input required name="nom" type="text" placeholder="Nom complet" class="border py-3 px-4">
            <input required name="email" type="email" placeholder="Email" class="border py-3 px-4">
            <input required name="cin" type="text" placeholder="CIN" class="border py-3 px-4">
            <input type="submit" value="Ajouter" class="border py-3 px-4 bg-blue-400 text-white">
        </form>
    </div>
</body>
</html>
<?php
    if(isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['cin'])){
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $cin = $_POST['cin'];
        
        $stm = mysqli_prepare($conn, "insert into client (nom , email, CIN) value(? , ? , ?)");
        mysqli_stmt_bind_param($stm , 'sss' , $nom , $email , $cin);
        mysqli_stmt_execute($stm);
        echo "
        <script>
            alert('Client ajouté avec succès');
            window.location.href='list_clients.php'
        </script>";
        
    }
?>