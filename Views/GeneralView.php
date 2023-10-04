<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $opcion = $_POST["opcion_conversion"];
    // Verifica si se seleccionó "Moneda"
    if ($opcion == "Moneda") {
        // Realiza la conversión de moneda
        require_once "../Controllers/ControladorConversorMonedas.php";// Incluye el controlador de moneda
        require_once "../Models/ModeloConversorMonedas.php";
        require_once "../Views/VistaConversorMonedas.php"; 
        $modelo = new ModeloConversorMonedas();
        $vista = new VistaConversorMonedas();
        $controlador = new ControladorConversorMonedas($modelo, $vista);
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $cantidad = @$_POST['cantidad'];
            $monedaOrigen = @$_POST['moneda_origen'];
            $monedaDestino = @$_POST['moneda_destino'];
        
        $controlador->convertirMoneda($cantidad, $monedaOrigen, $monedaDestino);
        }
        $vista->mostrarInterfaz();

    }elseif ($opcion == "Datos") {
        // Realiza la conversión de datos
        require_once "../Controllers/ControladorDatos.php"; // Incluye el controlador de datos
        require_once "../Models/ModeloDatos.php";
        require_once "../Views/VistaDatos.php"; 

        $modeloDatos = new ModeloDatos();
        $vistaDatos = new VistaDatos();
        $controladorDatos = new ControladorDatos($modeloDatos, $vistaDatos);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $valor = @$_POST['valor'];
            $UnidadOrigen = @$_POST['unidad_origen'];
            $UnidadDestino = @$_POST['unidad_destino'];

            $controladorDatos->convertirDatos($valor, $UnidadOrigen, $UnidadDestino);
        }
        $vistaDatos->renderizado();
    }elseif($opcion == "Tiempo"){
        // Realiza la conversión de masa
        require_once "../Controllers/ControladorTiempo.php"; // Incluye el controlador de masa
        require_once "../Models/ModeloTiempo.php";
        require_once "../Views/VistaTiempo.php";

        $modeloTiempo = new ModeloTiempo();
        $vistaTiempo = new VistaTiempo();
        $controladorTiempo = new ControladorTiempo($modeloTiempo, $vistaTiempo);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $valor = @$_POST['valor'];
            $TiempoOrigen = @$_POST['unidad_origen'];
            $TiempoDestino = @$_POST['unidad_destino'];
            
            $controladorTiempo->convertirTiempo($valor, $TiempoOrigen, $TiempoDestino);
        }
        $vistaTiempo->renderizar1();
    }
}