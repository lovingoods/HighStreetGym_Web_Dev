<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Class Calendar</title>
    
    <link rel="stylesheet" href="../frontend/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.2.0/fullcalendar.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.2.0/fullcalendar.min.js"></script>
    <script src="../frontend/js/main.js"></script>
    <style>
      header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100px;
        background-color: #fff; 
        z-index: 1000; 
      }

      body {
        padding-top: 100px; 
      }

      h1.calendar {
        scroll-margin-top: 60px; 
      }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <section>
        <h1 class="calendar">Class Schedule</h1>
        <div id="calendar"></div>
    </section>
</body>
</html>
