<?php

// Incluindo arquivo de conexão
require_once('../config/conn.php');


// Selecionando uma programador aleatório
$sql = "SELECT * FROM programadores ORDER BY RAND() LIMIT 1";
$resultado = mysqli_query($conn, $sql);

// Array associativo
$programador = mysqli_fetch_array($resultado, MYSQLI_ASSOC);

if ($programador) {

// Retornando frase em formato JSON
echo json_encode($programador);

}