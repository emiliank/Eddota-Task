<?php
$host = 'localhost';
$db   = 'weather_db';
$user = 'root';
$pass = 'root'; 

try {
    $dsn = 'mysql:host=localhost;dbname=weather_db;charset=utf8mb4;unix_socket=/Applications/MAMP/tmp/mysql/mysql.sock';
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("DB Connection failed: " . $e->getMessage());
}
?>