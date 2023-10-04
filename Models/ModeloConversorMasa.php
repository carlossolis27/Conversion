<?php
class ModeloConversorMasa
{
    private $tasasDeConversion = [
        'gramo' => 1.0,
        'kilogramo' => 0.001,
        'libra' => 0.00220462,
        'onza' => 0.035274,
        'tonelada' => 0.000001,
    ];

    public function convertirMasa($cantidad, $unidadOrigen, $unidadDestino)
    {
        if (!isset($this->tasasDeConversion[$unidadOrigen]) || !isset($this->tasasDeConversion[$unidadDestino])) {
            return null;
        }

        $tasaDeConversion = $this->tasasDeConversion[$unidadDestino] / $this->tasasDeConversion[$unidadOrigen];
        return $cantidad * $tasaDeConversion;
    }
}

?>