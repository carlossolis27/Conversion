<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Los encabezados meta y enlaces CSS aquí -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Static/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <title>Calculadora de Conversiones</title>
</head>
<body>
    <main>
        <h1 id="titulo" class="contenido-centrado">Calculadora de conversiones</h1>
        <form action="./Views/GeneralView.php" method="POST" id="conversion-form">
            <label for="opcion_conversion">Selecciona el tipo de conversión:</label>
            <br>
            <select name="opcion_conversion" id="opcion_conversion" class="contenido-centrado">
                <option value="Moneda">Moneda</option>
                <option value="Datos">Datos</option>
                <option value="Longitud">Longitud</option>
                <option value="Masa">Masa</option>
                <option value="Volumen">Volumen</option>
                <option value="Tiempo">Tiempo</option>
                <option value="Temperatura">Temperatura</option>
            </select>
            <br><br>

            <!-- Añade divs para cada tipo de conversión con elementos de entrada y checklist -->
            <div id="conversorMoneda" class="unidad-conversion" style="display: none;">
                <!-- Elementos para conversión de Moneda -->
                <label for="cantidad">Cantidad:</label>
                <input type="number" name="cantidad" id="cantidad" step="any" required>
                <br><br>
                <label for="moneda_origen">Moneda de origen:</label>
                <select name="moneda_origen" id="moneda_origen" required>
                    <option value="USD">Dólar estadounidense</option>
                    <option value="EUR">Euro</option>
                    <option value="GBP">Libra esterlina</option>
                    <option value="JPY">Yen japonés</option>
                    <option value="CAD">Dólar canadiense</option>
                </select>
                <br><br>
                <label for="moneda_destino">Moneda de destino:</label>
                <select name="moneda_destino" id="moneda_destino" required>
                    <option value="USD">Dólar estadounidense</option>
                    <option value="EUR">Euro</option>
                    <option value="GBP">Libra esterlina</option>
                    <option value="JPY">Yen japonés</option>
                    <option value="CAD">Dólar canadiense</option>
                </select>


            </div>

            <div id="conversorDatos" class="unidad-conversion" style="display: none;">
                <!-- Elementos para conversión de Datos -->
                <label for="valor">Valor:</label>
                <input type="number" name="valor" id="valor" step="any" required>
                <br><br>
                <label for="unidad_origen">Unidad de origen:</label>
                <select name="unidad_origen" id="unidad_origen" required>
                    <option value="byte">byte</option>
                    <option value="kilobyte">kilobyte</option>
                    <option value="megabyte">megabyte</option>
                    <option value="terabyte">terabyte</option>
                    <option value="petabyte">petabyte</option>
                </select>
                <br><br>
                <label for="unidad_destino">Unidad de destino:</label>
                <select name="unidad_destino" id="unidad_destino" required>
                    <option value="byte">byte</option>
                    <option value="kilobyte">kilobyte</option>
                    <option value="megabyte">megabyte</option>
                    <option value="terabyte">terabyte</option>
                    <option value="petabyte">petabyte</option>
                </select>
            </div>

            <div id="conversorLongitud" class="unidad-conversion" style="display: none;">
                <!-- Elementos para conversión de Longitud -->
                <label for="valor">Valor:</label>
                <input type="number" name="valor" id="valor" step="any" required>
                <br><br>
                <label for="unidad_origen">Unidad de origen:</label>
                <select name="unidad_origen" id="unidad_origen" required>
                    <option value="m">Metros</option>
                    <option value="km">Kilómetros</option>
                    <option value="in">Pulgadas</option>
                    <option value="ft">Pies</option>
                    <option value="cm">Centímetros</option>
                </select>
                <br><br>
                <label for="unidad_destino">Unidad de destino:</label>
                <select name="unidad_destino" id="unidad_destino" required>
                    <option value="m">Metros</option>
                    <option value="km">Kilómetros</option>
                    <option value="in">Pulgadas</option>
                    <option value="ft">Pies</option>
                    <option value="cm">Centímetros</option>
                </select>
            </div>

            <!-- Repite este patrón para Masa, Volumen, Tiempo y Temperatura -->
            <div id="conversorMasa" class="unidad-conversion" style="display: none;">
                <!-- Elementos para conversión de Masa -->
                <label for="cantidad">Cantidad:</label>
                <input type="number" name="cantidad" id="cantidad" step="any" required>
                <br><br>
                <label for="unidad_origen">Unidad de origen:</label>
                <select name="unidad_origen" id="unidad_origen" required>
                    <option value="g">Gramos</option>
                    <option value="kg">Kilogramos</option>
                    <option value="oz">Onzas</option>
                    <option value="lb">Libras</option>
                    <option value="t">Toneladas</option>
                </select>
                <br><br>
                <label for="unidad_destino">Unidad de destino:</label>
                <select name="unidad_destino" id="unidad_destino" required>
                    <option value="g">Gramos</option>
                    <option value="kg">Kilogramos</option>
                    <option value="oz">Onzas</option>
                    <option value="lb">Libras</option>
                    <option value="t">Toneladas</option>
                </select>

            </div>

            <div id="conversorVolumen" class="unidad-conversion" style="display: none;">
                <!-- Elementos para conversión de Volumen -->
                <label for="cantidad">Cantidad:</label>
                <input type="number" name="cantidad" id="cantidad" step="any" required>
                <br><br>
                <label for="unidad_origen">Unidad de origen:</label>
                <select name="unidad_origen" id="unidad_origen" required>
                    <option value="l">Litros</option>
                    <option value="m3">Metros cúbicos</option>
                    <option value="cm3">Centímetros cúbicos</option>
                    <option value="pintas">Pintas</option>
                    <option value="gal">Galones</option>
                </select>
                <br><br>
                <label for="unidad_destino">Unidad de destino:</label>
                <select name="unidad_destino" id="unidad_destino" required>
                    <option value="l">Litros</option>
                    <option value="m3">Metros cúbicos</option>
                    <option value="cm3">Centímetros cúbicos</option>
                    <option value="pintas">Pintas</option>
                    <option value="gal">Galones</option>
                </select>
            </div>

            <div id="conversorTiempo" class="unidad-conversion" style="display: none;">
                <!-- Elementos para conversión de Tiempo -->
                <label for="cantidad">Cantidad:</label>
                <input type="number" name="cantidad" id="cantidad" step="any" required>
                <br><br>
                <label for="unidad_origen">Unidad de origen:</label>
                <select name="unidad_origen" id="unidad_origen" required>
                    <option value="s">Segundos</option>
                    <option value="min">Minutos</option>
                    <option value="h">Horas</option>
                    <option value="d">Días</option>
                    <option value="sem">Semanas</option>
                </select>
                <br><br>
                <label for="unidad_destino">Unidad de destino:</label>
                <select name="unidad_destino" id="unidad_destino" required>
                    <option value="s">Segundos</option>
                    <option value="min">Minutos</option>
                    <option value="h">Horas</option>
                    <option value="d">Días</option>
                    <option value="sem">Semanas</option>
                </select>
            </div>

            <div id="conversorTemperatura" class="unidad-conversion" style="display: none;">
                <!-- Elementos para conversión de Temperatura -->
                <label for="cantidad">Cantidad:</label>
                <input type="number" name="cantidad" id="cantidad" step="any" required>
                <br><br>
                <label for="unidad_origen">Unidad de origen:</label>
                <select name="unidad_origen" id="unidad_origen" required>
                    <option value="C">Celsius</option>
                    <option value="F">Fahrenheit</option>
                    <option value="K">Kelvin</option>
                </select>
                <br><br>
                <label for="unidad_destino">Unidad de destino:</label>
                <select name="unidad_destino" id="unidad_destino" required>
                    <option value="C">Celsius</option>
                    <option value="F">Fahrenheit</option>
                    <option value="K">Kelvin</option>
                </select>
            </div>

            <br><br>
            <div id="resultado" style="display: none;">
                <p>Resultado:</p>
                <span id="resultadoValor"></span>
            </div>
            <br>
            <!-- Botón para calcular -->
            <button class="btn" type="submit">Calcular</button>
        </form>
    </main>

    <!-- Tu código JavaScript para mostrar/ocultar elementos según la selección -->
    <script src="Static/js/conversion.js"></script>
    <script src="Static/js/sweetAlert.js"></script>
</body>
</html>
