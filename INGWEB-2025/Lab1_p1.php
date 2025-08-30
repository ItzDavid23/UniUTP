<!DOCTYPE html>
<!-- 
-----Programa que calcula el área y perímetro de un círculo dado el radio-----
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area y Perimetro de un Circulo</title>
</head>
<body>
    <h2>Calculadora de Área y Perímetro de un Círculo</h2>
    <form method="post">
        <label for = "radio">Ingrese el Radio del Círculo: </label>
        <input type = "number" step = "2" name = "radio" id = "radio" required>
        <button type = "submit">Calcular</button>
    </form>
    <?php
    if ($_SERVER[REQUEST_METHOD] == "POST"){
        $radio = $_POST["radio"];
        if ($radio > 0) {
            $pi = pi();
            $area = $pi * $radio * $radio;
            $perimetro = 2 * $pi * $radio;

            echo "<h3>Resultados:</h3>";
            echo "Radio: $radio <br>";
            echo "Área: " . round($area, 2) . "<br>";
            echo "Perímetro: " . round($perimetro, 2) . "<br>";
        } else {
            echo "<p style='color:red;'>El radio debe ser mayor que 0.</p>";
        }
}
?>
</body>
</html>


