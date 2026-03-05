<?php
$host = "localhost";
$base_dados = "pizzaroni";
$usuario = "root";
$senha = "Kevin@15";

// Criar conexão usando MySQLi (compatível com o teu código do menu)
$conn = new mysqli($host, $usuario, $senha, $base_dados);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
// Define o charset para evitar problemas com acentos
$conn->set_charset("utf8");
?>