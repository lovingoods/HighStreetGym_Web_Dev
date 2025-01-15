<?php
session_start();
header('Content-Type: application/json');

require_once '../config/database.php';  // Ensure this includes your database configuration

// 连接数据库
$conn = getDbConnection();

// 获取课程列表（从数据库）
$query = "SELECT * FROM Classes WHERE class_date > NOW()"; 
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

$events = [];

function getNextWeekdayDate($weekday) {
    $today = new DateTime();  // Get today's date
    $todayDayOfWeek = $today->format('l');  // Get today's weekday name (e.g., "Monday")

    // Calculate the difference in days to the target weekday
    $weekdayToNumber = [
        'Sunday' => 0,
        'Monday' => 1,
        'Tuesday' => 2,
        'Wednesday' => 3,
        'Thursday' => 4,
        'Friday' => 5,
        'Saturday' => 6,
    ];

    $targetDayNumber = $weekdayToNumber[$weekday];
    $todayDayNumber = $weekdayToNumber[$todayDayOfWeek];

   
    $dayDifference = ($targetDayNumber - $todayDayNumber + 7) % 7;
    if ($dayDifference == 0) {
        $dayDifference = 7;  
    }


    $today->modify("+$dayDifference days");
    
    return $today->format('Y-m-d'); 
}

$weekdayToDate = [
    'Monday' => getNextWeekdayDate('Monday'),
    'Tuesday' => getNextWeekdayDate('Tuesday'),
    'Wednesday' => getNextWeekdayDate('Wednesday'),
    'Thursday' => getNextWeekdayDate('Thursday'),
    'Friday' => getNextWeekdayDate('Friday'),
    'Saturday' => getNextWeekdayDate('Saturday'),
    'Sunday' => getNextWeekdayDate('Sunday'),
];


while ($row = mysqli_fetch_assoc($result)) {
    $startDate = $row['class_date']; 

    $duration = intval($row['duration']);
    $endDate = date('Y-m-d\TH:i', strtotime("+$duration minutes", strtotime($startDate)));

    $events[] = [
       'title' => $row['class_name'], 
        'start' => $startDate,  
        'end' => $endDate,  
        'description' => "Level: {$row['level']}, Duration: {$row['duration']} mins, Trainer: {$row['trainer']}", 
        'trainer' => $row['trainer'],  
        'category' => $row['category'],  
    ];
}
// Return JSON response
header('Content-Type: application/json');
echo json_encode($events);
?>
