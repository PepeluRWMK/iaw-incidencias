<?php
$host = 'localhost';
$dbname = 'incidencias'; // Pon aquí el nombre real de tu base de datos
$username = 'app_incidencias';         // Tu usuario de MariaDB
$password = 'joselopez10';     // Tu contraseña

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
