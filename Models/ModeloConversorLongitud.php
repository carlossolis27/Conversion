<?php 
class ModeloConversorLongitud
{
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

?>
