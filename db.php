<?php

$host = "localhost";
$user = "root";
$pass = "1234";
$db = "portifolio";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Segunda Base de Dados
$db2_name = 'portifolio_db';
$conn2 = new mysqli($host, $user, $pass, $db2_name);

if ($conn2->connect_error) {
    die("Falha na conexão 2: " . $conn2->connect_error);
}
?>