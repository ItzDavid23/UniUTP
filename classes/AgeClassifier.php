<?php
declare(strict_types=1);

namespace Classes;

class AgeClassifier {
    public function classifyAges(array $ages): array {
        $categorias = [
            'Niño' => 0,
            'Adolescente' => 0,
            'Adulto' => 0,
            'Adulto mayor' => 0
        ];

        foreach ($ages as $edad) {
            if ($edad >= 0 && $edad <= 12) {
                $categorias['Niño']++;
            } elseif ($edad <= 17) {
                $categorias['Adolescente']++;
            } elseif ($edad <= 64) {
                $categorias['Adulto']++;
            } else {
                $categorias['Adulto mayor']++;
            }
        }

        return $categorias;
    }
}