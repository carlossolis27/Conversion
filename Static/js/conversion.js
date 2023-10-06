// Obtener referencias a los elementos del DOM
const opcionConversion = document.getElementById('opcion_conversion');
const unidadesConversion = document.querySelectorAll('.unidad-conversion');
const conversionForm = document.getElementById('conversion-form');
const resultadoDiv = document.getElementById('resultado'); // Agrega un div para mostrar el resultado

// Función para mostrar u ocultar los elementos según la unidad seleccionada
function mostrarElementos() {
    const opcionSeleccionada = opcionConversion.value;

    unidadesConversion.forEach(unidad => {
        unidad.style.display = 'none';
    });

    const unidadSeleccionada = document.getElementById(`conversor${opcionSeleccionada}`);
    unidadSeleccionada.style.display = 'block';
}

// Asignar la función al evento change del select
opcionConversion.addEventListener('change', mostrarElementos);

// Manejar el envío del formulario
conversionForm.addEventListener('submit', function (event) {
    event.preventDefault(); // Prevenir el envío del formulario por defecto

    // Recoger los valores de los elementos de entrada según la unidad seleccionada
    const cantidad = parseFloat(document.getElementById('cantidad').value);
    const unidadOrigen = document.getElementById('unidad_origen').value;
    const unidadDestino = document.getElementById('unidad_destino').value;

    // Realizar una solicitud AJAX para obtener el resultado de la conversión
    const xhr = new XMLHttpRequest();
    xhr.open('POST', './Controllers/ControladorConversorMonedas.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // El resultado de la conversión se encuentra en xhr.responseText
            const resultado = parseFloat(xhr.responseText);

            if (!isNaN(resultado)) {
                // Mostrar el resultado en el div de resultado
                resultadoDiv.textContent = `Resultado: ${resultado.toFixed(2)} ${unidadDestino}`;
            } else {
                resultadoDiv.textContent = 'Error en la conversión.';
            }
        }
    };

    // Enviar los datos al controlador PHP
    const params = `cantidad=${cantidad}&moneda_origen=${unidadOrigen}&moneda_destino=${unidadDestino}`;
    xhr.send(params);
});
