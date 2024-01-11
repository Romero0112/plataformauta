<?php

//Include Configuration File
include('config.php');
include("conexion_bd.php");
include("controlador.php");

$login_button = '';


if (isset($_GET["code"])) {

    $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


    if (!isset($token['error'])) {

        $google_client->setAccessToken($token['access_token']);


        $_SESSION['access_token'] = $token['access_token'];


        $google_service = new Google_Service_Oauth2($google_client);


        $data = $google_service->userinfo->get();


        if (!empty($data['given_name'])) {
            $_SESSION['user_first_name'] = $data['given_name'];
        }

        if (!empty($data['family_name'])) {
            $_SESSION['user_last_name'] = $data['family_name'];
        }

        if (!empty($data['email'])) {
            $_SESSION['user_email_address'] = $data['email'];
        }

        if (!empty($data['gender'])) {
            $_SESSION['user_gender'] = $data['gender'];
        }

        if (!empty($data['picture'])) {
            $_SESSION['user_image'] = $data['picture'];
        }
    }
}


if (!isset($_SESSION['access_token'])) {

    $login_button = '<a href="' . $google_client->createAuthUrl() . '">Login With Google</a>';
}

if (isset($_SESSION['access_token'])) {
    header('Location:inicio.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Facultad de Ingeniería en Sistemas, Electrónica e Industrial: Entrar al sitio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <div class="encabezado-container" style="text-align: center;">
        <h2 style="font-size: 25px; margin-top: 0; font-weight:600;">PLATAFORMA EDUCATIVA INSTITUCIONAL</h2>
        <h3 style="font-weight: initial; font-size: 17px;">FACULTAD DE INGENIERÍA EN SISTEMAS, ELECTRÓNICA E INDUSTRIAL
        </h3>
        <div class="logo-container">
            <img src="https://sistemaseducaciononline.uta.edu.ec/pluginfile.php/1/theme_adaptable/adaptablemarkettingimages/0/logo_uta.png"
                alt="">
        </div>
        <div class="sello-container">
            <img src="https://sistemaseducaciononline.uta.edu.ec/pluginfile.php/1/theme_adaptable/adaptablemarkettingimages/0/sistemas_sello.png"
                alt="">
        </div>
    </div>
    <script>
        // Mostrar la alerta solo si hay un mensaje de error
        <?php if (!empty($error_message)) { ?>
            alert("<?php echo $error_message; ?>");
        <?php } ?>
    </script>
    <div class="login-container">
        <div class="form-group" style="text-align: center;">
            <form method="post" action="index.php">
                <input type="text" name="username" id="username" class="form-control"
                    placeholder="Nombre de usuario o correo electrónico" autocomplete="username">
                <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña"
                    autocomplete="current-password">
                <button type="submit" name="btnacceder" class="button-acceder">Acceder</button>

                <a href="https://sistemaseducaciononline.uta.edu.ec/login/forgot_password.php">¿Olvidó su
                    contraseña?</a>
                <a href="registro.php">¿No tienes cuenta? Regístrate</a>
            </form>
            <h4 style="font-size: 20px; color: black; font-weight: normal;">Identifíquese usando su cuenta en:</h4>
            <?php
            if ($login_button != '') {
                echo '<div align="center">';
                echo '<a href="' . $google_client->createAuthUrl() . '" class="button-microsoft">';
                echo '<img src="https://www.google.com/favicon.ico" alt="Google Login">';
                echo ' <span>Iniciar sesión con Google</span></a></div>';
            }
            ?>
        </div>
    </div>
</body>

</html>