<?php
declare(strict_types=1);

namespace Classes;

/**
 * BudgetDistributor
 * Distribuye un presupuesto total entre áreas hospitalarias usando porcentajes predefinidos.
 */
class BudgetDistributor {
    private array $porcentajes = [
        'Ginecología' => 0.4,
        'Pediatría' => 0.25,
        'Traumatología' => 0.35
    ];

    /**
     * Distribuye el presupuesto total según los porcentajes predefinidos.
     *
     * @param float $total Presupuesto total
     * @return array<string,float> Valores absolutos por área
     */
    public function distribute(float $total): array {
        $resultados = [];
        foreach ($this->porcentajes as $area => $p) {
            $resultados[$area] = $total * $p;
        }
        return $resultados;
    }

    /**
     * Retorna los porcentajes predefinidos (0-100)
     *
     * @return array<string,float>
     */
    public function getPercentages(): array {
        $percent = [];
        foreach ($this->porcentajes as $area => $p) {
            $percent[$area] = $p * 100;
        }
        return $percent;
    }
}
