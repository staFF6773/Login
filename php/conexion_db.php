<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Conecta a la base de datos (asegúrate de ajustar estos valores)
    $servername = "tu_servidor";
    $username_db = "tu_usuario";
    $password_db = "tu_contraseña";
    $dbname = "tu_base_de_datos";

    $conn = new mysqli($servername, $username_db, $password_db, $dbname);

    if ($conn->connect_error) {
        die("Error de conexión a la base de datos: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM usuarios WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Inicio de sesión exitoso
        session_start();
        $_SESSION["username"] = $username;
        header("Location: welcome.php"); // Redirige a una página de bienvenida
    } else {
        // Inicio de sesión fallido
        echo "Credenciales incorrectas. Intenta de nuevo.";
    }

    $conn->close();
}
?>