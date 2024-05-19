<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="\projeto\usar para trabalho\Css\style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

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
                            // Verifica se a sessão contém o valor 'name'
                            if (isset($_SESSION['name'])) {
                                // Se a sessão contém o valor 'name', exibe uma mensagem de boas-vindas
                                // 'htmlspecialchars' é usado para evitar ataques de Cross-Site Scripting (XSS) escapando caracteres especiais
                                echo "<p>Olá, " . htmlspecialchars($_SESSION['name']) . "!</p>";
                            } else {
                                // Se a sessão não contém o valor 'name', exibe uma mensagem informando que o usuário não está logado
                                // Inclui um link para a página de login
                                echo "<p>Você não está logado <a href='login.php'>: Login</a></p>";
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

<div class="corpo-categorias carrinho-compras">
    <table>
        <tr>
            <th>Produto</th>
            <th>Quantidade</th>
            <th>Valor</th>
        </tr>

    <?php
        // Inicializa a variável $total para armazenar o total do carrinho
        $total = 0;
        
        // Verifica se o carrinho está definido na sessão do usuário
        if (isset($_SESSION['carrinho'])) {
            // Loop pelos itens no carrinho
            foreach ($_SESSION['carrinho'] as $indice => $produto) {
                // Obtém a quantidade do produto, se não estiver definida, assume 1
                $quantidade = isset($produto['quantidade']) ? $produto['quantidade'] : 1;
                
                // Calcula o subtotal do produto (preço * quantidade)
                $subtotal = floatval(str_replace('R$', '', str_replace(',', '.', $produto['preco']))) * intval($quantidade);
                
                // Adiciona o subtotal ao total do carrinho
                $total += $subtotal;
        ?>
        <tr>
            <td>
                <div class="info-carrinho">
                    <!-- Exibe a imagem do produto -->
                    <img src="<?php echo $produto['imgSrc']; ?>" alt="">
                    <div>
                        <!-- Exibe o título do produto -->
                        <p><?php echo $produto['titulo']; ?></p>
                        <!-- Exibe o preço do produto -->
                        <small>Valor: <?php echo $produto['preco']; ?></small>
                        <br>
                        <!-- Adiciona um link para remover o produto do carrinho -->
                        <a href="remover-carrinho.php?indice=<?php echo $indice; ?>" title="">Remover</a>
                    </div>
                </div>
            </td>

            <td>
                <!-- Exibe a quantidade do produto -->
                <span><?php echo $quantidade; ?></span>
            </td>

            <td>
                <!-- Exibe o subtotal do produto formatado -->
                <?php echo 'R$ ' . number_format($subtotal, 2, ',', '.'); ?>
            </td>
        </tr>
    <?php
        }
    }
    ?>
    </table>

    <div class="valor-total">
        <table>
            <!-- Linha para o Sub-Total -->
            <tr>
                <td>Sub-Total</td>
                <!-- Exibe o subtotal formatado -->
                <td><?php echo 'R$ ' . number_format($total, 2, ',', '.'); ?></td>
            </tr>
        
            <!-- Linha para o Total -->
            <tr>
                <td>Total</td>
                <!-- Exibe o total formatado -->
                <td><?php echo 'R$ ' . number_format($total, 2, ',', '.'); ?></td>
            </tr>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="/projeto/usar para trabalho/Js/app.js"></script>
</body>
</html>
