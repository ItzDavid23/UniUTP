<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Problema 4 - Suma Pares e Impares</title>
  <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
<div class="container">
  <h1>Problema 4: Suma de números pares e impares</h1>

  <form method="post">
    <label>Inicio:</label>
    <input type="number" name="inicio" value="1" required>
    <label>Fin:</label>
    <input type="number" name="fin" value="200" required>
    <button type="submit">Calcular</button>
  </form>

  <?php if ($error): ?>
    <p class="error"><?= htmlspecialchars($error) ?></p>
  <?php endif; ?>

  <?php if ($resultado): ?>
    <h3>Resultados</h3>
    <p>Suma de pares: <?= $resultado['sumaPar'] ?></p>
    <p>Suma de impares: <?= $resultado['sumaImpar'] ?></p>
  <?php endif; ?>

  <p><a href="../index.php" class="back-link">Volver al menú</a></p>
</div>
<?php include __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
