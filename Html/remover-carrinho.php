<?php
session_start();

//Verifica se o usuario está logado
if (!isset($_SESSION['name'])) {
    //Se não estiver ele avisa que precisa estar logado
    echo "<script>
            alert('Você precisa estar logado para adicionar ao carrinho.');
            window.location.href = 'index.php';
          </script>";
    exit();
}

//Verifica se foi fornecido um indice valido para se remover do carrinho
if (isset($_GET['indice']) && isset($_SESSION['carrinho'][$_GET['indice']])) {
    //Se for valido, remove
    unset($_SESSION['carrinho'][$_GET['indice']]);
}

//Leva para o carrinho
header('Location: carrinho.php');

