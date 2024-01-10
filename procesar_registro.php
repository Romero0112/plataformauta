<?php
// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los datos del formulario
    $id = uniqid(); // Genera un ID único
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Aquí deberías realizar la validación de datos (por ejemplo, verificar que el email sea único)

    // Conecta a la base de datos (reemplaza los valores con los de tu configuración)
    $conexion = new mysqli("localhost","root","","universidad","3306");

    // Verifica la conexión
    if ($conexion->connect_error) {
        die("Error de conexión a la base de datos: " . $conexion->connect_error);
    }

    // Prepara la consulta SQL (asegúrate de tener la tabla y las columnas correctas)
    $sql = "INSERT INTO users (id, nombre, apellido, usuario, clave) VALUES ('$id', '$nombre', '$apellido', '$email', '$password')";

    // Ejecuta la consulta
    if ($conexion->query($sql) === TRUE) {
        // Muestra un mensaje de alerta y redirige después de un retraso
        echo '<script>alert("Registro exitoso"); setTimeout(function(){ window.location = "interfaz.php"; });</script>';
        exit();
    } else {
        echo "Error en el registro: " . $conexion->error;
    }

    // Cierra la conexión a la base de datos
    $conexion->close();
} else {
    // Redirecciona si se intenta acceder directamente a este script
    header("Location: registro.html");
    exit();
}
?>
