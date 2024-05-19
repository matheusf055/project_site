<?php
session_start();

//Verifica se o usuario está logado
if (!isset($_SESSION['name'])) {
    //Mostra mensagem caso tente adicionar ao carrinho sem estar logado
    echo "<script>
            alert('Você precisa estar logado para adicionar ao carrinho.');
            window.location.href = 'index.php';
          </script>";
    exit();
}

//Verifica se o carrinho existe na sessão
if (!isset($_SESSION['carrinho'])) {
    //Se não existe mostra um array vazio
    $_SESSION['carrinho'] = array();
}

//Cria um array com os parametros passados pelo js
$produto = array(
    'imgSrc' => $_POST['imgSrc'],
    'titulo' => $_POST['titulo'],
    'preco' => $_POST['preco'],
    'descricao' => $_POST['descricao'],
    'quantidade' => $_POST['quantidade']
);

//Adiciona o produto no final do array
array_push($_SESSION['carrinho'], $produto);

//Leva para a pagina do carrinho
header('Location: carrinho.php');

