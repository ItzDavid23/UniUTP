<?php
declare(strict_types=1);

namespace Classes;

/**
 * Clase SumOneToThousand
 * Calcula la suma del 1 al 1000 de dos formas.
 */
class SumOneToThousand
{
    public function sumWithLoop(): int
    {
        $sum = 0;
        for ($i = 1; $i <= 1000; $i++) {
            $sum += $i;
        }
        return $sum;
    }

    public function sumWithFormula(): int
    {
        $n = 1000;
        return ($n * ($n + 1)) / 2;
    }
}