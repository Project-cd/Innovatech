<?php
include '../bd_conexion.php'; // Ajusta la ruta según la ubicación real de tu archivo

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Consulta para verificar el usuario
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verificar la contraseña
        if (password_verify($password, $row['contraseña'])) {

            header("Location: ../Inicio/index.html");
            
            // Aquí puedes redirigir al usuario o iniciar una sesión
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "No se encontró el usuario.";
    }

    $stmt->close();
    $conn->close();
}
?>