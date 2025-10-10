<?php
declare(strict_types=1);

/**
 * index.php
 * Punto de entrada del proyecto.
 * Carga el entorno básico y muestra el menú principal.
 */

require_once __DIR__ . '/includes/bootstrap.php';

// Renderiza la vista del menú
require_once __DIR__ . '/views/menu.php';