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

// Query corrigida com o nome correto
$sql = "SELECT imagem FROM menus WHERE nome='Menu Peperoni'";
$resultado = $conn->query($sql);

// Buscar resultado
$linha = $resultado->fetch_assoc();

$sql_peperoni = "SELECT imagem FROM menus WHERE nome='Menu Peperoni'";
$result_peperoni = $conn->query($sql_peperoni);
$linha_peperoni = $result_peperoni->fetch_assoc();


// Pizza 4 Queijos
$sql_4queijos = "SELECT imagem FROM menus WHERE nome='Menu 4 Queijos'";
$result_4queijos = $conn->query($sql_4queijos);
$linha_4queijos = $result_4queijos->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>PizzaRoni</title>
</head>
<body>

<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="menus.php">Menus</a></li>
        <li><a href="Sobre.php">Sobre</a></li>
        <li><a href="Restaurantes.php">Restaurantes</a></li>
    </ul>
</nav>

<section class="hero">
    <video autoplay muted loop class="hero-video">
        <source src="imgs/istockphoto-180617222-640_adpp_is.mp4" type="video/mp4">
    </video>

    <div class="hero-overlay"></div>

    <div class="hero-text">
        <h1>Delicie-se com os<br> nossos sabores</h1>
    </div>
</section>

    <div class="container-pizzas">

        <div class="pizza-item">
            <h2>Pizza Peperoni</h2>
            <?php if ($linha_peperoni): ?>
                <img src="<?php echo $linha_peperoni['imagem']; ?>" alt="Pizza Peperoni">
            <?php else: ?>
                <p>Pizza Peperoni não encontrada.</p>
            <?php endif; ?>
        </div>

        <div class="pizza-item">
            <h2>Pizza 4 Queijos</h2>
            <?php if ($linha_4queijos): ?>
                <img src="<?php echo $linha_4queijos['imagem']; ?>" alt="Pizza 4 Queijos">
            <?php else: ?>
                <p>Pizza 4 Queijos não encontrada.</p>
            <?php endif; ?>
        </div>

    </div>

</section>

</body>
</html>