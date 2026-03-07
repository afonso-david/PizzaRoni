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
        <li><a href="Sobre.html">Sobre</a></li>
        <li><a href="Restaurantes.html">Restaurantes</a></li>
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

<section class="menu">
    <h2>Pizza Peperoni</h2>
    <?php if ($linha): ?>
        <img src="<?php echo $linha['imagem']; ?>" alt="Pizza Peperoni">
    <?php else: ?>
        <p>Pizza Peperoni não encontrada.</p>
    <?php endif; ?>
</section>

</body>
</html>