<?php
session_start();

if (!isset($_SESSION['name'])) {
    echo "<script>
            alert('Você precisa estar logado para adicionar ao carrinho.');
            window.location.href = 'index.php';
          </script>";
    exit();
}

if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = array();
}

$produto = array(
    'imgSrc' => $_POST['imgSrc'],
    'titulo' => $_POST['titulo'],
    'preco' => $_POST['preco'],
    'descricao' => $_POST['descricao'],
    'quantidade' => $_POST['quantidade']
);

array_push($_SESSION['carrinho'], $produto);

header('Location: carrinho.php');

