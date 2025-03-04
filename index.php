<?php
include 'db.php';
$result = $conn->query("SELECT * FROM activities");

while ($row = $result->fetch_assoc()) {
    echo "<p>{$row['name']} - RM{$row['price_per_hour']} sejam 
    <a href='reservation.php?id={$row['id']}'>Tempah</a></p>";
}
?>
