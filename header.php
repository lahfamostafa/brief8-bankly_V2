<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bankly V2</title>    
    <link rel="stylesheet" href="src/output.css">
</head>
<body class="bg-gray-100">

<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

        <h1 class="text-xl font-bold text-blue-600">
            Bankly V2
        </h1>

        <nav class="flex gap-6 text-gray-700 font-medium">
            <a href="dashboard.php"
               class="hover:text-blue-600 transition Dashboard">
                Dashboard
            </a>

            <a href="list_clients.php"
               class="hover:text-blue-600 transition Clients">
                Clients
            </a>

            <a href="list_accounts.php"
               class="hover:text-blue-600 transition Comptes">
                Comptes
            </a>

            <a href="list_transactions.php"
               class="hover:text-blue-600 transition Transactions">
                Transactions
            </a>
        </nav>

        <div class="flex items-center gap-4">
            <span class="text-sm text-gray-600">
                <?php echo $_SESSION['user']; ?>
            </span>

            <a href="logout.php"
               class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded">
                Déconnexion
            </a>
        </div>

    </div>
</header>

<main class="max-w-7xl mx-auto px-6 py-6">
