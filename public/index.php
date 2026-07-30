<?php
require_once "persona.php";

// ---------------------------------------------------------------------
// PUNTO 1: Crear tres objetos
// ---------------------------------------------------------------------
$persona1 = new persona("Luis", "Gomez", 19, "luisangel@gmail.com", "1058198790");
$persona2 = new persona("Yojan", "Pulido", 18, "yojanchicopaleta@gmail.com", "12345676");
$persona3 = new persona("Ozuna", "Negrito", 30, "ozunaola@gmail.com", "54322456543");


$persona1->mostrar();
$persona2->mostrar();
$persona3->mostrar();
echo "<hr>";


// ---------------------------------------------------------------------
// PUNTO 2: Intentar modificar atributos privados directamente (GENERAR ERRORES)
// ---------------------------------------------------------------------

// Modificación permitida porque usa un método público (setter):
$persona1->nombre = "carlos";

$persona1-

// --- INTENTOS DE MODIFICACIÓN DIRECTA (DESCOMENTAR PARA PROBAR EL ERROR) ---

// $persona1->apellido = "Gómez Pérez"; 
// ERROR FATAL: Cannot access private property persona::$apellido

// $persona2->nombre = "Yojan Andrés"; 
// ERROR FATAL: Cannot access private property persona::$nombre

// $persona3->correo = "correo_nuevo@gmail.com"; 
// ERROR FATAL: Cannot access private property persona::$correo


// ---------------------------------------------------------------------
// PUNTO 3: Intentar leer atributos privados directamente (GENERAR ERRORES)
// ---------------------------------------------------------------------

// echo $persona1->nombre;
// ERROR FATAL: Cannot access private property persona::$nombre



$persona1->mostrar();
$persona2->mostrar();
$persona3->mostrar();