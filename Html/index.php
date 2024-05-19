<?php
    session_start();
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
    
    <div class="banner">

        <div class="container">

            <div class="navbar">

                <div class="logo">
                    <img src="/projeto/usar para trabalho/imagem-pet/logo-tigre.png" alt="Logo">
                </div>

            <!-- li -->
                <nav>
                    <ul>
                        <li><a href="/projeto/usar para trabalho/Html/index.php" title="">Inicio</a></li>
                        <li><a href="/projeto/usar para trabalho/Html/produtos.php" title="">Produtos</a></li>
                        <li><a href="/projeto/usar para trabalho/Html/quem-somos.php" title="">Quem somos</a></li>
                        <li><a href="/projeto/usar para trabalho/Html/fale-conosco.php" title="">Fale conosco</a></li>
                        <li class="php">
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
                        <li><a href="/projeto/usar para trabalho/Html/sair.php" title="">Sair</a></li>
                        
                    </ul>
                </nav>
            <!-- li -->

            <!-- sacola -->
                <a href="/projeto/usar para trabalho/Html/carrinho.php" title="" class="sacola">
                    <img src="/projeto/usar para trabalho/imagem-pet/carrinho2.png" alt="" width="25px" height="25px">
                </a>
            <!-- sacola -->

            </div>

        <!-- imagem e texto banner -->
            <div class="row banner-imagem">
                <div class="col-8 texto-format"><h1>Escolha um novo <br> estilo de vida para o seu pet.</h1>
                    <p>Quer proporcionar uma vida ainda mais feliz e saudável para o seu pet? Na nossa loja, você encontrará tudo o que precisa para fazer isso acontecer! <br>Sabemos o quanto seu pet significa para você. É mais do que apenas um animal de estimação - é parte da família. E como parte da família, merece o melhor cuidado e atenção possíveis.</p>
                </div>

                <div class="col-4 banner-imagem">
                    <img src="/projeto/usar para trabalho/imagem-pet/banner-2.png" alt="">
                </div>
            </div>
        <!-- imagem e texto banner -->
        </div>
    </div>


    <!-- carousel -->

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-interval="2000">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/projeto/usar para trabalho/imagem-pet/carrosel-1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/projeto/usar para trabalho/imagem-pet/carrosel-2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/projeto/usar para trabalho/imagem-pet/carrosel-3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
    
    <!-- carousel -->

    <!-- produtos em destaque -->
    <div>
        <h2 class="titulo">Produtos em destaque</h2>

        <div class="row produtos-destaque" style="padding-left: 150px; margin-bottom: 30px;">

        <div class="col-3">
            <div class="cardProdutoDestaque cardDestaque">
            <a href="ver-produto.php?imgSrc=/projeto/usar%20para%20trabalho/imagem-pet/imagem-1.jpg&titulo=Bola%20estrela&preco=R$%2059,90&descricao=Esta%20bola%20é%20perfeita%20para%20gatos%20e%20cachorros%20que%20adoram%20perseguir%20objetos%20em%20movimento.%20Feita%20com%20materiais%20duráveis%20e%20seguros,%20a%20bola%20estrela%20é%20leve%20o%20suficiente%20para%20ser%20facilmente%20agarrada%20e%20jogada%20pelos%20seus%20amigos%20peludos.%20Sua%20superfície%20texturizada%20proporciona%20uma%20experiência%20sensorial%20enriquecedora,%20enquanto%20suas%20cores%20vibrantes%20e%20brilhantes%20cativam%20os%20olhos%20curiosos%20dos%20pets.%20Deixe%20seu%20animal%20de%20estimação%20explorar%20o%20universo%20da%20diversão%20com%20a%20bola%20estrela%20–%20onde%20cada%20brincadeira%20é%20uma%20viagem%20intergaláctica!">
                    <img src="/projeto/usar para trabalho/imagem-pet/imagem - 1 - sem fundo.png" alt="">
                </a>
                        <strong><h4>Bola estrela</h4></strong>
                        <div class="classificacao">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                        </div>
                        <p>R$ 59,90</p>
            </div>

        </div>

            <div class="col-3">
                <div class="cardProdutoDestaque cardDestaque">
                    <a href="ver-produto.php?imgSrc=/projeto/usar para trabalho/imagem-pet/imagem-2.jpg&titulo=Pet%20Ball&preco=R$%2089,90&descricao=Descrição%20do%20produto&descricaoReal=Apresentando%20a%20Pet%20Ball,%20a%20companheira%20perfeita%20para%20momentos%20de%20diversão%20e%20exercício%20com%20seu%20fiel%20amigo%20peludo!%20Esta%20bola%20vibrante%20e%20resistente%20é%20projetada%20especialmente%20para%20animais%20de%20estimação%20de%20todas%20as%20idades%20e%20tamanhos,%20proporcionando%20horas%20intermináveis%20de%20entretenimento%20ativo.%20Com%20sua%20construção%20durável%20e%20textura%20suave,%20a%20Pet%20Ball%20é%20ideal%20para%20jogos%20de%20busca,%20rolar%20e%20até%20mesmo%20para%20exercícios%20de%20treinamento">
                        <img src="/projeto/usar para trabalho/imagem-pet/imagem - 2 - sem fundo.png" alt="">
                    </a>    
                        <strong><h4>Pet Ball</h4></strong>
                        <div class="classificacao">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                        </div>
                        <p>R$ 89,90</p>
                </div>
    
                </div>

                <div class="col-3">
                    <div class="cardProdutoDestaque cardDestaque">
                        <a href="ver-produto.php?imgSrc=/projeto/usar para trabalho/imagem-pet/imagem-3.jpg&titulo=Mordedor%20Galinha&preco=R$%209,99&descricao=Descrição%20do%20produto&descricaoReal=Apresentando%20o%20Mordedor%20Galinha,%20o%20companheiro%20perfeito%20para%20satisfazer%20os%20instintos%20de%20mastigação%20do%20seu%20cãozinho%20enquanto%20proporciona%20diversão%20e%20alívio%20para%20as%20gengivas.%20Feito%20com%20material%20durável%20e%20seguro%20para%20mascar,%20este%20brinquedo%20em%20forma%20de%20galinha%20é%20projetado%20para%20resistir%20a%20mordidas%20vigorosas,%20oferecendo%20horas%20de%20entretenimento%20saudável.%20Sua%20textura%20suave%20e%20detalhes%20realistas%20tornam%20a%20experiência%20de%20mastigação%20ainda%20mais%20envolvente%20e%20estimulante%20para%20o%20seu%20amigo%20peludo.">
                            <img src="/projeto/usar para trabalho/imagem-pet/imagem - 3 - sem fundo.png" alt="">
                        </a>    
                            <strong><h4>Mordedor Galinha</h4></strong>
                            <div class="classificacao">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </div>
                            <p>R$ 9,99</p>    
                    </div>
        
                </div>

                <div class="col-3">
                    <div class="cardProdutoDestaque cardDestaque">
                        <a href="ver-produto.php?imgSrc=/projeto/usar para trabalho/imagem-pet/imagem-4.jpg&titulo=Osso%20para%20pet&preco=R$%2029,99&descricao=Descrição%20do%20produto&descricaoReal=Apresentando%20o%20Osso%20para%20Pet,%20o%20brinquedo%20essencial%20para%20satisfazer%20o%20instinto%20de%20mastigação%20do%20seu%20cãozinho%20enquanto%20promove%20diversão%20e%20bem-estar.%20Este%20osso%20resistente%20é%20feito%20com%20materiais%20duráveis%20e%20seguros,%20projetados%20para%20resistir%20até%20mesmo%20às%20mastigações%20mais%20vigorosas.%20Sua%20textura%20exclusiva%20massageia%20as%20gengivas%20do%20seu%20animal%20de%20estimação,%20promovendo%20a%20saúde%20bucal%20e%20aliviando%20o%20desconforto%20durante%20o%20período%20de%20dentição.">
                            <img src="/projeto/usar para trabalho/imagem-pet/imagem - 4 - sem fundo.png" alt="">
                        </a>     
                            <strong><h4>Osso para pet</h4></strong>
                            <div class="classificacao">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </div>
                            <p>R$ 29,99</p>
                    </div>
        
                </div>
        </div>
    </div>   
    <!-- produtos em destaque --> 

    <!-- produtos exclusivos -->
    <div>
        <h2 class="titulo">Novos produtos</h2>

            <div class="row produtos-novos" style="padding-left: 40px;">

                <div class="col-2">
                    <a href="ver-produto.php?imgSrc=/projeto/usar para trabalho/imagem-pet/imagem-5.jpg&titulo=Coelho%20de%20pelúcia&preco=R$%2059,99&descricao=Apresentando%20o%20Coelho%20de%20Pelúcia,%20o%20companheiro%20perfeito%20para%20o%20seu%20amigo%20peludo%20se%20aconchegar%20e%20brincar!%20Este%20adorável%20brinquedo%20é%20feito%20com%20pelúcia%20macia%20e%20materiais%20seguros,%20proporcionando%20conforto%20e%20diversão%20para%20o%20seu%20animal%20de%20estimação.%20Seu%20design%20realista%20e%20detalhes%20encantadores%20estimulam%20o%20instinto%20natural%20de%20caça%20do%20seu%20gato%20ou%20cachorro,%20oferecendo%20horas%20de%20entretenimento%20ativo.">
                        <img src="/projeto/usar para trabalho/imagem-pet/imagem-5.jpg" alt="">
                    </a>
                <h4>Coelho de pelúcia</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <p>R$ 59,99</p>
                
                </div>

                <div class="col-2">
                    <a href="ver-produto.php?imgSrc=/projeto/usar para trabalho/imagem-pet/imagem-6.jpg&titulo=Mordedor%20com%20cabo%20&preco=R$%2020,90&descricao=Feito%20com%20materiais%20de%20alta%20qualidade,%20é%20uma%20escolha%20confiável%20para%20promover%20a%20saúde%20bucal%20do%20seu%20pet,%20ao%20mesmo%20tempo%20em%20que%20oferece%20horas%20de%20entretenimento%20ativo.%20O%20design%20ergonômico%20do%20cabo%20torna%20mais%20fácil%20para%20você%20participar%20das%20brincadeiras,%20fortalecendo%20o%20vínculo%20entre%20você%20e%20seu%20animal%20de%20estimação.%20Escolha%20o%20Mordedor%20com%20Cabo%20Resistente%20e%20proporcione%20ao%20seu%20cão%20uma%20experiência%20de%20mastigação%20segura,%20resistente%20e%20muito%20divertida!">
                        <img src="/projeto/usar para trabalho/imagem-pet/imagem-6.jpg" alt="">
                    </a>
                <h4>Mordedor de cabo</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <p>R$ 20,90</p>

                </div>

                <div class="col-2">
                    <a href="ver-produto.php?imgSrc=/projeto/usar para trabalho/imagem-pet/imagem-7.jpg&titulo=Pet%20Peru%20com%20Apito&preco=R$%209,99&descricao=Conheça%20o%20Pet%20Peru%20com%20Apito,%20o%20brinquedo%20que%20vai%20despertar%20o%20instinto%20de%20caça%20do%20seu%20gato%20ou%20cachorro%20enquanto%20proporciona%20diversão%20e%20entretenimento%20intermináveis!%20Este%20adorável%20brinquedo%20é%20feito%20com%20materiais%20seguros%20e%20duráveis,%20apresentando%20um%20apito%20embutido%20para%20adicionar%20um%20elemento%20extra%20de%20excitação%20aos%20momentos%20de%20brincadeira.">
                        <img src="/projeto/usar para trabalho/imagem-pet/imagem-7.jpg" alt="">
                    </a>
                <h4>Peru com apito</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <p>R$ 9,99</p>
                </div>

                <div class="col-2">
                    <a href="ver-produto.php?imgSrc=/projeto/usar para trabalho/imagem-pet/imagem-8.jpg&titulo=Almofada%20de%20osso%20&preco=R$%2039,99&descricao=Conheça%20a%20almofada%20de%20osso%20para%20Pets,%20o%20brinquedo%20perfeito%20para%20satisfazer%20a%20necessidade%20natural%20de%20mastigação%20do%20seu%20amigo%20peludo!%20Feito%20com%20borracha%20resistente%20e%20durável,%20este%20osso%20é%20projetado%20para%20resistir%20às%20mordidas%20mais%20fortes,%20proporcionando%20horas%20de%20diversão%20segura%20para%20o%20seu%20pet.">
                        <img src="/projeto/usar para trabalho/imagem-pet/imagem-8.jpg" alt="">
                    </a>
                <h4>Almofada de osso</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <p>R$ 39,99</p>
                </div>

                <div class="col-2">
                    <a href="ver-produto.php?imgSrc=/projeto/usar para trabalho/imagem-pet/imagem-9.jpg&titulo=Bola%20de%20Futebol%20para%20Pets&preco=R$%2029,99&descricao=Apresentando%20a%20Bola%20de%20Futebol%20para%20Pets,%20o%20brinquedo%20perfeito%20para%20os%20amigos%20de%20quatro%20patas%20que%20adoram%20uma%20boa%20partida!%20Esta%20bola%20resistente%20é%20projetada%20especialmente%20para%20cães%20e%20gatos%20que%20gostam%20de%20correr%20e%20brincar.%20Feita%20com%20materiais%20duráveis%20e%20seguros,%20é%20ideal%20para%20jogos%20de%20busca,%20perseguições%20animadas%20e%20até%20mesmo%20para%20sessões%20de%20treinamento.%20Sua%20textura%20especial%20proporciona%20uma%20experiência%20tátil%20envolvente,%20enquanto%20as%20cores%20vibrantes%20estimulam%20os%20sentidos%20do%20seu%20pet.">
                        <img src="/projeto/usar para trabalho/imagem-pet/imagem-9.jpg" alt="">
                    </a>
                <h4>Bola de futebol</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <p>R$ 29,99</p>
                </div>

                <div class="col-2">
                <a href="ver-produto.php?imgSrc=/projeto/usar%20para%20trabalho/imagem-pet/imagem-11.jpg&titulo=Mordedor%20de%20cachorro&preco=R$%2019,99&descricao=Mordedor%20Cãozinho%20Amigo,%20o%20brinquedo%20que%20vai%20encantar%20o%20seu%20pet%20com%20horas%20de%20diversão%20e%20mastigação%20segura!%20Este%20mordedor%20é%20projetado%20com%20um%20formato%20adorável%20de%20cachorrinho,%20feito%20para%20estimular%20o%20instinto%20natural%20de%20mastigação%20do%20seu%20cãozinho.%20Construído%20com%20material%20resistente%20e%20durável,%20é%20ideal%20para%20resistir%20às%20mastigações%20mais%20vigorosas,%20proporcionando%20alívio%20para%20as%20gengivas%20e%20promovendo%20a%20saúde%20bucal.%20Além%20disso,%20seu%20design%20ergonômico%20torna-o%20fácil%20de%20segurar%20e%20manipular%20durante%20as%20brincadeiras%20interativas.%20Deixe%20o%20Mordedor%20Cãozinho%20Amigo%20ser%20o%20companheiro%20de%20brincadeiras%20do%20seu%20pet,%20proporcionando%20momentos%20de%20diversão%20e%20bem-estar%20para%20ele%20explorar!">
                    <img src="/projeto/usar para trabalho/imagem-pet/imagem-11.jpg" alt="">
                </a>
                <h4>Mordedor de cachorro</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <p>R$ 19,99</p>
                </div>

            </div>

        </div>
        <!-- produtos exclusivos -->

    <!-- menu oferta -->
    <div class="ofertas">

        <div class="corpo-categorias">

            <div class="row exclusivo-compre">
                
                <div class="col-4">
                    <img src="/projeto/usar para trabalho/imagem-pet/banner-1.png" alt="" class="oferta-img">
                </div>

                <div class="col-8">
                    <p>Produto exclusivo da loja</p>
                    <h1>Melhores brinquedos do mercado</h1>
                    <small>Nós oferecemos os melhores brinquedos para pets no mercado, garantindo diversão e qualidade para o seu companheiro peludo. Escolha entre uma variedade de opções e proporcione momentos de alegria e entretenimento para o seu pet!</small>
                    <br> <br> 
                    <a href="/projeto/usar para trabalho/Html/produtos.php" class="btn-comprar">Comprar agora &#8594;</a>
                </div>
            </div>      
        </div>
    </div>
    <!-- menu oferta -->

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="/projeto/usar para trabalho/Js/app.js"></script>
</body>
</html>