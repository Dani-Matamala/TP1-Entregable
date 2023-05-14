<?php
class Viaje {
    private $obj_responsable; // Instancia de la clase obj_ResponsableV
    private $codigo;
    private $destino;
    private $maxPasajeros;
    private $col_pasajeros; // Referencia a colección de col_pasajeros
    private $costoViaje;
    private $costosAbonados;

    public function __construct($codigo, $destino, $maxPasajeros, $obj_responsable) {
        $this->obj_responsable = $obj_responsable;
        $this->codigo = $codigo;
        $this->destino = $destino;
        $this->maxPasajeros = $maxPasajeros;
        $this->col_pasajeros = array();
        $this->costoViaje = 0;
        $this->costosAbonados = 0;
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
        return $this->col_pasajeros;
    }

    public function getobj_ResponsableV() {
        return $this->obj_responsable->__toString();
    }

    public function setResponbleV($obj_responsableV) {
        $this->obj_responsable = $obj_responsableV;
    }

    private function existePasajero($pasajero) {
        foreach ($this->col_pasajeros as $buscado) {
            if ($buscado->getNumero_documento() == $pasajero->getNumero_documento()) {
                return true;
            }
        }
        return false;
    }

    public function agregarPasajero($pasajero) {
        if (count($this->col_pasajeros) < $this->maxPasajeros && !$this->existePasajero($pasajero)) {
            array_push($this->col_pasajeros, $pasajero);
            return true; // Caso en que todo salió bien 
        } else {
            return false; // Caso en que falló la inserción del objeto pasajero
        }
    }

    public function quitarPasajero($pasajero) {
        foreach ($this->col_pasajeros as $key => $buscado) {
            if ($buscado->getNumero_documento() == $pasajero->getNumero_documento()) {
                unset($this->col_pasajeros[$key]);
                return true;
            }
        }
        return false;
    }

    public function venderPasaje($objPasajero) {
        if ($this->hayPasajesDisponible()) {
            $this->agregarPasajero($objPasajero);
            $this->costosAbonados += $this->calcularCostoFinal($objPasajero);
            return $this->costosAbonados;
        } else {
            return null;// debe ser manejado en la clase principal 
        }
    }

    public function hayPasajesDisponible() {
        return count($this->col_pasajeros) < $this->maxPasajeros;
    }
    private function calcularCostoFinal($objPasajero) {
        $porcentajeIncremento = $objPasajero->darPorcentajeIncremento();
        $incremento = $this->costoViaje * $porcentajeIncremento / 100;
        return $this->costoViaje + $incremento;
    }

    public function __toString() {
        $col_pasajeros = "";
        foreach ($this->col_pasajeros as $pasajero) {
            $col_pasajeros .= "#" . $pasajero->__toString() . ", \n";
        }
        $col_pasajeros = rtrim($col_pasajeros, ', ');
        return "Código: $this->codigo\nDestino: $this->destino\nMáximo de col_pasajeros: $this->maxPasajeros\nobj_Responsable\n$this->obj_responsable\nPasajeros\n$col_pasajeros";
    }
}