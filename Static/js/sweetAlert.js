
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
                // Mostrar el resultado en una SweetAlert
                Swal.fire({
                    icon: 'success',
                    title: 'Resultado de la conversión',
                    text: `Resultado: ${resultado.toFixed(2)} ${unidadDestino}`,
                });
            } else {
                // Mostrar un mensaje de error en una SweetAlert
                Swal.fire({
                    icon: 'error',
                    title: 'Error en la conversión',
                    text: 'Ha ocurrido un error en la conversión.',
                });
            }
        }
    };

    // Enviar los datos al controlador PHP
    const params = `cantidad=${cantidad}&moneda_origen=${unidadOrigen}&moneda_destino=${unidadDestino}`;
    xhr.send(params);
});
