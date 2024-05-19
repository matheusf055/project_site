<?php
if (isset($_POST["submit"])) {// Verifica se o formulário foi enviado após apertar no botão submit
    // Inclui o acesso ao banco de dados
    include "config.php";

    // Escapa caracteres especiais para evitar SQL Injection
    $username = mysqli_real_escape_string($conn, $_POST['user']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);
    
    // Verifica se o nome de usuário ou email existe no banco de dados
    $sql = "SELECT * FROM users WHERE username = '$username' OR email = '$username'";
    $result = mysqli_query($conn, $sql);
    
    //Verifica se algum usuario foi encontrado
    if ($result && mysqli_num_rows($result) > 0) {
        //Extrai os dados encontrados
        $row = mysqli_fetch_assoc($result);
        
        //Verifica se a senha está no banco de dados
        if (password_verify($password, $row['password'])) {
            //Inicia a sessão se der tudo certo
            session_start();
            $_SESSION['name'] = $row['username'];
            //Leva para a index
            header("Location: index.php");
        } else {
            // Mostra um alerta se as senha for invalida
            echo '<script>
                  alert("Senha inválida!!!");
                  window.location.href = "login.php";
                  </script>';
        }
    } else {
        // Mostra um alerta se o usuário ou email já forem invalidos
        echo '<script>
              alert("Usuário inválido!!!");
              window.location.href = "login.php";
              </script>';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="\projeto\usar para trabalho\Css\login.css">
</head>
<body>
    
    <div class="container">
    <form class="formulario" name="form" action="login.php" method="POST">

        <!-- textos -->
        <h1 class="titulo">Entre na sua conta</h1>
        <p class="texto">Digite os seus dados de acesso no campo abaixo.</p>
        <!-- textos --> 

        <!-- input email -->
        <div class="input-container">
           <input type="text" placeholder="Digite seu usuário" id="user" name="user" required>
        </div>
        <!-- input email -->

        <!-- input senha -->
        <div class="input-container">
           <input type="password" placeholder="Digite a senha" id="pass" name="pass">
        </div>
        <!-- input senha -->

          <input class="enviar" type="submit" id="btn" value="Login" name="submit"/>

        <p class="entre">
            Ir para a pagina inicial? <a href="/projeto/usar para trabalho/Html/index.php">Ir</a>
        </p>
          
        <!-- ir para login -->
        <p class="entre">
            Não possui uma conta? <a href="/projeto/usar para trabalho/Html/cadastro.php">Crie</a>
        </p>
        <!-- ir para login -->

    </form>
    </div>
   
</body>
</html>
