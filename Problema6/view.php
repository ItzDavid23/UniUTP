<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Problema 6 - Presupuesto hospitalario</title>
  <link rel="stylesheet" href="../assets/css/styles.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js" defer></script>
</head>
<body>
<div class="container">
  <h1>Problema 6: Presupuesto hospitalario</h1>

  <form method="post">
    <label>Presupuesto total:</label>
    <input type="number" name="presupuesto" min="0" step="0.01" required>
    <button type="submit">Distribuir</button>
  </form>

  <?php if ($error): ?>
    <p class="error"><?= htmlspecialchars($error) ?></p>
  <?php endif; ?>

  <?php if ($resultado): ?>
    <h3>Distribución del presupuesto</h3>
    <table border="1" cellpadding="8">
      <tr>
        <th>Área</th>
        <th>% Presupuesto</th>
        <th>Monto asignado</th>
      </tr>
      <?php foreach ($porcentajes as $area => $pct): ?>
        <tr>
          <td><?= $area ?></td>
          <td><?= number_format($pct, 2) ?>%</td>
          <td>$<?= number_format($resultado[$area], 2) ?></td>
        </tr>
      <?php endforeach; ?>
    </table>

    <canvas id="chartPresupuesto" width="400" height="400"
        data-labels='<?= json_encode(array_keys($porcentajes)) ?>'
        data-data='<?= json_encode(array_values($porcentajes)) ?>'>
    </canvas>

    <p><a href="../index.php" class="back-link">Volver al menú</a></p>
  <?php endif; ?>
</div>
<?php include __DIR__ . '/../includes/footer.php'; ?>
<script src="../assets/js/charts.js" defer></script>
</body>
</html>
