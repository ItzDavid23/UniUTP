<?php
declare(strict_types=1);

require_once __DIR__ . '/../includes/bootstrap.php';
use classes\SalesLedger;

// Iniciar sesión
session_start();

// Limpiar sesión si es necesario (evita errores de objetos incompletos)
if (!isset($_SESSION['salesLedger']) || !$_SESSION['salesLedger'] instanceof SalesLedger) {
    $_SESSION['salesLedger'] = new SalesLedger();
}

/** @var SalesLedger $ledger */
$ledger = $_SESSION['salesLedger'];

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product = (int)($_POST['product'] ?? 0);
    $seller = (int)($_POST['seller'] ?? 0);
    $amount = (float)($_POST['amount'] ?? 0);

    try {
        $ledger->recordSale($product, $seller, $amount);
        $_SESSION['salesLedger'] = $ledger; // guardar en sesión
        $success = "Venta registrada correctamente.";
    } catch (\Exception $e) {
        $error = $e->getMessage();
    }
}

// Obtener datos para la tabla
$sales = $ledger->getTable();
$rowTotals = $ledger->getRowTotals();
$columnTotals = $ledger->getColumnTotals();

require_once __DIR__ . '/view.php';
