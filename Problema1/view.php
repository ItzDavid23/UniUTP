<?php
declare(strict_types=1);

// Include bootstrap for autoload and constants
require_once __DIR__ . '/../includes/bootstrap.php';

use classes\Utils;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Problema 1 - Estadísticas</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<h1>Problema 1: Estadística de 5 números</h1>

<form method="POST">
    <?php for ($i = 1; $i <= 5; $i++): ?>
        <label>Number <?= $i ?>:</label>
        <input type="number" name="num<?= $i ?>" step="0.01" required><br>
    <?php endfor; ?>
    <button type="submit">Calculate</button>
</form>

<?php if (!empty($error)): ?>
    <p class="error"><?= Utils::sanitize($error) ?></p>
<?php endif; ?>

<?php if (!empty($result)): ?>
    <h2>Results</h2>
    <ul>
        <li>Mean: <?= number_format($result['mean'], 2) ?></li>
        <li>Standard Deviation: <?= number_format($result['stddev'], 2) ?></li>
        <li>Min: <?= $result['min'] ?></li>
        <li>Max: <?= $result['max'] ?></li>
    </ul>

    <canvas id="chart"></canvas>
    <script>
        new Chart(document.getElementById('chart'), {
            type: 'bar',
            data: {
                labels: ['Mean', 'StdDev', 'Min', 'Max'],
                datasets: [{
                    label: 'Statistics',
                    data: [<?= $result['mean'] ?>, <?= $result['stddev'] ?>, <?= $result['min'] ?>, <?= $result['max'] ?>],
                    backgroundColor: ['#4CAF50', '#2196F3', '#FFC107', '#F44336']
                }]
            }
        });
    </script>
<?php endif; ?>

<?= Utils::renderBackToMenuLink('../index.php') ?>
<?php include '../includes/footer.php'; ?>
</body>
</html>
