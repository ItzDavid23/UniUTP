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
    <title>Problema 3 - Múltiplos de 4</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
<h1>Problema 3: Múltiplos de 4</h1>

<form method="POST">
    <label>Ingresa un límite:</label>
    <input type="number" name="limit" required min="1">
    <button type="submit">Generar</button>
</form>

<?php if (!empty($error)): ?>
    <p class="error"><?= Utils::sanitize($error) ?></p>
<?php endif; ?>

<?php if ($result): ?>
    <h2>Múltiplos de 4</h2>
    <p>Total encontrados: <?= count($result) ?></p>
    <ul>
        <?php foreach ($result as $num): ?>
            <li><?= $num ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<?= Utils::renderBackToMenuLink('../index.php') ?>
<?php include '../includes/footer.php'; ?>
</body>
</html>
