<?php
declare(strict_types=1);

namespace Classes;

class SalesLedger
{
    private array $sales = [];

    public function __construct(int $numProducts = 5, int $numSellers = 4)
    {
        for ($p = 1; $p <= $numProducts; $p++) {
            for ($v = 1; $v <= $numSellers; $v++) {
                $this->sales[$p][$v] = 0.0;
            }
        }
    }

    public function recordSale(int $product, int $seller, float $amount): void
    {
        if ($product < 1 || $product > 5 || $seller < 1 || $seller > 4 || $amount < 0) {
            throw new \InvalidArgumentException("Valores de entrada inválidos");
        }
        $this->sales[$product][$seller] += $amount;
    }

    public function getTable(): array
    {
        return $this->sales;
    }

    public function getRowTotals(): array
    {
        $totals = [];
        foreach ($this->sales as $product => $row) {
            $totals[$product] = array_sum($row);
        }
        return $totals;
    }

    public function getColumnTotals(): array
    {
        $totals = [];
        foreach ($this->sales as $row) {
            foreach ($row as $seller => $value) {
                $totals[$seller] = ($totals[$seller] ?? 0) + $value;
            }
        }
        return $totals;
    }
}
