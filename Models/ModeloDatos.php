<?php
class ModeloDatos
{
        private $unidades = [
            'byte' => 1,
            'kilobyte' => 1024,
            'megabyte' => 1048576,
            'terabute' => 1073741824,
            'petabyte' => 1099511627776,
        ];

        public function convertirDatos($valor, $UnidadOrigen, $UnidadDestino)
        {
        if (!isset($this->unidades[$UnidadOrigen]) || !isset($this->unidades[$UnidadDestino])) {
            return null;
        }

        $unidades = $this->unidades[$UnidadDestino] / $this->unidades[$UnidadOrigen];
        return $valor * $unidades;

    }
}
?>