<?php
declare(strict_types=1);

require_once __DIR__ . '/../includes/bootstrap.php';

use classes\ParitySummation;

$resultado = null;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inicio = (int) ($_POST['inicio'] ?? 1);
    $fin = (int) ($_POST['fin'] ?? 200);

    if ($inicio > 0 && $fin >= $inicio) {
        $sumador = new ParitySummation();
        $resultado = $sumador->sumRange($inicio, $fin);
    } else {
        $error = "Los valores deben ser positivos y el final mayor o igual al inicio.";
    }
}

include __DIR__ . '/view.php';
