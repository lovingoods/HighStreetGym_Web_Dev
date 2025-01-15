<?php
session_start();


if (!isset($_SESSION['user_id'])) {
    die("Please login first");
}


require_once '../config/database.php';

$conn = getDbConnection();


$class_id = $_GET['class_id'];
$user_id = $_SESSION['user_id'];


$stmt = $conn->prepare("INSERT INTO bookings (user_id, class_id, booking_date, status) VALUES (?, ?, NOW(), 'Confirmed')");
$stmt->bind_param("ii", $user_id, $class_id);

if ($stmt->execute()) {
 
    header("Location: my_bookings.php");
    exit();
} else {

    echo "Booking Failed: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>