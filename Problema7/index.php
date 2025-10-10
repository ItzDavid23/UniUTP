<?php
declare(strict_types=1);

require_once __DIR__ . '/../includes/bootstrap.php';

use classes\Statistics;
use classes\Utils;

$resultado = null;
$error = '';
$notas = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cantidad = (int) ($_POST['cantidad'] ?? 0);
    $notas = $_POST['notas'] ?? [];

    // Validar que sean números y estén entre 0 y 100
    foreach ($notas as $nota) {
        if (!Utils::isNumeric($nota) || $nota < 0 || $nota > 100) {
            $error = "Todas las notas deben ser números entre 0 y 100.";
            break;
        }
    }

    if (empty($error) && count($notas) === $cantidad && $cantidad > 0) {
        // Instanciar Statistics con el array de notas
        $notasFloat = array_map('floatval', $notas);
        $stats = new Statistics($notasFloat);

        $resultado = [
            'media' => $stats->calculateMean(),
            'desviacion' => $stats->calculateStdDev(),
            'min' => $stats->getMin(),
            'max' => $stats->getMax()
        ];
    } else {
        $error = $error ?: "Ingrese una cantidad válida de notas.";
    }
}

include __DIR__ . '/view.php';
