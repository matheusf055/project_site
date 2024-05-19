<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quem Somos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="\projeto\usar para trabalho\Css\style.css">
</head>
<body>

    <!-- menu-->
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
    <!-- menu-->

    <!-- conteudo -->
    <section class="">
        <div class="container">
            <div class="row quem-somos">
                <div class="col-8">
                    <h3 class="mb-4"><strong>Quem Somos</strong></h3>
                    <p>
                        Nosso e-commerce de brinquedos para pets oferece uma ampla variedade de produtos divertidos e inovadores para atender às necessidades e preferências variadas de nossos clientes peludos. Desde brinquedos de pelúcia até acessórios interativos, estamos comprometidos em proporcionar uma experiência de compra online excepcional, onde a diversão, a segurança e a conveniência se encontram. Explore nossa seleção cuidadosamente selecionada de brinquedos de marcas confiáveis e novidades do mercado, e descubra opções que estimulam o bem-estar e a felicidade do seu pet. Com entrega rápida e um serviço de atendimento ao cliente dedicado, estamos aqui para ajudá-lo a proporcionar momentos de alegria e entretenimento para o seu amado pet, onde quer que você esteja.
                    </p>
                    <p>
                        Na nossa loja virtual de brinquedos para pets, acreditamos que cada brinquedo é uma forma de expressão e diversão para o seu pet. Com uma ampla variedade que vai desde os clássicos até os mais inovadores, buscamos oferecer opções que promovam o bem-estar e a felicidade do seu companheiro peludo. Nossos brinquedos são selecionados com cuidado para garantir qualidade e segurança, enquanto permanecemos atualizados com as últimas tendências do mercado. Quer você esteja procurando por um brinquedo para estimular o exercício ou para enriquecer o tempo de brincadeira do seu pet, estamos aqui para ajudá-lo a encontrar o brinquedo perfeito, elevando a diversão e o carinho para o próximo nível.
                    </p>
                    <h3 class="mb-4"><strong>Nossos Valores</strong></h3>
                    <p>Claro, aqui está a versão adaptada para uma loja de brinquedos de pet: "Nosso e-commerce de brinquedos para pets oferece uma ampla variedade de produtos divertidos e inovadores para atender às necessidades e preferências variadas de nossos clientes peludos. Desde brinquedos de pelúcia até acessórios interativos, estamos comprometidos em proporcionar uma experiência de compra online excepcional, onde a diversão, a segurança e a conveniência se encontram. Explore nossa seleção cuidadosamente selecionada de brinquedos de marcas confiáveis e novidades do mercado, e descubra opções que estimulam o bem-estar e a felicidade do seu pet. Com entrega rápida e um serviço de atendimento ao cliente dedicado, estamos aqui para ajudá-lo a proporcionar momentos de alegria e entretenimento para o seu amado pet, onde quer que você esteja. Na nossa loja virtual de brinquedos para pets, acreditamos que cada brinquedo é uma oportunidade para fortalecer o vínculo entre você e seu pet. Com uma variedade diversificada que vai desde os clássicos até os mais inovadores, buscamos oferecer opções que promovam o exercício, a diversão e o enriquecimento mental do seu companheiro peludo. Nossos brinquedos são cuidadosamente selecionados para garantir segurança e durabilidade, enquanto permanecemos atualizados com as últimas tendências do mercado. Quer você esteja buscando por um brinquedo para estimular o instinto de caça do seu gato ou para promover o exercício do seu cachorro, estamos aqui para ajudá-lo a tornar cada momento de brincadeira uma experiência memorável para o seu pet, elevando a felicidade e o bem-estar para o próximo nível.
                    </p>
                </div>
                <div class="col-4">
                    <img src="/projeto/usar para trabalho/imagem-pet/banner-2.png" class="img-fluid" alt="Quem Somos">
                </div>
            </div>
        </div>
    </section>
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
