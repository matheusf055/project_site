<?php
if (isset($_POST["submit"])) {
    include "config.php";
    
    $username = mysqli_real_escape_string($conn, $_POST['user']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);
    
    $sql = "SELECT * FROM users WHERE username = '$username' OR email = '$username'";
    $result = mysqli_query($conn, $sql);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        
        if (password_verify($password, $row['password'])) {
            session_start();
            $_SESSION['name'] = $row['username'];
            echo '<script>
                  window.location.href = "index.php";
                  </script>';
        } else {
            echo '<script>
                  alert("Senha inválida!!!");
                  window.location.href = "login.php";
                  </script>';
        }
    } else {
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
