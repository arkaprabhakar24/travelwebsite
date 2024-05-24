<?php
include 'db_connect.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_SESSION['username'];
    $feedback = $_POST['feedback'];

    $query = "INSERT INTO feedback (username, feedback) VALUES ('$username', '$feedback')";
    if (mysqli_query($conn, $query)) {
        echo "Successfully submitted";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>
