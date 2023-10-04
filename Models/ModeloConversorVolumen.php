<?php

class ModeloConversorVolumen
{
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
?>
