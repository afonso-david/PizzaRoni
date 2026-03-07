<?php

$host = "localhost";
$base_dados = "pizzaroni";
$usuario = "root";
$senha = "Kevin@15";

$conn = new mysqli($host, $usuario, $senha, $base_dados);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$conn->set_charset("utf8");

$sql = "SELECT imgagem FROM menus WHERE nome='Menu Peperoni'";
$resultado = $conn->query($sql);

$linha = $resultado->fetch_assoc();

?>