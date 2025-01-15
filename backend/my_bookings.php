<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    die("Please login first");
}


require_once '../config/database.php';


$conn = getDbConnection();

$user_id = $_SESSION['user_id'];


$sql = "SELECT b.booking_id, c.class_name, c.class_date, c.time, c.trainer, b.booking_date, b.status 
        FROM bookings b
        JOIN classes c ON b.class_id = c.class_id
        WHERE b.user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Bookings</title>
    <link rel="stylesheet" href="../frontend/css/style.css">
</head>
<body>
    <h1>My Bookings</h1>
    <table>
        <thead>
            <tr>
                <th>Booking ID</th>
                <th>Class Name</th>
                <th>Class Date</th>
                <th>Class Time</th>
                <th>Trainer</th>
                <th>Booking Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['booking_id']; ?></td>
                    <td><?php echo $row['class_name']; ?></td>
                    <td><?php echo $row['class_date']; ?></td>
                    <td><?php echo $row['time']; ?></td>
                    <td><?php echo $row['trainer']; ?></td>
                    <td><?php echo $row['booking_date']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>

<?php
$stmt->close();
$conn->close();
?>