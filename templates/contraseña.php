<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AVICOLA</title>
    <link rel="stylesheet" href="{{ url_for('static', filename='Vista3.css') }}"> <!-- Referencia a los estilos -->
</head>
<body>

<div class="container">
        <h1 class="title">Contraseña</h1>
        
        
        <div class="form-container">
            <input type="contraseña" class="form-input" placeholder="Introduce tu contraseña">
            <a href="{{ url_for('control') }}" class="formulario-button">Siguiente</a>
        </div>


</body>
</html>