<?php

class ControladorTiempo
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

        $unidades = $this->unidades[$TiempoOrigen] / $this->unidades[$TiempoDestino];
        return $valor * $unidades;
    }
}

$controladorTiempo = new ControladorTiempo();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $valor = @$_POST['valor'];
    $TiempoOrigen = @$_POST['unidad_origen'];
    $TiempoDestino = @$_POST['unidad_destino'];
    
    echo $controladorTiempo->convertirTiempo($valor, $TiempoOrigen, $TiempoDestino);
}
?>