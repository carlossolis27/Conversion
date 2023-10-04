<?php

class ControladorConversorVolumen
{
    private $modelo;
    private $vista;
    private $factoresDeConversion = [
        'Litros' => 1.0,
        'Galones' => 0.264172,
        'Pintas' => 2.11338,
        'Centímetros cúbicos' => 1000,
        'Metros cúbicos' => 0.001,
    ];

    public function convertirVolumen($cantidad, $unidadOrigen, $unidadDestino)
    {
        if (!isset($this->factoresDeConversion[$unidadOrigen]) || !isset($this->factoresDeConversion[$unidadDestino])) {
            return null;
        }

        $factorDeConversion = $this->factoresDeConversion[$unidadDestino] / $this->factoresDeConversion[$unidadOrigen];
        return $cantidad * $factorDeConversion;
    }
}

// Instanciación
$controlador = new ControladorConversorVolumen();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cantidad = @$_POST['cantidad'];
    $unidadOrigen = @$_POST['unidad_origen'];
    $unidadDestino = @$_POST['unidad_destino'];

    echo $controlador->convertirVolumen($cantidad, $unidadOrigen, $unidadDestino);
}

?>
