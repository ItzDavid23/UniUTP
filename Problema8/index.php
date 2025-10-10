<?php
declare(strict_types=1);

require_once __DIR__ . '/../includes/bootstrap.php';

use classes\SeasonChecker;

$resultado = null;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fecha = $_POST['fecha'] ?? '';

    if (preg_match('/^\d{4}-\d{2}-\d{2}$/', $fecha)) {
        $checker = new SeasonChecker();
        $resultado = $checker->getSeason(new DateTime($fecha));
    } else {
        $error = "Formato de fecha no válido.";
    }
}

include __DIR__ . '/view.php';
