<?php
class ModeloTiempo
{
    private $unidades = [
        'segundos' => 1,
        'minutos' => 60,
        'horas' => 3600,
        'dias' => 86400,
        'semanas' => 604800,
    ];

    public function convertirTiempo($valor, $TiempoOrigen, $TiempoDestino)
    {
    if (!isset($this->unidades[$TiempoOrigen]) || !isset($this->unidades[$TiempoDestino])) {
        return null;
    }

    $unidades = $this->unidades[$TiempoDestino] / $this->unidades[$TiempoOrigen];
    return $valor * $unidades;
    }
}
?>