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

    public function setNombre($nombre){
        if (is_string($nombre) && trim ($nombre) !== ""){
            $this->nombre = $nombre;
        }
    }

    public function setApellido($apellido){
        if (is_string($apellido) && trim ($apellido) !== ""){
            $this->apellido = $apellido;
        }
    }

    public function setEdad($edad){
        if (is_numeric($edad) && $edad >=0 && $edad <=120){
            $this->edad = $edad;
        }
    }

    
    public function mostrar() {
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Apellido: " . $this->apellido . "<br>";
        echo "Edad: " . $this->edad . "<br>";
        echo "Correo: " . $this->correo . "<br>";
        echo "Documento: " . $this->documento . "<br><br>";
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