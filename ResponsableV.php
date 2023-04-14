<?php
class ResponsableV {
    private $numero_empleado;
    private $numero_licencia;
    private $nombre;
    private $apellido;

    public function __construct($numero_empleado, $numero_licencia, $nombre, $apellido) {
        $this->numero_empleado = $numero_empleado;
        $this->numero_licencia = $numero_licencia;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function getNumero_empleado() {
        return $this->numero_empleado;
    }

    public function setNumero_Empleado($numero_empleado) {
        $this->numero_empleado = $numero_empleado;
    }

    public function getNumeroLicencia() {
        return $this->numero_licencia;
    }

    public function setNumeroLicencia($numero_licencia) {
        $this->numero_licencia = $numero_licencia;
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

    public function __toString() {
        return "Nombre: " . $this->nombre . 
        "\nApellido: " . $this->apellido . 
        "\nNumero de Empleado: " . $this->numero_empleado . 
        "\nNúmero de Licencia: " . $this->numero_licencia;
      }
}
