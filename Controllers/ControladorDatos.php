<?php

class ControladorDatos
{

    private $unidades = [
        'byte' => 1,
        'kilobyte' => 1024,
        'megabyte' => 1048576,
        'terabyte' => 1073741824,
        'petabyte' => 1099511627776,
    ];

    public function convertirDatos($valor, $UnidadOrigen, $UnidadDestino)
    {
    if (!isset($this->unidades[$UnidadOrigen]) || !isset($this->unidades[$UnidadDestino])) {
        return null;
    }

    $unidades = $this->unidades[$UnidadOrigen] / $this->unidades[$UnidadDestino];
    return $valor * $unidades;
    }
}

$controladorDatos = new ControladorDatos();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $valor = @$_POST['valor'];
    $UnidadOrigen = @$_POST['unidad_origen'];
    $UnidadDestino = @$_POST['unidad_destino'];

    echo $controladorDatos->convertirDatos($valor, $UnidadOrigen, $UnidadDestino);
}
?>