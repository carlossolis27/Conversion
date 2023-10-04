<?php
class VistaConversorMasa
{
    public function mostrarInterfaz()
    {
        echo "<h1>Conversor de Masa</h1>";
        echo "<form method='post' action='../Controllers/ControladorConversorMasa.php'>";
        echo "<input type='text' name='cantidad' placeholder='Cantidad' required>";
        echo "<input type='hidden' name='Masa'>";
        echo "<select name='unidad_origen'>";
        echo "<option value='gramo'>Gramo</option>";
        echo "<option value='kilogramo'>Kilogramo</option>";
        echo "<option value='libra'>Libra</option>";
        echo "<option value='onza'>Onza</option>";
        echo "<option value='tonelada'>Tonelada</option>";
        echo "</select>";
        echo "<select name='unidad_destino'>";
        echo "<option value='gramo'>Gramo</option>";
        echo "<option value='kilogramo'>Kilogramo</option>";
        echo "<option value='libra'>Libra</option>";
        echo "<option value='onza'>Onza</option>";
        echo "<option value='tonelada'>Tonelada</option>";
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