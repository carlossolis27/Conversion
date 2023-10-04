<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Conversiones</title>
</head>
<body>
<main>
        <h1 id="titulo" class="contenido-centrado">Calculadora de conversiones</h1>
    <form action="./Views/GeneralView.php" method="POST">
        <label for="opcion_conversion">Selecciona el tipo de conversión:</label>
        <br>
        <select name="opcion_conversion" class="contenido-centrado">
                <option value="Moneda">Moneda</option>
                <option value="Datos">Datos</option>
                <option value="Longitud">Longitud</option>
                <option value="Masa">Masa</option>
                <!--<option value="Volumen">Volumen</option> HACE FALTA VOLUMEN-->
                <option value="Tiempo">Tiempo</option>
        </select>
        <br><br>
        <input type="submit" value="Seleccionar">
    </form>
</main>
</body>
</html>