# Proyecto PHP POO - Base del Sistema (Etapa A)

## Introducción
El proyecto consiste en un conjunto de problemas resueltos utilizando PHP orientado a objetos (POO), donde se aplican conceptos de programación modular, validación de datos y representación gráfica de información. Cada problema está estructurado en carpetas independientes, con sus archivos de clase, vista y lógica principal (index.php). El objetivo es combinar lógica matemática, manejo de datos y visualización mediante Chart.js en un entorno web.

El proyecto permite al usuario interactuar mediante formularios HTML, ingresar datos y obtener resultados calculados automáticamente, mostrando además gráficos que facilitan la interpretación de los resultados.

## Estructura
- `/index.php` → entrada principal
- `/views/menu.php` → HTML separado
- `/assets/css/styles.css` → estilos básicos
- `/assets/js/charts.js` → inicializador Chart.js
- `/classes/Utils.php` → validación, sanitización y utilidades
- `/includes/footer.php` → footer común
- `/includes/bootstrap.php` → autoload y entorno base

## Uso de POO

Cada problema tiene su propia clase que encapsula la lógica principal.
Ejemplos:
**Statistics** → calcula media, desviación estándar, mínimo y máximo de un conjunto de números.
**BudgetDistributor** → distribuye un presupuesto total entre diferentes áreas según porcentajes definidos.
**SalesLedger** → registra y calcula ventas en un arreglo bidimensional.
Las clases utilizan métodos públicos para interactuar con los datos y propiedades privadas para proteger la información interna.
Se usan métodos estáticos en la clase Utils para funciones que no dependen de una instancia, como sanitización de inputs o validación de números. Esto permite llamarlos directamente con Utils::sanitize($input) o Utils::isNumeric($input) sin necesidad de instanciar la clase.

## Validación y Sanitización
- `preg_match()` → validaciones por patrón (enteros positivos)
- `filter_var()` → validaciones tipo numérico o email
- `htmlspecialchars()` → evita XSS al imprimir variables

## POO aplicada
- Uso de `declare(strict_types=1);`
- Clases con métodos estáticos (`Utils`)
- Nombres: **StudlyCaps** para clases, **camelCase** para métodos/variables
- Separación de responsabilidades (cada módulo independiente)

**Autor:** David
**Pertenciente a la Universidad Tecnológica de Panamá**
**Correo: david.gonzalez20@utp.ac.pa**
**Curso: Ingeniería Web**
**Fecha de generación:** 9 de octubre de 2025
