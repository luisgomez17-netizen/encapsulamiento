<?php

class persona {
    // CAMBIO A PRIVADO: Solo la clase puede acceder o modificar estas propiedades
    private $nombre;
    private $apellido;
    private $edad;
    private $correo;
    private $documento;

    public function __construct($nombre, $apellido, $edad, $correo, $documento) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->correo = $correo;
        $this->documento = $documento;
    }

    public function mostrar() {
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Apellido: " . $this->apellido . "<br>";
        echo "Edad: " . $this->edad . "<br>";
        echo "Correo: " . $this->correo . "<br>";
        echo "Documento: " . $this->documento . "<br><br>";
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }

    public function getEdad() {
        return $this->edad;
    }
}