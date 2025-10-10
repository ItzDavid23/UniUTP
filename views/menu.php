<?php
declare(strict_types=1);

/**
 * views/menu.php
 * Interfaz HTML del menú principal.
 */

use Classes\Utils;

?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Aplicación PHP POO - Menú Principal</title>
  <link rel="stylesheet" href="assets/css/styles.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js" defer></script>
  <script src="assets/js/charts.js" defer></script>
</head>
<body>
  <div class="container">
    <header>
      <h1>Aplicación PHP (POO) - Menú Principal</h1>
    </header>

    <main>
      <p>Selecciona un módulo para abrirlo:</p>
      <section class="grid">
        <?php
        $modulos = [
          1 => ['title' => 'Estadísticas (5 números)', 'icon' => '📊'],
          2 => ['title' => 'Suma de 1 a 1000', 'icon' => '➕'],
          3 => ['title' => 'Múltiplos de 4', 'icon' => '🔢'],
          4 => ['title' => 'Suma pares/impares 1-200', 'icon' => '🟢🔴'],
          5 => ['title' => 'Clasificación de edades', 'icon' => '👶🧑👴'],
          6 => ['title' => 'Presupuesto hospitalario', 'icon' => '🏥💰'],
          7 => ['title' => 'Calculadora de notas', 'icon' => '📝'],
          8 => ['title' => 'Estación del año', 'icon' => '🌦️'],
          9 => ['title' => 'Potencias 1–9', 'icon' => '✖️'],
          10 => ['title' => 'Ventas (matriz 2D)', 'icon' => '📋']
        ];

        foreach ($modulos as $num => $mod) {
          echo '<article class="card">';
          echo "<h3>{$mod['icon']} Problema {$num}</h3>";
          echo "<p>{$mod['title']}</p>";
          echo "<a class='btn' href='Problema{$num}/index.php'>Abrir Problema {$num}</a>";
          echo '</article>';
        }
        ?>
      </section>

    </main>

    <?php include __DIR__ . '/../includes/footer.php'; ?>
  </div>
</body>
</html>
