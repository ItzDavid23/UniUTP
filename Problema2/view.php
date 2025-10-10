<?php
declare(strict_types=1);

// Incluir bootstrap para el autoload y constantes
require_once __DIR__ . '/../includes/bootstrap.php';

use classes\Utils;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Problema 2 - Suma del 1 al 1000</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
<h1>Problema 2: Suma de los números del 1 al 1000</h1>

<form method="POST">
    <button type="submit">Calcular suma</button>
</form>

<?php if ($result): ?>
    <p>Suma usando bucle: <?= $result['loop'] ?></p>
    <p>Suma usando fórmula: <?= $result['formula'] ?></p>
<?php endif; ?>

<?= Utils::renderBackToMenuLink('../index.php') ?>
<?php include '../includes/footer.php'; ?>
</body>
</html>
