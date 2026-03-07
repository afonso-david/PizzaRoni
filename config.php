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

// Pizza Peperoni
$sql_peperoni = "SELECT imagem FROM menus WHERE nome='Menu Peperoni'";
$result_peperoni = $conn->query($sql_peperoni);
$linha_peperoni = $result_peperoni->fetch_assoc();

// Pizza 4 Queijos
$sql_4queijos = "SELECT imagem FROM menus WHERE nome='Menu 4 Queijos'";
$result_4queijos = $conn->query($sql_4queijos);
$linha_4queijos = $result_4queijos->fetch_assoc();
?>