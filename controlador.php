<?php
$error_message = ''; // Variable para almacenar mensajes de error

if (isset($_POST["btnacceder"])) {
    if (empty($_POST["username"]) && empty($_POST["password"])) {
        $error_message = 'Los campos están vacíos.';
    } else {
        $usuario = $_POST["username"];
        $clave = $_POST["password"];
        $sql = $conexion->query("SELECT * FROM users WHERE usuario='$usuario' AND clave='$clave'");
        
        if ($datos = $sql->fetch_object()) {
            header("location:inicio.php");
            exit();
        } else {
            $error_message = 'Acceso inválido. Por favor, inténtelo otra vez.';
        }
    }
}
?>
