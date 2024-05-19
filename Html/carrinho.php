<?php
session_start();

$total = 0;

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

<div class="corpo-categorias carrinho-compras">
    <table>
        <tr>
            <th>Produto</th>
            <th>Quantidade</th>
            <th>Valor</th>
        </tr>

        <?php
        if (isset($_SESSION['carrinho'])) {
            foreach ($_SESSION['carrinho'] as $indice => $produto) {
                $quantidade = isset($produto['quantidade']) ? $produto['quantidade'] : 1;
                $subtotal = floatval(str_replace('R$', '', str_replace(',', '.', $produto['preco']))) * intval($quantidade);
                $total += $subtotal;
        ?>
                <tr>
                    <td>
                        <div class="info-carrinho">
                            <img src="<?php echo $produto['imgSrc']; ?>" alt="">
                            <div>
                                <p><?php echo $produto['titulo']; ?></p>
                                <small>Valor: <?php echo $produto['preco']; ?></small>
                                <br>
                                <a href="remover-carrinho.php?indice=<?php echo $indice; ?>" title="">Remover</a>
                            </div>
                        </div>
                    </td>

                    <td>
                        <span><?php echo $quantidade; ?></span>
                    </td>

                    <td><?php echo 'R$ ' . number_format($subtotal, 2, ',', '.'); ?></td>
                </tr>
        <?php
            }
        }
        ?>
    </table>

    <div class="valor-total">
        <table>
            <tr>
                <td>Sub-Total</td>
                <td><?php echo 'R$ ' . number_format($total, 2, ',', '.'); ?></td>
            </tr>
           
            <tr>
                <td>Total</td>
                <td><?php echo 'R$ ' . number_format($total, 2, ',', '.'); ?></td>
            </tr>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="/projeto/usar para trabalho/Js/app.js"></script>
</body>
</html>
