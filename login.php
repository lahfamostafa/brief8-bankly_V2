<?php
    session_start();    
    include 'config.php';
    
    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $pass = $_POST['password'];

        $result = mysqli_query($conn , "select * from user where userName = '$username'");
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_assoc($result);

            if($pass == $row['passwrd']){
                header("Location: index.php");
                exit;
            }else{
                $error = "Le mot de passe est incorrect";
            }
        }else{
            $error = "Utilisateur intouvale !";
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Login - Bankly V2</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .login-box {
            width: 300px;
            margin: 100px auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
        }
        
        form{
            display :grid;
            justify-content:center;
            align-items:center;
        }

        input {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
        }

        button {
            width: 100%;
            padding: 8px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .error {
            color: red;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="login-box">
        <h2>Bankly V2</h2>

        <?php if(isset($error)) echo "<p style='color:red;'> $error </p>" ?>
        <form method="POST" action="login.php">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>

            <button type="submit">Login</button>
        </form>

    </div>

</body>
</html>
