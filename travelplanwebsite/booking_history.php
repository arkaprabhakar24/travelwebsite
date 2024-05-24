<?php
include 'db_connect.php';
session_start();

$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM bookings WHERE user_id='$user_id'";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<div>Booking ID: " . $row['id'] . " - Flight ID: " . $row['flight_id'] . " - Hotel ID: " . $row['hotel_id'] . " - Activity ID: " . $row['activity_id'] . " - Booking Date: " . $row['booking_date'] . "</div>";
}
?>
