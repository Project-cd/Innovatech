<?php
include '../bd_conexion.php'; // Asegúrate de que la ruta sea correcta

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Verificar si el email ya existe
    $sql = "SELECT * FROM users WHERE email = ?"; // Asegúrate de que "user" sea el nombre correcto de la tabla
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Este correo electrónico ya está registrado.";
    } else {
        // Si el email no existe, proceder a registrar
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT); // Almacena en una variable
        $sql = "INSERT INTO users (email, contraseña) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $email, $hashedPassword); // Usa la variable

        if ($stmt->execute()) {
            echo "Registro exitoso!";
            // Puedes redirigir a una página de éxito aquí si lo deseas
        } else {
            echo "Error al registrar: " . $stmt->error;
        }
    }

    $stmt->close();
    $conn->close();
}
?>