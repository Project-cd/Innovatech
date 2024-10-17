<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>

</head>
<body>
    <header>
        <h1>Registro de Usuario</h1>
    </header>

    <form action="register.process.php" method="POST">
        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Registrarse</button>
    </form>

    <footer>
        <p>&copy; 2024 Tienda de Tecnología. Todos los derechos reservados.</p>
    </footer>
</body>
</html>