<?php
declare(strict_types=1);

require_once __DIR__ . '/../includes/bootstrap.php';
use classes\Utils;
use classes\Statistics;

$result = null;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputs = [];

    for ($i = 1; $i <= 5; $i++) {
        $field = $_POST["num$i"] ?? '';
        if (!Utils::isNumeric($field)) {
            $error = "All values must be numeric.";
            break;
        }
        $inputs[] = Utils::toFloat($field);
    }

    if (empty($error)) {
        $stats = new Statistics($inputs);
        $result = [
            'mean' => $stats->calculateMean(),
            'stddev' => $stats->calculateStdDev(),
            'min' => $stats->getMin(),
            'max' => $stats->getMax()
        ];
    }
}

include 'view.php';
