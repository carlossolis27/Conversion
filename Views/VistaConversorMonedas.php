<?php

class VistaConversorMonedas
{
    public function mostrarInterfaz()
    {
        echo "<h1>Conversor de Monedas</h1>";
        echo "<form method='post' action='../Controllers/ControladorConversorMonedas.php'>";
        echo "<input type='text' name='cantidad' placeholder='Cantidad' required>";
        echo "<input type='hidden' name='Moneda'>";
        echo "<select name='moneda_origen'>";
        echo "<option value='USD'>USD</option>";
        echo "<option value='EUR'>EUR</option>";
        echo "<option value='GBP'>GBP</option>";
        echo "<option value='JPY'>JPY</option>";
        echo "<option value='CAD'>CAD</option>";
        echo "</select>";
        echo "<select name='moneda_destino'>";
        echo "<option value='USD'>USD</option>";
        echo "<option value='EUR'>EUR</option>";
        echo "<option value='GBP'>GBP</option>";
        echo "<option value='JPY'>JPY</option>";
        echo "<option value='CAD'>CAD</option>";
        echo "</select>";
        echo "<input type='submit' value='Convertir'>";
        echo "</form>";
    }

    public function mostrarResultado($resultado, $monedaOrigen, $monedaDestino)
    {
        if ($resultado !== null) {
            echo "<p>{$monedaOrigen} a {$monedaDestino}: {$resultado}</p>";
        } else {
            echo "<p>Las monedas seleccionadas no son válidas.</p>";
        }
    }
}
?>