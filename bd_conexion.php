<?php
// Configuración de la base de datos
$servername = "localhost";   // El servidor MySQL (localhost si estás usando XAMPP)
$username = "root";          // Nombre de usuario de MySQL (por defecto es 'root')
$password = "";              // Contraseña de MySQL (vacía por defecto en XAMPP)
$dbname = "Innovatech";          // El nombre de la base de datos que creaste

// Crear conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si la conexión tuvo éxito
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

?>