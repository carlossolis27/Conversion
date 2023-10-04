<?php

class ControladorConversorMonedas
{

    private $tasasDeCambio = [
        'USD' => 1.0,
        'EUR' => 0.95,
        'GBP' => 0.82,
        'JPY' => 149.26,
        'CAD' => 1.35,
    ];

    public function convertirMoneda($cantidad, $monedaOrigen, $monedaDestino)
    {
        if (!isset($this->tasasDeCambio[$monedaOrigen]) || !isset($this->tasasDeCambio[$monedaDestino])) {
            return null;
        }

        $tasaDeCambio = $this->tasasDeCambio[$monedaDestino] / $this->tasasDeCambio[$monedaOrigen];
        return $cantidad * $tasaDeCambio;
    }
}
// instanciacion
$controlador = new ControladorConversorMonedas();
        
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cantidad = @$_POST['cantidad'];
    $monedaOrigen = @$_POST['moneda_origen'];
    $monedaDestino = @$_POST['moneda_destino'];

echo $controlador->convertirMoneda($cantidad, $monedaOrigen, $monedaDestino);
}
?>