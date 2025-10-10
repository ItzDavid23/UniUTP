<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Problema 5 - Clasificación de edades</title>
  <link rel="stylesheet" href="../assets/css/styles.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js" defer></script>
</head>
<body>
<div class="container">
  <h1>Problema 5: Clasificar edades</h1>

  <form method="post">
    <?php for ($i = 1; $i <= 5; $i++): ?>
      <label>Edad <?= $i ?>:</label>
      <input type="number" name="edades[]" min="0" max="130" required>
    <?php endfor; ?>
    <button type="submit">Clasificar</button>
  </form>

  <?php if ($error): ?>
    <p class="error"><?= htmlspecialchars($error) ?></p>
  <?php endif; ?>

  <?php if ($resultado): ?>
    <h3>Resultados</h3>
    <ul>
      <?php foreach ($resultado as $categoria => $conteo): ?>
        <li><?= $categoria ?>: <?= $conteo ?></li>
      <?php endforeach; ?>
    </ul>

    <canvas id="chartEdades" width="400" height="200"></canvas>
    <script>
    document.addEventListener("DOMContentLoaded", () => {
      const ctx = document.getElementById("chartEdades");
      new Chart(ctx, {
        type: "bar",
        data: {
          labels: <?= json_encode(array_keys($resultado)) ?>,
          datasets: [{
            label: "Cantidad",
            data: <?= json_encode(array_values($resultado)) ?>,
            backgroundColor: ["#60a5fa","#34d399","#fbbf24","#f87171"]
          }]
        }
      });
    });
    </script>
  <?php endif; ?>

  <p><a href="../index.php" class="back-link">Volver al menú</a></p>
</div>
<?php include __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
