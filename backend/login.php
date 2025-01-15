<?php
session_start();
header('Content-Type: application/json');

require_once '../config/database.php';

$conn = getDbConnection();


$data = json_decode(file_get_contents('php://input'), true);
$username = $data['username'];
$password = $data['password'];


$sql = "SELECT user_id, password FROM Users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
  
        $_SESSION['user_id'] = $user['user_id'];
        echo json_encode(['success' => true, 'user_id' => $user['user_id']]);
    } else {
      
        echo json_encode(['success' => false, 'message' => 'Invalid password']);
    }
} else {
   
    echo json_encode(['success' => false, 'message' => 'User not found']);
}

$stmt->close();
$conn->close();
?>