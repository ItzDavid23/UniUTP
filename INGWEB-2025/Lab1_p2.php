<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset = 'UTF-8'> <!--Definicion básica de metadatos-->
    <meta name = 'viewport' content = 'width-devide-width, initial-scale=1.0'>
    <title>Pulgadas a Centimetros</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Calculadora de Pulgadas a Centimetros</h2>
    <form method="POST"> <!--Formulario para la interaccion con el usuario-->
        <label for="pulgadas" name='Lpulg' id='L1' for='Pulgadas'>Ingrese las pulgadas: </label>
        <input type='number' step='any' name="pulgadas" id='I2' required>
        <button type='submit' name='bcalcular' id=B1>Calcular</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){ //Estableciendo la conexión con el formulario y el metodo definido
        $pulgada=$_POST['pulgadas'];
        if ($pulgada > 0){ //Logica del programa
            $centimetro = $pulgada * 2.54;
            echo $pulgada . " Pulgadas en centimetro son: <br>";
            echo $centimetro . 'cm';
        }
        else{
            echo "<p style='color:red;'>No puede ser menor que 0 las pulgadas</p>"; //Resultado en caso erroeno, con estilo
        }
    }
    ?>
</body>
</html>