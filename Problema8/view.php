<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Problema 8 - Estación del año</title>
  <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
<div class="container">
  <h1>Problema 8: Estación del año</h1>

  <form method="post">
    <label>Seleccione una fecha:</label>
    <input type="date" name="fecha" required>
    <button type="submit">Consultar estación</button>
  </form>

  <?php if ($error): ?>
    <p class="error"><?= htmlspecialchars($error) ?></p>
  <?php endif; ?>

  <?php if ($resultado): ?>
    <h3>Resultado</h3>
    <p>La estación correspondiente es: <strong><?= htmlspecialchars($resultado) ?></strong></p>
  <?php endif; ?>

  <p><a href="../index.php" class="back-link">Volver al menú</a></p>
</div>
<?php include __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
