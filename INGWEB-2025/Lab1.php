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
        <input type = "number" step = "1" name = "radio" id = "radio" required>
        <button type = "submit"> Calcular </button>
    </form>

    <?php
    //Verificar que el usuario envia el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $radio = $_POST["radio"];
        if ($radio > 0){
            $pi = pi();
            $perimetro = 2 * $pi * $radio;
            $area = $pi * pow($radio, 2);

            echo "<h3>Resultados de los calculos<h3>";
            echo "El circulo con radio: " . $radio . "<br>";
            echo "Tiene perimetro de: " . $perimetro . "<br>";
            echo "Y un area de: " . $area . "<br>";
        }
        else{
            echo "<p style = 'color:red;'>El radio debe ser mayor que 0. </p>";
        }
    }
    ?>
</body>
</html>


