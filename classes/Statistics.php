<?php
declare(strict_types=1);

namespace Classes;

/**
 * Clase Statistics
 * Calcula media, desviación estándar, mínimo y máximo de un conjunto de números.
 */
class Statistics
{
    /** @var float[] */
    private array $numbers;

    public function __construct(array $numbers)
    {
        $this->numbers = $numbers;
    }

    public function calculateMean(): float
    {
        return array_sum($this->numbers) / count($this->numbers);
    }

    public function calculateStdDev(): float
    {
        $mean = $this->calculateMean();
        $variance = 0.0;
        foreach ($this->numbers as $num) {
            $variance += pow($num - $mean, 2);
        }
        return sqrt($variance / count($this->numbers));
    }

    public function getMin(): float
    {
        return min($this->numbers);
    }

    public function getMax(): float
    {
        return max($this->numbers);
    }
}
