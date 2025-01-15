<?php
require_once '../config/database.php'; 


$conn = getDbConnection();
if (!$conn) {
    die("fail to connect!");
}


$xmlFile = 'xml/classes.xml';

if (!file_exists($xmlFile)) {
    die("XML cannot find: $xmlFile");
}

$xml = simplexml_load_file($xmlFile);

if ($xml === false) {
    die("fail to load XML file");
}


foreach ($xml->class as $class) {
    $class_name = $class->class_name;
    $weekday = $class->weekday;
    $class_date = $class->class_date;
    $time = $class->time;
    $duration = $class->duration;
    $level = $class->level;
    $trainer = $class->trainer;
    $category = isset($class->category) ? $class->category : 'Fitness'; 

    
    $query = "INSERT INTO Classes (class_name, weekday, class_date, time, duration, level, trainer, category) 
              VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 'ssssisss', $class_name, $weekday, $class_date, $time, $duration, $level, $trainer, $category);

    if (!mysqli_stmt_execute($stmt)) {
        echo "insert failed: " . mysqli_error($conn) . "\n";
    } else {
        echo "inserted: $class_name\n";
    }

    mysqli_stmt_close($stmt);
}


mysqli_close($conn);

echo "all insert completed";
?>
