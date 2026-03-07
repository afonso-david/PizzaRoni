<?php
include 'config.php';

// Buscar todas as pizzas usando MySQLi
$sql = "SELECT nome, preco, descricao, imagem FROM menus";
$result = $conn->query($sql);

if (!$result) {
    die("Erro na consulta: " . $conn->error);
}

$pizzas = [];
while ($row = $result->fetch_assoc()) {
    $pizzas[] = $row;
}
?>

<!DOCTYPE html>
<html lang="pt">
    <link rel="stylesheet" href="menus.css">
<head>
    <meta charset="UTF-8">
    <title>Menu de Pizzas</title>

</head>
<body>

  <nav>
        <ul>
             <li><a href="index.php">Home</a></li>
            <li><a href="menus.php">Menus</a></li>
            <li><a href="Sobre.php">Sobre</a></li>
            <li><a href="Restaurantes.html">Restaurantes</a></li>
        </ul>
    </nav>

<h1 class="titulo">Menu de Pizzas</h1>

<div class="menu-container">

<?php if (count($pizzas) > 0): ?>
    <?php foreach ($pizzas as $row): ?>
        <div class="pizza">
            <img src="<?php echo $row['imagem']; ?>" alt="<?php echo $row['nome']; ?>">
            <h3><?php echo $row['nome']; ?></h3>
            <p><?php echo $row['descricao']; ?></p>
            <div class="preco">€<?php echo number_format($row['preco'], 2); ?></div>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    <p>Nenhuma pizza encontrada.</p>
<?php endif; ?>

</div>


<?php
// Fechar a conexão MySQLi
$conn->close();
?>

</body>
</html>