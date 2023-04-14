<?php

class Viaje {
    private $responsable; //ResponsableV
    private $codigo;
    private $destino;
    private $maxPasajeros;
    private $pasajeros; //referencia a coleccion de pasajeros

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

    public function getResponsableV() {
        return $this->responsable->__toString();
    }

    public function setResponbleV($responsableV) {
        $this->responsable = $responsableV;
    }

    private function existePasajero($pasajero) {
        foreach ($this->pasajeros as $buscado) {
            if ($buscado->getNumero_documento() == $pasajero->getNumero_documento()) {
                return true;
            }
        }
        return false;
    }

    public function agregarPasajero($pasajero) {
        if (count($this->pasajeros) < $this->maxPasajeros && !$this->existePasajero($pasajero)) {
            array_push($this->pasajeros, $pasajero);
            return true; //caso en que todo salio bien 
        } else {
            return false; //caso en que fallo la insercion del objeto pasajero
        }
    }


    public function quitarPasajero($pasajero) {
        foreach ($this->pasajeros as $buscado) {
            if ($buscado->getNumero_documento() == $pasajero->getNumero_documento()) {
                unset($this->pasajeros[$buscado]);
                return true;
            }
        }
        return false;
    }

    public function __toString() {
        $pasajeros = "";
        foreach ($this->pasajeros as $pasajero) {
            $pasajeros .= $pasajero->__toString() . ", \n";
        }
        $pasajeros = rtrim($pasajeros, ', ');
        return "Código: $this->codigo\nDestino: $this->destino\nMáximo de pasajeros: $this->maxPasajeros\nResponsable: $this->responsable\nPasajeros: $pasajeros";
    }
    
}
