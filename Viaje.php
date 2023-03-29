<?php
class Viaje {
    private $codigo;
    private $destino;
    private $maxPasajeros;
    private $pasajeros = array();
    
    public function __construct($codigo, $destino, $maxPasajeros) {
        $this->codigo = $codigo;
        $this->destino = $destino;
        $this->maxPasajeros = $maxPasajeros;
    }
    
    public function getCodigo() {
        return $this->codigo;
    }
    
    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }
    
    public function getDestino() {
        return $this->destino;
    }
    
    public function setDestino($destino) {
        $this->destino = $destino;
    }
    
    public function getMaxPasajeros() {
        return $this->maxPasajeros;
    }
    
    public function setMaxPasajeros($maxPasajeros) {
        $this->maxPasajeros = $maxPasajeros;
    }
    
    public function getPasajeros() {
        return $this->pasajeros;
    }
    
    public function agregarPasajero($nombre, $apellido, $numeroDoc) {
        if (count($this->pasajeros) < $this->maxPasajeros) {
            $pasajero = array(
                "nombre" => $nombre,
                "apellido" => $apellido,
                "numeroDoc" => $numeroDoc
            );
            array_push($this->pasajeros, $pasajero);
            return true;
        } else {
            return false;
        }
    }
    
    public function quitarPasajero($numeroDoc) {
        foreach ($this->pasajeros as $key => $pasajero) {
            if ($pasajero["numeroDoc"] == $numeroDoc) {
                unset($this->pasajeros[$key]);
                return true;
            }
        }
        return false;
    }
}
?>