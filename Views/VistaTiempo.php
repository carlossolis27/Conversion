<?php

class VistaTiempo
{
    public function renderizar1()
    {
        echo "<h1>Conversor de Tiempo</h1>";
        echo "<form method='post' action='../Controllers/ControladorTiempo.php'>";
        echo "<input type='number' name='valor' placeholder='Valor' required>";
        echo "<select name='unidad_origen'>";
        echo "<option value='segundos'>Segundos</option>";
        echo "<option value='minutos'>Minutos</option>";
        echo "<option value='horas'>Horas</option>";
        echo "<option value='dias'>Días</option>";
        echo "<option value='semanas'>Semanas</option>";
        echo "</select>";
        echo "<select name='unidad_destino'>";
        echo "<option value='segundos'>Segundos</option>";
        echo "<option value='minutos'>Minutos</option>";
        echo "<option value='horas'>Horas</option>";
        echo "<option value='dias'>Días</option>";
        echo "<option value='semanas'>Semanas</option>";
        echo "</select>";
        echo "<input type='submit' value='Convertir'>";
        echo "</form>";
    }

    public function mostrarResultado($resultado, $TiempoOrigen, $TiempoDestino)
    {
        if ($resultado !== null) {
            echo "<h2>Resultado</h2>";
            echo "<p>{$resultado} {$TiempoDestino} ({$TiempoOrigen})</p>";
        } else {
            echo "<p>Las unidades seleccionadas no son válidas.</p>";
        }
    }
}
?>