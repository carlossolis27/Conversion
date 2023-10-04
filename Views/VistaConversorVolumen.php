<?php

class VistaConversorVolumen
{
    public function mostrarInterfaz()
    {
        echo "<h1>Conversor de Volumen</h1>";
        echo "<form method='post' action='../Controllers/ControladorConversorVolumen.php'>";
        echo "<input type='text' name='cantidad' placeholder='Cantidad' required>";
        echo "<input type='hidden' name='Volumen'>";
        echo "<select name='unidad_origen'>";
        echo "<option value='Litros'>Litros</option>";
        echo "<option value='Galones'>Galones</option>";
        echo "<option value='Pintas'>Pintas</option>";
        echo "<option value='Centímetros cúbicos'>Centímetros cúbicos</option>";
        echo "<option value='Metros cúbicos'>Metros cúbicos</option>";
        echo "</select>";
        echo "<select name='unidad_destino'>";
        echo "<option value='Litros'>Litros</option>";
        echo "<option value='Galones'>Galones</option>";
        echo "<option value='Pintas'>Pintas</option>";
        echo "<option value='Centímetros cúbicos'>Centímetros cúbicos</option>";
        echo "<option value='Metros cúbicos'>Metros cúbicos</option>";
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
