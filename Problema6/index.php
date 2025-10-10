<?php
declare(strict_types=1);

require_once __DIR__ . '/../includes/bootstrap.php';

use classes\BudgetDistributor;

$resultado = null;
$porcentajes = [];
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $presupuesto = (float) ($_POST['presupuesto'] ?? 0);

    if ($presupuesto > 0) {
        $dist = new BudgetDistributor();
        $resultado = $dist->distribute($presupuesto);

        // Calculamos los porcentajes sobre el total para mostrar en tabla y gráfico
        $totalDistribuido = array_sum($resultado);
        foreach ($resultado as $area => $monto) {
            $porcentajes[$area] = ($monto / $totalDistribuido) * 100;
        }
    } else {
        $error = "Ingrese un monto válido mayor que cero.";
    }
}

include __DIR__ . '/view.php';
