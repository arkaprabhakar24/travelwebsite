<?php
include 'db_connect.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id'];
    $flight_id = isset($_POST['flight_id']) ? $_POST['flight_id'] : NULL;
    $hotel_id = isset($_POST['hotel_id']) ? $_POST['hotel_id'] : NULL;
    $activity_id = isset($_POST['activity_id']) ? $_POST['activity_id'] : NULL;
    $booking_date = date("Y-m-d H:i:s");

    $query = "INSERT INTO bookings (user_id, flight_id, hotel_id, activity_id, booking_date) VALUES ('$user_id', '$flight_id', '$hotel_id', '$activity_id', '$booking_date')";
    if (mysqli_query($conn, $query)) {
        echo "Successfully booked";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>
