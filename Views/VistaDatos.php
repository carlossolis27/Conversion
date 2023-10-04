<?php

class VistaDatos
{
    public function renderizado()
    {
        echo "<h1>Conversor de Datos</h1>";
        echo "<form method='post' action='../Controllers/ControladorDatos.php'>";
        echo "<input type='number' name='valor' placeholder='Valor' required>";
        echo "<select name='unidad_origen'>";
        echo "<option value='byte'>byte</option>";
        echo "<option value='kilobyte'>kilobyte</option>";
        echo "<option value='megabyte'>megabyte</option>";
        echo "<option value='terabyte'>terabyte</option>";
        echo "<option value='petabyte'>petabyte</option>";
        echo "</select>";
        echo "<select name='unidad_destino'>";
        echo "<option value='byte'>byte</option>";
        echo "<option value='kilobyte'>kilobyte</option>";
        echo "<option value='megabyte'>megabyte</option>";
        echo "<option value='terabyte'>terabyte</option>";
        echo "<option value='petabyte'>petabyte</option>";
        echo "</select>";
        echo "<input type='submit' value='Convertir'>";
        echo "</form>";
    }

    public function mostrarResultado($resultado, $UnidadOrigen, $UnidadDestino)
    {
        if ($resultado !== null) {
            echo "<h2>Resultado</h2>";
            echo "<p>{$UnidadOrigen} a {$UnidadDestino}: {$resultado}</p>";
        } else {
            echo "<p>Las unidades seleccionadas no son válidas.</p>";
        }
    }
}
?>