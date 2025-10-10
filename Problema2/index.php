<?php
require_once '../includes/bootstrap.php';
use classes\SumOneToThousand;

$result = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $calc = new SumOneToThousand();
    $result = [
        'loop' => $calc->sumWithLoop(),
        'formula' => $calc->sumWithFormula()
    ];
}

include 'view.php';