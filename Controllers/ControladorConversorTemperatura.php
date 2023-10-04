<?php

class ControladorConversorTemperatura
{
    private $modelo;
    private $vista;

    public function convertirTemperatura($temperatura, $unidadOrigen, $unidadDestino)
    {
        if ($unidadOrigen === $unidadDestino) {
            return $temperatura; // No es necesario convertir si son las mismas unidades
        }

        switch ($unidadOrigen) {
            case 'Celsius':
                return $this->convertirDesdeCelsius($temperatura, $unidadDestino);
            case 'Fahrenheit':
                return $this->convertirDesdeFahrenheit($temperatura, $unidadDestino);
            case 'Kelvin':
                return $this->convertirDesdeKelvin($temperatura, $unidadDestino);
            default:
                return null; // Unidad no válida
        }
    }

    private function convertirDesdeCelsius($temperatura, $unidadDestino)
    {
        switch ($unidadDestino) {
            case 'Fahrenheit':
                return ($temperatura * 9/5) + 32;
            case 'Kelvin':
                return $temperatura + 273.15;
            default:
                return null; // Unidad destino no válida
        }
    }

    private function convertirDesdeFahrenheit($temperatura, $unidadDestino)
    {
        switch ($unidadDestino) {
            case 'Celsius':
                return ($temperatura - 32) * 5/9;
            case 'Kelvin':
                return ($temperatura - 32) * 5/9 + 273.15;
            default:
                return null; // Unidad destino no válida
        }
    }

    private function convertirDesdeKelvin($temperatura, $unidadDestino)
    {
        switch ($unidadDestino) {
            case 'Celsius':
                return $temperatura - 273.15;
            case 'Fahrenheit':
                return ($temperatura - 273.15) * 9/5 + 32;
            default:
                return null; // Unidad destino no válida
        }
    }
}

// Instanciación
$controlador = new ControladorConversorTemperatura();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $temperatura = @$_POST['temperatura'];
    $unidadOrigen = @$_POST['unidad_origen'];
    $unidadDestino = @$_POST['unidad_destino'];

    echo $controlador->convertirTemperatura($temperatura, $unidadOrigen, $unidadDestino);
}

?>
