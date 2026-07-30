<?php
require_once "../clases/persona.php";


$persona1 = new persona("Luis", "Gomez", 19, "luisangel@gmail.com", "1058198790");
$persona2 = new persona("Yojan", "Pulido", 18, "yojanchicopaleta@gmail.com", "12345676");
$persona3 = new persona("Ozuna", "Negrito", 30, "ozunaola@gmail.com", "54322456543");


$persona1->mostrar();
$persona2->mostrar();
$persona3->mostrar();
echo "<hr>";



$persona1->mostrar();
$persona2->mostrar();
$persona3->mostrar();

$persona1->setNombre("Carlos");
$persona2->setEdad(38);

$persona1->mostrar();
$persona2->mostrar();
$persona3->mostrar();


echo "<hr";
