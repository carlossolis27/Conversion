<?php
class ControladorConversorLongitud
{
    private $modelo;
    private $vista;
    private $tasasDeConversion = [
        'metro' => 1.0,
        'pie' => 3.28084,
        'pulgada' => 39.3701,
        'centimetro' => 100,
        'kilometro' => 0.001,
    ];

    public function convertirLongitud($valor, $unidadOrigen, $unidadDestino)
    {
        if (!isset($this->tasasDeConversion[$unidadOrigen]) || !isset($this->tasasDeConversion[$unidadDestino])) {
            return null;
        }

        $tasaDeConversion = $this->tasasDeConversion[$unidadDestino] / $this->tasasDeConversion[$unidadOrigen];
        return $valor * $tasaDeConversion;
    }
}

// Instanciación
$controladorLongitud = new ControladorConversorLongitud();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $valor = @$_POST['valor'];
    $unidadOrigen = @$_POST['unidad_origen'];
    $unidadDestino = @$_POST['unidad_destino'];

    echo $controladorLongitud->convertirLongitud($valor, $unidadOrigen, $unidadDestino);
}

?>