<?php

require_once 'vendor/autoload.php';
// init configuration
$clientID = '834320563898-67frjtkka3cngkh3t05fhgboku7agdvb.apps.googleusercontent.com';
$clientSecret ='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';
$redirectUri = 'http://localhost/2/welcome.php';

// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");

// Connect to database
$hostname = "localhost";
$username = "root";
$password = "";
$database = "php-google-login";

$conn = mysqli_connect($hostname, $username, $password, $database);

?>
