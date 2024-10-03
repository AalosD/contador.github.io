<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página con contador de visitas</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
        <h1>¡Bienvenido a nuestra página!</h1>
        <p>Gracias por visitarnos. Este es el número total de visitas:</p>
        
        <!-- Aquí incluimos el contador PHP -->
        <div class="contador">
            <?php include 'contador.php'; ?>
        </div>

    </div>
</body>
</html>