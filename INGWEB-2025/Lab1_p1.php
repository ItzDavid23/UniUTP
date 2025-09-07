<!DOCTYPE html>
<!-- 
-----Programa que calcula el área y perímetro de un círculo dado el radio-----
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area y Perimetro de un Circulo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Calculadora de Área y Perímetro de un Círculo</h2>
    <form method="post"> <!--Definición del metodo del formulario a POST-->
        <label for = "radio">Ingrese el Radio del Círculo: </label> <!--Etiqueta del campo-->
        <input type = "number" step = "any" name = "radio" id = "radio" required> <!--Campo de insercion-->
        <button type = "submit">Calcular</button> <!--Buton para subir las entradas-->
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){ //Definición del metodo de solicitud
        $radio = $_POST["radio"]; //Asignacion de la solicitud a la variable $radio
        if ($radio > 0) { //Condicion para el calculo, radio debe ser menor que 0
            $pi = pi();
            $area = $pi * $radio * $radio;
            $perimetro = 2 * $pi * $radio;

            echo "<h3>Resultados:</h3>";
            echo "Radio: $radio <br>";
            echo "Área: " . round($area, 2) . "<br>";
            echo "Perímetro: " . round($perimetro, 2) . "<br>";
        } else {
            echo "<p style='color:red;'>El radio debe ser mayor que 0.</p>"; //Condicion sino si el numero es menor a 0
        }
}
?>
</body>
</html>


