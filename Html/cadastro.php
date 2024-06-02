<?php
// Inclui o acesso ao banco de dados
include "config.php";
   
if (isset($_POST["submit"])) { // Verifica se o formulário foi enviado após apertar no botão submit

    // Escapa caracteres especiais para evitar SQL Injection
    $username = mysqli_real_escape_string($conn, $_POST['user']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpass']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Mostra um alerta se o e-mail não for válido
        echo '<script>
        alert("E-mail inválido!!!");
        window.location.href = "cadastro.php";
        </script>';
        exit();
    }

    // Verifica se a senha tem mais de 6 caracteres
    if (strlen($password) < 6) {
        // Mostra um alerta se a senha tiver menos de 6 caracteres
        echo '<script>
        alert("A senha deve ter pelo menos 6 caracteres!!!");
        window.location.href = "cadastro.php";
        </script>';
        exit();
    }

    // Verifica se o nome de usuário existe no banco de dados
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result_user = mysqli_query($conn, $sql);
    if ($result_user === false) {
        // Mostra mensagem caso a consulta falhe 
        echo "Erro na consulta SQL: " . mysqli_error($conn);
        exit();
    }
    // Conta o número de linhas retornadas pelo SQL
    $count_user = mysqli_num_rows($result_user);

    // Verifica se o Email existe no banco de dados
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result_email = mysqli_query($conn, $sql);
    if ($result_email === false) {
        // Mostra mensagem caso a consulta falhe 
        echo "Erro na consulta SQL: " . mysqli_error($conn);
        exit();
    }
    // Conta o número de linhas retornadas pelo SQL
    $count_email = mysqli_num_rows($result_email);

    // Verifica se o nome de usuário ou email existem no banco de dados
    if ($count_user == 0 && $count_email == 0) {
        // Verifica se as senhas são iguais
        if ($password == $cpassword) {
            // Cria um hash da senha para armazenamento seguro
            $hash = password_hash($password, PASSWORD_DEFAULT);
            // Insere o novo usuário no banco de dados
            $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hash')";
            $result_insert = mysqli_query($conn, $sql);
            if ($result_insert === false) {
                // Mostra mensagem caso a inserção falhe
                echo "Erro na inserção de dados: " . mysqli_error($conn);
                exit();
            }
            // Inicia a sessão e armazena o nome do usuário na sessão
            session_start();
            $_SESSION['name'] = $username;

            // Redireciona para index.php
            header("Location: index.php");
            exit();
        } else {
            // Mostra um alerta se as senhas forem diferentes
            echo '<script>
            alert("Senhas diferentes!!!");
            window.location.href = "cadastro.php";
            </script>';
            exit();
        }
    } else {
        // Mostra um alerta se o usuário ou email já foram cadastrados
        echo '<script>
        alert("Usuário ou email já cadastrado!!!");
        window.location.href = "cadastro.php";
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