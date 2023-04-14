<?php
class Pasajero {
    private $nombre;
    private $apellido;
    private $numero_documento;
    private $telefono;

    public function __construct($nombre, $apellido, $numero_documento, $telefono) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->numero_documento = $numero_documento;
        $this->telefono = $telefono;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function getNumero_documento() {
        return $this->numero_documento;
    }

    public function setNumero_documento($numero_documento) {
        $this->numero_documento = $numero_documento;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function __toString() {
        return "Nombre: " . $this->nombre .
            "\nApellido: " . $this->apellido .
            "\nTipo de Documento: " . $this->numero_documento .
            "\nNúmero de Documento: " . $this->telefono;
    }
}
