<?php
session_start();
header('Content-Type: application/json');

require_once '../config/database.php';

$conn = getDbConnection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Receive form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password

    // Check if username already exists
    $sql = "SELECT user_id FROM Users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo json_encode(['success' => false, 'message' => 'Username already exists']);
    } else {
        // Insert new user
        $sql = "INSERT INTO Users (username, email, password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $username, $email, $password);

        if ($stmt->execute()) {
            $_SESSION['user_id'] = $stmt->insert_id;
            echo json_encode(['success' => true]);
        } else {
            error_log("Database error: " . $stmt->error); // Log the error
            echo json_encode(['success' => false, 'message' => 'Registration failed due to a database error: ' . $stmt->error]);
        }
    }

    $stmt->close();
    $conn->close();
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}
?>