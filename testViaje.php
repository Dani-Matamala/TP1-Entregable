<?php
require_once('Viaje.php');

$viaje = new Viaje(" ", " ", " ");

do {
    // Mostramos el menú
    echo "======= MENÚ =======\n";
    echo "1. Cargar información del viaje\n";
    echo "2. Modificar información del viaje\n";
    echo "3. Ver información del viaje\n";
    echo "4. Salir\n";
    echo "Seleccione una opción: ";

    // Leemos la opción seleccionada por el usuario
    $opcion = trim(fgets(STDIN));

    switch ($opcion) {
        case 1:
            // Cargamos la información del viaje
            echo "Ingrese el código del viaje: ";
            $codigo = trim(fgets(STDIN));
            echo "Ingrese el destino del viaje: ";
            $destino = trim(fgets(STDIN));
            echo "Ingrese la cantidad máxima de pasajeros: ";
            $maxPasajeros = trim(fgets(STDIN));
            $viaje->setCodigo($codigo);
            $viaje->setDestino($destino);
            $viaje->setMaxPasajeros($maxPasajeros);
            break;
        case 2:
            // Modificamos la información del viaje
            echo "¿Qué desea modificar?\n";
            echo "1. Código del viaje\n";
            echo "2. Destino del viaje\n";
            echo "3. Cantidad máxima de pasajeros\n";
            echo "Seleccione una opción: ";
            $opcionModificar = trim(fgets(STDIN));
            switch ($opcionModificar) {
                case 1:
                    echo "Ingrese el nuevo código del viaje: ";
                    $codigo = trim(fgets(STDIN));
                    $viaje->setCodigo($codigo);
                    break;
                case 2:
                    echo "Ingrese el nuevo destino del viaje: ";
                    $destino = trim(fgets(STDIN));
                    $viaje->setDestino($destino);
                    break;
                case 3:
                    echo "Ingrese la nueva cantidad máxima de pasajeros: ";
                    $maxPasajeros = trim(fgets(STDIN));
                    $viaje->setMaxPasajeros($maxPasajeros);
                    break;
                default:
                    echo "Opción inválida\n";
                    break;
            }
            break;
        case 3:
            // Mostramos la información del viaje
            echo "Código del viaje: " . $viaje->getCodigo() . "\n";
            echo "Destino del viaje: " . $viaje->getDestino() . "\n";
            echo "Cantidad máxima de pasajeros: " . $viaje->getMaxPasajeros() . "\n";
            echo "Pasajeros:\n";
            foreach ($viaje->getPasajeros() as $pasajero) {
                echo "- Nombre: " . $pasajero['nombre'] . ", Apellido: " . $pasajero['apellido'] . ", Número de documento: " . $pasajero['numero_documento'] . "\n";
            }
            break;
        case 4:
            // Salimos del programa
            echo "¡Hasta luego!\n";
            break;
        default:
            echo "Opción inválida\n";
            break;
    }
} while($opcion != 4);
