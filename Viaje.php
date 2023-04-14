<?php

class Viaje {
    private $responsable;//ResponsableV
    private $codigo;
    private $destino;
    private $maxPasajeros;
    private $pasajeros;//referencia a coleccion de pasajeros
    
    public function __construct($codigo, $destino, $maxPasajeros, $responsable) {
        $this->responsable = $responsable;
        $this->codigo = $codigo;
        $this->destino = $destino;
        $this->maxPasajeros = $maxPasajeros;
        $this->pasajeros = array();
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

    public function getResponsableV(){
        return $this->responsable->__toString();
    }

    public function setResponbleV($responsableV){
        $this->responsable = $responsableV;
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
