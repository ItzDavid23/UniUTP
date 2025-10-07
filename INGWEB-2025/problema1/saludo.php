<?php
interface SaludoInterface {
    public function saludar(string $nombre): string;
}

abstract class Saludo implements SaludoInterface {
    protected string $idioma;

    public function __construct(string $idioma) {
        $this->idioma = $idioma;
    }

    public function getIdioma(): string {
        return $this->idioma;
    }
}

class SaludoEspanol extends Saludo {
    public function __construct() {
        parent::__construct("Español");
    }

    public function saludar(string $nombre): string {
        return "¡Hola, $nombre! ¿Cómo estás hoy?";
    }
}

class SaludoIngles extends Saludo {
    public function __construct() {
        parent::__construct("English");
    }

    public function saludar(string $nombre): string {
        return "Hello, $nombre! How are you today?";
    }
}

class FabricaSaludo {
    public static function obtenerSaludo(string $idioma): SaludoInterface {
        switch (strtolower($idioma)) {
            case 'en':
            case 'english':
                return new SaludoIngles();
            case 'es':
            case 'español':
            default:
                return new SaludoEspanol();
        }
    }
}
