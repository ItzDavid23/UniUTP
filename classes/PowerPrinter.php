<?php
declare(strict_types=1);

namespace Classes;

class PowerPrinter {
    public function generatePowers(int $base, int $count = 15): array {
        $resultados = [];
        $acumulado = 1;

        for ($i = 1; $i <= $count; $i++) {
            $acumulado *= $base;
            $resultados[] = [
                'n' => $i,
                'pow' => pow($base, $i),
                'iterativo' => $acumulado
            ];
        }

        return $resultados;
    }
}
