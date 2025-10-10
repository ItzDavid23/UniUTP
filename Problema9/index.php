<?php
declare(strict_types=1);

require_once __DIR__ . '/../includes/bootstrap.php';

use classes\PowerPrinter;

$resultado = null;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numero = (int) ($_POST['numero'] ?? 0);

    if ($numero >= 1 && $numero <= 9) {
        $printer = new PowerPrinter();
        $resultado = $printer->generatePowers($numero);
    } else {
        $error = "Debe ingresar un número entre 1 y 9.";
    }
}

include __DIR__ . '/view.php';
