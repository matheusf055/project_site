<?php
session_start();

// Verifica se os dados do formulário foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se os campos do formulário foram preenchidos
    if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['message'])) {
        // Captura os dados do formulário
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $mensagem = $_POST['message'];

        // Configurações de conexão com o banco de dados
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "db";

        // Cria a conexão
        $conn = new mysqli($servername, $username, $password, $dbname, 3306);

        // Verifica a conexão
        if ($conn->connect_error) {
            die("Erro de conexão: " . $conn->connect_error);
        }

        // Prepara e executa a query SQL para inserir a mensagem no banco de dados
        $sql = "INSERT INTO mensagens (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";
        if ($conn->query($sql) === TRUE) {
            echo "";
        } else {
            echo "Erro ao registrar a mensagem: " . $conn->error;
        }

        // Fecha a conexão
        $conn->close();
    } else {
        echo "Todos os campos do formulário devem ser preenchidos.";
    }
} 
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fale Conosco</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="\projeto\usar para trabalho\Css\style.css">
</head>
<body>

    <!-- menu -->
    <div class="novoMenu menu-quem">
        <div class="container">
            <div class="navbar d-flex justify-content-end align-items-center">
                <div class="logo">
                    <img src="/projeto/usar para trabalho/imagem-pet/logo-tigre.png" alt="Logo" width="125px">
                </div>
                <nav>
                    <ul>
                        <li><a href="/projeto/usar para trabalho/Html/index.php">Inicio</a></li>
                        <li><a href="/projeto/usar para trabalho/Html/produtos.php">Produtos</a></li>
                        <li><a href="/projeto/usar para trabalho/Html/quem-somos.php">Quem somos</a></li>
                        <li><a href="/projeto/usar para trabalho/Html/fale-conosco.php">Fale conosco</a></li>
                        <li>
                            <?php
                            if (isset($_SESSION['name'])) {
                                echo "<a>Olá, " . htmlspecialchars($_SESSION['name']) . "!</a>";
                            } else {
                                echo "<a href='login.php'>Você não está logado: Login</a>";
                            }
                            ?>
                        </li>
                        <li><a href="/projeto/usar para trabalho/Html/sair.php">Sair</a></li>
                        <li>
                            <a href="/projeto/usar para trabalho/Html/carrinho.php" class="sacola">
                                <img src="/projeto/usar para trabalho/imagem-pet/carrinho2.png" alt="" width="25px" height="25px">
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- menu -->

    <!-- conteudo -->
    <div class="separar container py-5 ">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="mb-4">Fale Conosco</h2>
                <form method="POST" action="fale-conosco.php">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input name="nome" type="text" class="form-control" id="nome" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="mensagem" class="form-label">Mensagem</label>
                        <textarea name="message" class="form-control" id="mensagem" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" value="Enviar">Enviar</button>
                </form>
            </div>
        </div>
    </div>
    <!-- conteudo -->

    <!-- rodape -->
    <footer class="rodape rodape-fixo">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h3>Baixe o nosso App</h3>
                    <p>Baixe nosso aplicativo nas melhores plataformas e tenha acesso a ofertas exclusivas.</p>
                    <div class="app-logo">
                        <img src="/projeto/usar para trabalho/imagem-pet/apple.png" alt="Google Play">
                        <img src="/projeto/usar para trabalho/imagem-pet/google.png" alt="Apple Store">
                    </div>
                </div>
                <div class="col-4">
                    <h3>Mais Informações</h3>
                    <ul>
                        <li>Termos de Serviço</li>
                        <li>Política de Privacidade</li>
                        <li>Contatos</li>
                        <li>Blog</li>
                    </ul>
                </div>
                <div class="col-4">
                    <h3>Redes Sociais</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Instagram</li>
                        <li>Twitter</li>
                        <li>YouTube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="direitos">&#169; Todos os direitos reservados</p>
        </div>
    </footer>
    <!-- rodape -->

</body>
</html>