<?php
$host = "HOSTNAME_DARI_000WEBHOST"; 
$username = "USERNAME_DARI_000WEBHOST";
$password = "PASSWORD_DARI_000WEBHOST";
$dbname = "DATABASE_DARI_000WEBHOST";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Database connected successfully!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>


