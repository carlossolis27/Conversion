<?php

class VistaConversorTemperatura
{
    public function mostrarInterfaz()
    {
        echo "<h1>Conversor de Temperatura</h1>";
        echo "<form method='post' action='../Controllers/ControladorConversorTemperatura.php'>";
        echo "<input type='text' name='temperatura' placeholder='Temperatura' required>";
        echo "<select name='unidad_origen'>";
        echo "<option value='Celsius'>Celsius</option>";
        echo "<option value='Fahrenheit'>Fahrenheit</option>";
        echo "<option value='Kelvin'>Kelvin</option>";
        echo "</select>";
        echo "<select name='unidad_destino'>";
        echo "<option value='Celsius'>Celsius</option>";
        echo "<option value='Fahrenheit'>Fahrenheit</option>";
        echo "<option value='Kelvin'>Kelvin</option>";
        echo "</select>";
        echo "<input type='submit' value='Convertir'>";
        echo "</form>";
    }

    public function mostrarResultado($resultado, $unidadOrigen, $unidadDestino)
    {
        if ($resultado !== null) {
            echo "<p>{$unidadOrigen} a {$unidadDestino}: {$resultado}</p>";
        } else {
            echo "<p>Las unidades seleccionadas no son válidas.</p>";
        }
    }
}

?>
