<?php
require_once 'figuras.php';
require_once 'saludo.php';

// Variables iniciales
$nombreUsuario = "";
$idiomaUsuario = "";
$saludo = null;
$figuras = [];

// Procesar el formulario si se envía
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombreUsuario = trim($_POST['nombre']);
    $idiomaUsuario = $_POST['idioma'];

    // Crear saludo según idioma
    $saludo = FabricaSaludo::obtenerSaludo($idiomaUsuario);

    // Crear figuras para mostrar cálculos
    $rectangulo = new Rectangulo(5, 10);
    $triangulo = new Triangulo(6, 4, 5, 6, 7);
    $circulo = new Circulo(3);
    $figuras = [$rectangulo, $triangulo, $circulo];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Figuras y Saludos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Proyecto PHP: Figuras y Saludos</h1>

        <!-- Formulario para ingresar nombre e idioma -->
        <form method="POST" class="formulario">
            <label for="nombre">Tu nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Escribe tu nombre" required>

            <label for="idioma">Selecciona tu idioma:</label>
            <select id="idioma" name="idioma" required>
                <option value="">-- Selecciona --</option>
                <option value="es">Español</option>
                <option value="en">English</option>
            </select>

            <button type="submit">Saludar y Mostrar Figuras</button>
        </form>

        <?php if ($saludo): ?>
            <div class="resultado">
                <p class="saludo"><?php echo $saludo->saludar(htmlspecialchars($nombreUsuario)); ?></p>

                <h2>Resultados de las Figuras Geométricas</h2>
                <div class="figuras">
                    <?php foreach ($figuras as $figura): ?>
                        <div class="card">
                            <h3><?php echo $figura->getNombre(); ?></h3>
                            <p><strong>Área:</strong> <?php echo number_format($figura->calcularArea(), 2); ?></p>
                            <p><strong>Perímetro:</strong> <?php echo number_format($figura->calcularPerimetro(), 2); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
