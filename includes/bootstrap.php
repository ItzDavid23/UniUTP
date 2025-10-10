<?php
declare(strict_types=1);

/**
 * includes/bootstrap.php
 * Configura autoload de clases y ajustes base.
 */

// Activar reporte de errores (solo en desarrollo)
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Registrar autoload PSR-4 manual simple
spl_autoload_register(function (string $class): void {
    $prefix = 'classes\\';
    $baseDir = __DIR__ . '/../classes/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

      // Obtener el nombre de clase relativo
    $relativeClass = substr($class, strlen($prefix));

    // Reemplazar "\" por "/" y añadir la ruta base
    $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});