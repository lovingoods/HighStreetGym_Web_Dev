<?php
session_start();
header('Content-Type: application/json');


if (!isset($_SESSION['user_id'])) {
    echo json_encode(['success' => false, 'message' => 'Please login first']);
    exit();
}


require_once '../config/database.php';


$conn = getDbConnection();


$data = json_decode(file_get_contents('php://input'), true);
$user_id = $_SESSION['user_id'];
$title = $data['title'];
$content = $data['content'];


$sql = "INSERT INTO BlogPosts (user_id, title, content, post_date) VALUES (?, ?, ?, NOW())";
$stmt = $conn->prepare($sql);
$stmt->bind_param("iss", $user_id, $title, $content);

if ($stmt->execute()) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Failed to publish post']);
}

$stmt->close();
$conn->close();
?>