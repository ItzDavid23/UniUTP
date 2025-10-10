<?php
declare(strict_types=1);

use classes\Utils;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Problema 7 - Calculadora de notas</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<div class="container">
    <h1>Problema 7: Calculadora estadística de notas</h1>

    <form method="POST">
        <label>Cantidad de notas:</label>
        <input type="number" name="cantidad" min="1" required>
        <button type="submit">Generar campos</button>
    </form>

    <?php if (!empty($cantidad) && $cantidad > 0): ?>
    <form method="POST">
        <input type="hidden" name="cantidad" value="<?= $cantidad ?>">
        <?php for ($i = 1; $i <= $cantidad; $i++): ?>
            <label>Nota <?= $i ?>:</label>
            <input type="number" name="notas[]" step="0.01" required>
        <?php endfor; ?>
        <button type="submit">Calcular estadísticas</button>
    </form>
    <?php endif; ?>

    <?php if ($error): ?>
        <p class="error"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>

    <?php if ($resultado): ?>
        <h2>Resultados</h2>
        <ul>
            <li>Media: <?= number_format($resultado['media'], 2) ?></li>
            <li>Desviación estándar: <?= number_format($resultado['desviacion'], 2) ?></li>
            <li>Mínima: <?= $resultado['min'] ?></li>
            <li>Máxima: <?= $resultado['max'] ?></li>
        </ul>

        <canvas id="chartNotas"></canvas>
        <script>
            const ctx = document.getElementById('chartNotas');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: <?= json_encode(range(1, count($notas))) ?>,
                    datasets: [{
                        label: 'Notas',
                        data: <?= json_encode($notasFloat) ?>,
                        backgroundColor: '#3b82f6'
                    }]
                },
                options: {
                    scales: {
                        y: { beginAtZero: true, max: 100 }
                    }
                }
            });
        </script>
    <?php endif; ?>

    <p><a href="../index.php" class="back-link">Volver al menú</a></p>
</div>
<?php include __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
