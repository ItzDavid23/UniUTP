<?php
declare(strict_types=1);

namespace Classes;

/**
 * Clase MultiplesOfFour
 * Genera los múltiplos de 4 hasta un límite dado.
 */
class MultiplesOfFour
{
    public function generate(int $limit): array
    {
        $multiples = [];
        for ($i = 1; $i <= $limit; $i++) {
            if ($i % 4 === 0) {
                $multiples[] = $i;
            }
        }
        return $multiples;
    }
}