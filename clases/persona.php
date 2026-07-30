<?php

class persona {
    // 1. Atributos privados
    private $nombre;
    private $apellido;
    private $edad;
    private $correo;
    private $documento;

    // 2. Constructor
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

  
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }

    public function setDocumento($documento) {
        $this->documento = $documento;
    }


    public function getNombre(){
    return $this->nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function getCorreo(){
        return $this->correo;
    }

    public function getDocumento(){
        return $this->documento;
    }
}