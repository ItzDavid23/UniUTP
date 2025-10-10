# Proyecto PHP POO - Base del Sistema (Etapa A)

## Introducción
Este proyecto implementa 10 problemas prácticos en PHP 8+ aplicando **programación orientada a objetos (POO)**.  
La arquitectura se organiza por módulos (`problem1/` ... `problem10/`), todos accesibles desde un menú principal en `index.php`.

## Estructura
- `/index.php` → entrada principal
- `/views/menu.php` → HTML separado
- `/assets/css/styles.css` → estilos básicos
- `/assets/js/charts.js` → inicializador Chart.js
- `/classes/Utils.php` → validación, sanitización y utilidades
- `/includes/footer.php` → footer común
- `/includes/bootstrap.php` → autoload y entorno base

## Validación y Sanitización
- `preg_match()` → validaciones por patrón (enteros positivos)
- `filter_var()` → validaciones tipo numérico o email
- `htmlspecialchars()` → evita XSS al imprimir variables

## POO aplicada
- Uso de `declare(strict_types=1);`
- Clases con métodos estáticos (`Utils`)
- Nombres: **StudlyCaps** para clases, **camelCase** para métodos/variables
- Separación de responsabilidades (cada módulo independiente)

## Siguientes pasos
1. Crear carpetas `problem1` a `problem10`.
2. Implementar las clases específicas (`Statistics`, `SalesLedger`, etc.).
3. Incluir en cada vista el footer y enlace al menú principal usando `Utils::renderBackToMenuLink('index.php')`.

---

**Autor:** Tiguere  
**Fecha de generación:** 9 de octubre de 2025
