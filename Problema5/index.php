<?php
declare(strict_types=1);

require_once __DIR__ . '/../includes/bootstrap.php';

use classes\AgeClassifier;

$resultado = null;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $edades = array_map('intval', $_POST['edades'] ?? []);

    if (count($edades) === 5 && min($edades) >= 0 && max($edades) <= 130) {
        $clasificador = new AgeClassifier();
        $resultado = $clasificador->classifyAges($edades);
    } else {
        $error = "Debe ingresar 5 edades válidas entre 0 y 130.";
    }
}

include __DIR__ . '/view.php';