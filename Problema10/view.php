<?php
declare(strict_types=1);
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Problema 10 – Ventas Bidimensionales</title>
  <link rel="stylesheet" href="../../assets/css/styles.css">
</head>
<body>
<div class="container">
  <h1>Problema 10 – Arreglo Bidimensional de Ventas</h1>
  <a href="../index.php" class="back-link">← Volver al menú</a>

  <form method="post">
    <label>Producto (1–5):</label><br>
    <input type="number" name="product" min="1" max="5" required><br>

    <label>Vendedor (1–4):</label><br>
    <input type="number" name="seller" min="1" max="4" required><br>

    <label>Valor vendido ($):</label><br>
    <input type="number" name="amount" step="0.01" required><br>

    <button type="submit">Registrar venta</button>
  </form>

  <?php if ($error): ?>
    <p class="error"><?= htmlspecialchars($error) ?></p>
  <?php elseif ($success): ?>
    <p class="success"><?= htmlspecialchars($success) ?></p>
  <?php endif; ?>

  <h2>Tabla de Ventas</h2>
  <table border="1" cellpadding="6">
    <thead>
      <tr>
        <th>Producto \ Vendedor</th>
        <?php for ($v = 1; $v <= 4; $v++): ?>
          <th>Vendedor <?= $v ?></th>
        <?php endfor; ?>
        <th>Total Producto</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($sales as $product => $row): ?>
        <tr>
          <td><strong>Producto <?= $product ?></strong></td>
          <?php foreach ($row as $value): ?>
            <td><?= number_format($value, 2) ?></td>
          <?php endforeach; ?>
          <td><strong><?= number_format($rowTotals[$product], 2) ?></strong></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
    <tfoot>
      <tr>
        <th>Total Vendedor</th>
        <?php foreach ($columnTotals as $total): ?>
          <th><?= number_format($total, 2) ?></th>
        <?php endforeach; ?>
        <th></th>
      </tr>
    </tfoot>
  </table>

  <?php include __DIR__ . '/../includes/footer.php'; ?>
</div>
</body>
</html>
