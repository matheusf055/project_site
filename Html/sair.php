<?php
// Inicia a sessão
session_start();

// Destrói todos os dados registrados na sessão
session_destroy();

// Redireciona o usuário para a página inicial
header("Location:index.php");
