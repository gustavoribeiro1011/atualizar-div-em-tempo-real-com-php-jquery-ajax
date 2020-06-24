<?php

// Informações para conexão
$host = 'localhost';
$usuario = 'root';
$senha = 'usbw';
$banco = 'aula';
$dsn = "mysql:host={$host};port=3307;dbname={$banco};charset=utf8";

$conn = mysqli_connect($host, $usuario, $senha, $banco);
 
if (!$conn) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
 
