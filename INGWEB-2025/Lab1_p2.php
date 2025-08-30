<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset = 'UTF-8'>
    <meta name = 'viewport' content = 'width-devide-width, initial-scale=1.0'>
    <title>Pulgadas a Centimetros</title>
</head>

<body>
    <h2>Calculadora de Pulgadas a Centimetros<h/>
    <form method='POST'>
        <label for="pulgadas" name='Lpulg' id='L1' for='Pulgadas'>Ingrese las pulgadas</label>
        <input type='number' step='2' name=Ipulg id='I2' required>
        <button type='submit' name='bcalcular' id=B1>Calcular</button>
    </form>
    <?php
    if ($_SERVER[REQUEST_METHOD] == "POST"){
        $pulgada=$_POST['pulgadas'];
        if($pulgada > 0){
            $centimetro = $pulgada * 2.54;
            echo 'Las pulgadas ' . $pulgada . 'En centimetros:';
            echo $pulgada . 'cm';
        }
        else{
            echo "<p style='color:red;'>No puede ser menor que 0 las pulgadas</p>";
        }
    }
    ?>
</body>
</html>