<?php
class VistaConversorLongitud
{
    public function mostrarInterfaz()
    {
        echo "<h1>Conversor de Longitud</h1>";
        echo "<form method='post' action='../Controllers/ControladorConversorLongitud.php'>";
        echo "<input type='text' name='valor' placeholder='Valor' required>";
        echo "<select name='unidad_origen'>";
        echo "<option value='metro'>Metro</option>";
        echo "<option value='pie'>Pie</option>";
        echo "<option value='pulgada'>Pulgada</option>";
        echo "<option value='centimetro'>Centímetro</option>";
        echo "<option value='kilometro'>Kilómetro</option>";
        echo "</select>";
        echo "<select name='unidad_destino'>";
        echo "<option value='metro'>Metro</option>";
        echo "<option value='pie'>Pie</option>";
        echo "<option value='pulgada'>Pulgada</option>";
        echo "<option value='centimetro'>Centímetro</option>";
        echo "<option value='kilometro'>Kilómetro</option>";
        echo "</select>";
        echo "<button class=\"btn\" type='submit' value='Convertir'>Convertir</button>";
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