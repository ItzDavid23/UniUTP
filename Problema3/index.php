<?php
require_once '../includes/bootstrap.php';
use classes\MultiplesOfFour;
use classes\Utils;

$result = null;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = $_POST['limit'] ?? '';
    if (!Utils::isNumeric($input) || (int)$input <= 0) {
        $error = "Enter a positive integer.";
    } else {
        $generator = new MultiplesOfFour();
        $result = $generator->generate((int)$input);
    }
}

include 'view.php';
