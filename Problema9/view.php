<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Problema 9 - Potencias de un número</title>
  <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
<div class="container">
  <h1>Problema 9: Potencias de un número (1–9)</h1>

  <form method="post">
    <label>Ingrese un número (1–9):</label>
    <input type="number" name="numero" min="1" max="9" required>
    <button type="submit">Generar</button>
  </form>

  <?php if ($error): ?>
    <p class="error"><?= htmlspecialchars($error) ?></p>
  <?php endif; ?>

  <?php if ($resultado): ?>
    <h3>Resultados</h3>
    <table border="1" cellpadding="8">
      <tr>
        <th>Exponente</th>
        <th>pow()</th>
        <th>Multiplicación iterativa</th>
      </tr>
      <?php foreach ($resultado as $fila): ?>
        <tr>
          <td><?= $fila['n'] ?></td>
          <td><?= $fila['pow'] ?></td>
          <td><?= $fila['iterativo'] ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  <?php endif; ?>

  <p><a href="../index.php" class="back-link">Volver al menú</a></p>
</div>
<?php include __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
