<?php
// Identifiants pour la base de données.
$servername = "localhost";
$username = "adminDbNewWorld";
$password = "123456789";
$base= "dbNewWorld";

// Create connection
$connexion = new mysqli($servername, $username, $password, $base);

// Check connection
if ($connexion->connect_error) {
    die("Connection failed: " . $connexion->connect_error);
} 
?>
