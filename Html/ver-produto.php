<?php 
    session_start(); 
    
    $produto = [
        'imgSrc' => isset($_GET['imgSrc']) ? $_GET['imgSrc'] : '',
        'titulo' => isset($_GET['titulo']) ? $_GET['titulo'] : '',
        'preco' => isset($_GET['preco']) ? $_GET['preco'] : '',
        'descricao' => isset($_GET['descricao']) ? $_GET['descricao'] : ''
    ];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <link rel="stylesheet" href="\projeto\usar para trabalho\Css\style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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

    <!-- produto caracterizado -->
    <div class="corpo-categorias ver-produto">
        <div class="espaço">
            <div class="imagens-espaço">
                <img src="<?php echo $produto['imgSrc']; ?>" alt="" id="produtoImg">
            </div>
            <div class="imagens-espaço">
                <h1 id="tituloProduto"><?php echo $produto['titulo']; ?></h1>
                <p>Compre com desconto</p>
                <h4 id="precoProduto"><?php echo $produto['preco']; ?></h4>
                <form action="adicionar-carrinho.php" method="post">
                    <input type="hidden" name="imgSrc" value="<?php echo $produto['imgSrc']; ?>">
                    <input type="hidden" name="titulo" value="<?php echo $produto['titulo']; ?>">
                    <input type="hidden" name="preco" value="<?php echo $produto['preco']; ?>">
                    <input type="hidden" name="descricao" value="<?php echo $produto['descricao']; ?>">
                    <input type="number" name="quantidade" value="1" min="1">
                    <button type="submit" class="btn">Adicionar ao Carrinho</button>
                </form>
                <h3>Descrição:</h3>
                <p id="descricaoProduto"><?php echo $produto['descricao']; ?></p>
            </div>
        </div>
    </div>
    <!-- produto caracterizado -->
    
    <!-- produtos relacionados -->
    <div class="corpo-categorias">
        <div class="espaço espaço2">
            <h2>Produtos Relacionados</h2>
            <p>Veja Mais</p>
        </div>
    </div>
    <!-- produtos relacionados -->

    <!-- produtos -->
    <div class="corpo-categorias">
        <div class="row produtos-relacionado">
        <div class="col-3">
                <a href="ver-produto.php?imgSrc=/projeto/usar para trabalho/imagem-pet/imagem-12.jpg&titulo=Bolinha%20Azul%20que%20Brilha&preco=R$%2079,99&descricao=Bolinha%20Azul%20que%20Brilha,%20o%20brinquedo%20perfeito%20para%20uma%20diversão%20noturna%20e%20emocionante%20para%20o%20seu%20pet!%20Esta%20bolinha%20especial%20é%20feita%20com%20um%20material%20durável%20e%20seguro,%20e%20possui%20uma%20característica%20única:%20ela%20brilha%20no%20escuro!%20Sua%20cor%20azul%20vibrante%20é%20ainda%20mais%20cativante%20quando%20iluminada,%20tornando%20cada%20sessão%20de%20brincadeira%20uma%20experiência%20mágica.%20Seja%20dentro%20de%20casa%20ou%20ao%20ar%20livre,%20a%20Bolinha%20Azul%20que%20Brilha%20proporciona%20horas%20de%20entretenimento%20para%20o%20seu%20amigo%20peludo,%20incentivando-o%20a%20perseguir,%20saltar%20e%20se%20divertir.">
                    <img src="/projeto/usar para trabalho/imagem-pet/imagem-12.jpg" alt="">
                </a>
                <h4>Bola que brilha</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <p>R$ 79,99</p>

            </div>

            <div class="col-3">
                <a href="ver-produto.php?imgSrc=/projeto/usar para trabalho/imagem-pet/imagem-4 - produtos.jpg&titulo=Pet%20osso%20&preco=R$%2029,99&descricao=Descrição%20do%20produto&descricaoReal=Apresentando%20o%20Osso%20para%20Pet,%20o%20brinquedo%20essencial%20para%20satisfazer%20o%20instinto%20de%20mastigação%20do%20seu%20cãozinho%20enquanto%20promove%20diversão%20e%20bem-estar.%20Este%20osso%20resistente%20é%20feito%20com%20materiais%20duráveis%20e%20seguros,%20projetados%20para%20resistir%20até%20mesmo%20às%20mastigações%20mais%20vigorosas.%20Sua%20textura%20exclusiva%20massageia%20as%20gengivas%20do%20seu%20animal%20de%20estimação,%20promovendo%20a%20saúde%20bucal%20e%20aliviando%20o%20desconforto%20durante%20o%20período%20de%20dentição.">
                    <img src="/projeto/usar para trabalho/imagem-pet/imagem-4 - produtos.jpg" alt="">
                </a> 
                <h4>Pet osso</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <p>R$ 39,99</p>

            </div>

            <div class="col-3">
                <a href="ver-produto.php?imgSrc=/projeto/usar para trabalho/imagem-pet/imagem-10.jpg&titulo=Sorvete%20de%20pelúcia&preco=R$%2069,99&descricao=Sorvete%20de%20Pelúcia,%20o%20brinquedo%20perfeito%20para%20satisfazer%20o%20apetite%20por%20diversão%20do%20seu%20pet%20com%20uma%20dose%20refrescante%20de%20fofura!%20Este%20adorável%20sorvete%20em%20forma%20de%20pelúcia%20é%20feito%20com%20materiais%20macios%20e%20seguros,%20projetados%20para%20oferecer%20ao%20seu%20amigo%20peludo%20horas%20de%20entretenimento%20e%20conforto.%20Com%20sua%20aparência%20colorida%20e%20detalhes%20realistas,%20o%20Sorvete%20de%20Pelúcia%20vai%20encantar%20e%20cativar%20seu%20pet%20instantaneamente,%20estimulando%20sua%20curiosidade%20e%20incentivando%20brincadeiras%20animadas.%20Além%20disso,%20sua%20textura%20suave%20e%20aconchegante%20fazem%20dele%20o%20companheiro%20perfeito%20para%20abraços%20e%20cochilos%20relaxantes.%20Deixe%20seu%20pet%20se%20deliciar%20com%20o%20Sorvete%20de%20Pelúcia%20-%20uma%20sobremesa%20divertida%20e%20sem%20culpa%20para%20momentos%20de%20diversão%20e%20carinho!">
                    <img src="/projeto/usar para trabalho/imagem-pet/imagem-10.jpg" alt="">
                </a>
                <h4>Sorvete de pelúcia</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <p>R$ 69,99</p>

            </div>

            <div class="col-3">
                <a href="ver-produto.php?imgSrc=/projeto/usar para trabalho/imagem-pet/imagem-6.jpg&titulo=Mordedor%20com%20cabo%20&preco=R$%2020,90&descricao=Feito%20com%20materiais%20de%20alta%20qualidade,%20é%20uma%20escolha%20confiável%20para%20promover%20a%20saúde%20bucal%20do%20seu%20pet,%20ao%20mesmo%20tempo%20em%20que%20oferece%20horas%20de%20entretenimento%20ativo.%20O%20design%20ergonômico%20do%20cabo%20torna%20mais%20fácil%20para%20você%20participar%20das%20brincadeiras,%20fortalecendo%20o%20vínculo%20entre%20você%20e%20seu%20animal%20de%20estimação.%20Escolha%20o%20Mordedor%20com%20Cabo%20Resistente%20e%20proporcione%20ao%20seu%20cão%20uma%20experiência%20de%20mastigação%20segura,%20resistente%20e%20muito%20divertida!">
                    <img src="/projeto/usar para trabalho/imagem-pet/imagem-6.jpg" alt="">
                </a>
                <h4>Mordedor com cabo</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <p>R$ 20,90</p>

                </div>
            </div>
    </div>
 <!-- produtos -->

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


<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="/projeto/usar para trabalho/Js/app.js"></script>
</body>
</html>
