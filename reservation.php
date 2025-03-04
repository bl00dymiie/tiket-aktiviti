<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_id'])) {
    die("Sila log masuk dahulu.");
}

$activity_id = $_GET['id'];
$user_id = $_SESSION['user_id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $duration = $_POST["duration"];
    $price_per_hour = $conn->query("SELECT price_per_hour FROM activities WHERE id=$activity_id")->fetch_assoc()['price_per_hour'];
    $total_price = $duration * $price_per_hour;

    $sql = "INSERT INTO reservations (user_id, activity_id, duration, total_price) VALUES ('$user_id', '$activity_id', '$duration', '$total_price')";
    if ($conn->query($sql) === TRUE) {
        echo "Tempahan berjaya! <a href='dashboard.php'>Kembali</a>";
    } else {
        echo "Ralat: " . $conn->error;
    }
}
?>

<form method="post">
    Tempoh (jam): <input type="number" name="duration" min="1" max="2" required><br>
    <button type="submit">Tempah</button>
</form>
