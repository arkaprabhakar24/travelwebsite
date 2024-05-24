<?php
include 'db_connect.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $booking_id = $_POST['booking_id'];
    $query = "SELECT booking_date FROM bookings WHERE id='$booking_id'";
    $result = mysqli_query($conn, $query);
    $booking = mysqli_fetch_assoc($result);

    $current_date = date("Y-m-d");
    $booking_date = $booking['booking_date'];

    if (strtotime($booking_date) > strtotime($current_date . ' + 1 week')) {
        $query = "DELETE FROM bookings WHERE id='$booking_id'";
        if (mysqli_query($conn, $query)) {
            echo "Booking successfully canceled";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Cancellation not possible";
    }
}
?>
