<?php
session_start();

if (!isset($_SESSION['name'])) {
    echo "<script>
            alert('Você precisa estar logado para adicionar ao carrinho.');
            window.location.href = 'index.php';
          </script>";
    exit();
}

if (isset($_GET['indice']) && isset($_SESSION['carrinho'][$_GET['indice']])) {
    unset($_SESSION['carrinho'][$_GET['indice']]);
}

header('Location: carrinho.php');

