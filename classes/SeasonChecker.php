<?php
declare(strict_types=1);

namespace Classes;

use DateTime;

class SeasonChecker {
    public function getSeason(DateTime $date): string {
        $md = (int) $date->format('md'); // Ej: 2103 = 21 marzo

        // Hemisferio sur
        return match (true) {
            $md >= 1221 || $md <= 320  => 'Verano',
            $md >= 321  && $md <= 621  => 'Otoño',
            $md >= 622  && $md <= 922  => 'Invierno',
            $md >= 923  && $md <= 1220 => 'Primavera',
            default => 'Desconocida'
        };
    }
}
