<?php
declare(strict_types=1);

namespace Classes;

/**
 * ParitySummation
 * Clase para calcular la suma de números pares e impares dentro de un rango.
 */
class ParitySummation
{
    /**
     * Calcula la suma de los números pares e impares dentro de un rango dado.
     *
     * @param int $start Inicio del rango.
     * @param int $end Fin del rango.
     * @return array{ sumaPar:int, sumaImpar:int } Resultados de la suma.
     */
    public function sumRange(int $start, int $end): array
    {
        $sumaPar = 0;
        $sumaImpar = 0;

        for ($i = $start; $i <= $end; $i++) {
            if ($i % 2 === 0) {
                $sumaPar += $i;
            } else {
                $sumaImpar += $i;
            }
        }

        return [
            'sumaPar' => $sumaPar,
            'sumaImpar' => $sumaImpar
        ];
    }
}
