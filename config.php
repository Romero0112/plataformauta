<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('775514301910-igcb4ts1d396edlit062020da657dpsi.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/plataformauta/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>