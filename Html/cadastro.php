<?php
if(isset($_POST["submit"])){
    include "config.php";
    $username = mysqli_real_escape_string($conn, $_POST['user']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpass']);

    $sql = "SELECT * FROM users WHERE username = '$username' ";
    $result_user = mysqli_query($conn, $sql);
    if($result_user === false) {
        echo "Erro na consulta SQL: " . mysqli_error($conn);
        exit();
    }
    $count_user = mysqli_num_rows($result_user);

    $sql = "SELECT * FROM users WHERE email = '$email' ";
    $result_email = mysqli_query($conn, $sql);
    if($result_email === false) {
        echo "Erro na consulta SQL: " . mysqli_error($conn);
        exit();
    }
    $count_email = mysqli_num_rows($result_email);

    if($count_user == 0 && $count_email == 0){
        if($password == $cpassword){
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hash')";
            $result_insert = mysqli_query($conn, $sql);
            if($result_insert === false) {
                echo "Erro na inserção de dados: " . mysqli_error($conn);
                exit();
            }
        }
        else{
            echo '<script>
            alert("Senhas diferentes!!!");
            window.location.href = "cadastro.php";
            </script>';
            exit();
        }
    }
    else{
        echo '<script>
        alert("Usuário ou email já cadastrado!!!");
        window.location.href = "index.php";
        </script>';
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="\projeto\usar para trabalho\Css\cadastro.css">
</head>
<body>
    
    <div class="container">
    <form class="formulario" id="formularioCadastro" action="cadastro.php" method="POST" name="form">

        <!-- textos -->
        <h1 class="titulo">Crie sua conta</h1>
        <p class="texto">Digite os seus dados para criar a conta abaixo</p>
        <!-- textos --> 

        <!-- input username -->
        <div class="input-container">
           <input type="text" placeholder="Digite seu usuário" id="user" name="user" required>
        </div>
        <!-- input username -->

        <!-- input email -->
        <div class="input-container">
           <input type="email" placeholder="Digite o e-mail" id="email" name="email" required>
        </div>
        <!-- input email -->

        <!-- input senha -->
        <div class="input-container">
           <input type="password" placeholder="Digite a senha" id="pass" name="pass" required>
        </div>
        <!-- input senha -->

        <!-- input confirmar senha -->
        <div class="input-container">
            <input type="password" placeholder="Confirme a senha" id="cpass" name="cpass" required>
         </div>
        <!-- input confirmar senha --> 

            <input class="enviar" type="submit" id="btn" value="Cadastro" name="submit"/>
    
        <!-- botão -->
        
        <!-- botão -->

        <!-- ir para login -->
        <p class="entre">
            Já possui uma conta? <a href="/projeto/usar para trabalho/Html/login.php">Entre</a>
        </p>
        <!-- ir para login -->

    </form>
    </div>
</body>
</html>