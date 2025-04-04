<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AVICOLA - Inicio de Sesión</title>
    <link rel="stylesheet" href="{{ url_for('static', filename='style.css') }}"> <!-- Referencia a los estilos -->
</head>
<body>
    <div class="container">
        <h1 class="title">AVICOLA</h1>
        
        <div class="logo">
        <img src="{{ url_for('static', filename='pollo1.png') }}" alt="Logo Pollo" />  <!-- ejemplos de como referenciar una imagen -->
        </div>

        <div class="form-container">
            <div class="form-label">Email</div>
            <input type="text" class="form-input" placeholder="Introduce tu email" required> 
            <a href="{{ url_for('contraseña') }}" class="formulario-button">Siguiente</a>
            

            <button class="google-button">Continuar con google</button>
            <a href="panel" class="btn">Nadamas</a>  <!-- Referencia a la vista de panel en el boton -->
        </div>
    </div>
</body>
</html>