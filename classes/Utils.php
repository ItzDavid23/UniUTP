<?php
declare(strict_types=1);

namespace Classes;

/**
 * Clase Utils
 * Contiene métodos estáticos para validación, sanitización y navegación.
 */
class Utils
{
     /**
     * Valida si una cadena es numérica (entero o decimal positivo)
     */
    public static function isNumeric(string $input): bool
    {
        return preg_match('/^\d+(\.\d+)?$/', $input) === 1;
    }

  /**
     * Convierte valores a float de forma segura
     */
    public static function toFloat(string $input): float
    {
        return (float) filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    }

    /** Sanitiza texto básico contra XSS */
    public static function sanitize(string $input): string
    {
        return htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    }

    /** Valida si un valor es un número entero positivo */
    public static function isPositiveInt(string $value): bool
    {
        return preg_match('/^[1-9][0-9]*$/', $value) === 1;
    }

    /** Valida un número flotante */
    public static function isFloat(string $value): bool
    {
        return filter_var($value, FILTER_VALIDATE_FLOAT) !== false;
    }

    /** Devuelve enlace HTML para volver al menú principal */
    public static function renderBackToMenuLink(string $url): string
    {
        $url = self::sanitize($url);
        return "<p><a href='{$url}' class='back-link'>&larr; Volver al menú principal</a></p>";
    }
}