<?php
//Conectar ao banco de dados 
$servername = "localhost"; // Nome do servidor
$username = "root"; // Nome do usuario do banco de dados
$password = ""; // Senha do usuario
$dbname = "db"; // Nome do Schema
$conn = new mysqli($servername, $username, $password, $dbname, 3306); // Comando para conectar ao banco de dados 
if ($conn->connect_error) { // Verificação se deu certo a conexão 
        die("Connection failed". $conn->connect_error);

}
echo ""; //Menssagem caso falhe 

