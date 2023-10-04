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
    }// Verifica si se seleccionó "Longitud"
    elseif ($opcion == "Longitud") {
        // Realiza la conversión de longitud
        require_once "../Controllers/ControladorConversorLongitud.php"; // Incluye el controlador de longitud
        require_once "../Models/ModeloConversorLongitud.php";
        require_once "../Views/VistaConversorLongitud.php";

        $modeloLongitud = new ModeloConversorLongitud();
        $vistaLongitud = new VistaConversorLongitud();
        $controladorLongitud = new ControladorConversorLongitud($modeloLongitud, $vistaLongitud);

        $valor = @$_POST['valor'];
        $unidadOrigen = @$_POST['unidad_origen'];
        $unidadDestino = @$_POST['unidad_destino'];

        $controladorLongitud->convertirLongitud($valor, $unidadOrigen, $unidadDestino);
        $vistaLongitud->mostrarInterfaz();

    // Verifica si se seleccionó "Masa"
    } elseif ($opcion == "Masa") {
        // Realiza la conversión de masa
        require_once "../Controllers/ControladorConversorMasa.php"; // Incluye el controlador de masa
        require_once "../Models/ModeloConversorMasa.php";
        require_once "../Views/VistaConversorMasa.php";

        $modeloMasa = new ModeloConversorMasa();
        $vistaMasa = new VistaConversorMasa();
        $controladorMasa = new ControladorConversorMasa($modeloMasa, $vistaMasa);

        $cantidad = @$_POST['cantidad'];
        $unidadOrigen = @$_POST['unidad_origen'];
        $unidadDestino = @$_POST['unidad_destino'];

        $controladorMasa->convertirMasa($cantidad, $unidadOrigen, $unidadDestino);
        $vistaMasa->mostrarInterfaz();
    } elseif ($opcion == "Volumen") {
        // Realiza la conversión de volumen
        require_once "../Controllers/ControladorConversorVolumen.php"; // Incluye el controlador de volumen
        require_once "../Models/ModeloConversorVolumen.php";
        require_once "../Views/VistaConversorVolumen.php";

        $modeloVolumen = new ModeloConversorVolumen();
        $vistaVolumen = new VistaConversorVolumen();
        $controladorVolumen = new ControladorConversorVolumen($modeloVolumen, $vistaVolumen);

        $cantidad = @$_POST['cantidad'];
        $unidadOrigen = @$_POST['unidad_origen'];
        $unidadDestino = @$_POST['unidad_destino'];

        $controladorVolumen->convertirVolumen($cantidad, $unidadOrigen, $unidadDestino);
        $vistaVolumen->mostrarInterfaz();
        
    }elseif ($opcion == "Temperatura") {
        // Realiza la conversión de temperatura
        require_once "../Controllers/ControladorConversorTemperatura.php"; // Incluye el controlador de temperatura
        require_once "../Models/ModeloConversorTemperatura.php";
        require_once "../Views/VistaConversorTemperatura.php";
    
        $modeloTemperatura = new ModeloConversorTemperatura();
        $vistaTemperatura = new VistaConversorTemperatura();
        $controladorTemperatura = new ControladorConversorTemperatura($modeloTemperatura, $vistaTemperatura);
    
        $temperatura = @$_POST['temperatura'];
        $unidadOrigen = @$_POST['unidad_origen'];
        $unidadDestino = @$_POST['unidad_destino'];
    
        $controladorTemperatura->convertirTemperatura($temperatura, $unidadOrigen, $unidadDestino);
        $vistaTemperatura->mostrarInterfaz();
    }
}
?>