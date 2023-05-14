<?php
class Pasajero {
    protected $nombre;
    protected $numeroAsiento;
    protected $numeroTicket;

    public function __construct($nombre, $numeroAsiento, $numeroTicket) {
        $this->nombre = $nombre;
        $this->numeroAsiento = $numeroAsiento;
        $this->numeroTicket = $numeroTicket;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getNumeroAsiento() {
        return $this->numeroAsiento;
    }

    public function setNumeroAsiento($numeroAsiento) {
        $this->numeroAsiento = $numeroAsiento;
    }

    public function getNumeroTicket() {
        return $this->numeroTicket;
    }

    public function setNumeroTicket($numeroTicket) {
        $this->numeroTicket = $numeroTicket;
    }

    public function darPorcentajeIncremento() {
        return 10;
    }
}

class PasajeroVIP extends Pasajero {
    protected $numeroViajeroFrecuente;
    protected $millasPasajero;

    public function __construct($nombre, $numeroAsiento, $numeroTicket, $numeroViajeroFrecuente, $millasPasajero) {
        parent::__construct($nombre, $numeroAsiento, $numeroTicket);
        $this->numeroViajeroFrecuente = $numeroViajeroFrecuente;
        $this->millasPasajero = $millasPasajero;
    }

    public function getNumeroViajeroFrecuente() {
        return $this->numeroViajeroFrecuente;
    }

    public function setNumeroViajeroFrecuente($numeroViajeroFrecuente) {
        $this->numeroViajeroFrecuente = $numeroViajeroFrecuente;
    }

    public function getMillasPasajero() {
        return $this->millasPasajero;
    }

    public function setMillasPasajero($millasPasajero) {
        $this->millasPasajero = $millasPasajero;
    }

    public function darPorcentajeIncremento() {
        $porcentaje = 35;

        if ($this->millasPasajero > 300) {
            $porcentaje += 30;
        }

        return $porcentaje;
    }
}

class PasajeroNecesidadesEspeciales extends Pasajero {
    protected $requiereSillaRuedas;
    protected $requiereAsistencia;
    protected $requiereComidaEspecial;

    public function __construct($nombre, $numeroAsiento, $numeroTicket, $requiereSillaRuedas, $requiereAsistencia, $requiereComidaEspecial) {
        parent::__construct($nombre, $numeroAsiento, $numeroTicket);
        $this->requiereSillaRuedas = $requiereSillaRuedas;
        $this->requiereAsistencia = $requiereAsistencia;
        $this->requiereComidaEspecial = $requiereComidaEspecial;
    }

    public function getRequiereSillaRuedas() {
        return $this->requiereSillaRuedas;
    }

    public function setRequiereSillaRuedas($requiereSillaRuedas) {
        $this->requiereSillaRuedas = $requiereSillaRuedas;
    }

    public function getRequiereAsistencia() {
        return $this->requiereAsistencia;
    }

    public function setRequiereAsistencia($requiereAsistencia) {
        $this->requiereAsistencia = $requiereAsistencia;
    }

    public function getRequiereComidaEspecial() {
        return $this->requiereComidaEspecial;
    }

    public function setRequiereComidaEspecial($requiereComidaEspecial) {
        $this->requiereComidaEspecial = $requiereComidaEspecial;
    }

    public function darPorcentajeIncremento() {
        $porcentaje = 10;        
        if ($this->requiereSillaRuedas && $this->requiereAsistencia && $this->requiereComidaEspecial) {
            $porcentaje = 30;
        } elseif ($this->requiereSillaRuedas || $this->requiereAsistencia || $this->requiereComidaEspecial) {
            $porcentaje =  15;
        }
        return $porcentaje;
    }
}
