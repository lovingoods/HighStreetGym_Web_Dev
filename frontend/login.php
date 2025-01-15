<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css?v=1.0"> 
    <link rel="stylesheet" href="css/register.css?v=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<?php include 'header.php'; ?>
<div class="form-container">

    <form action="../backend/login.php" method="post" enctype="multipart/form-data">
        <h1>LOG IN</h1>
        <input type="email" name="email" placeholder="enter email" class="box" required>
        <input type="password" name="password" placeholder="enter password" class="box" required>
        <input type="password" name="cpassword" placeholder="confirm password" class="box" required>
        <input type="submit" value="SEND" class="btn" required>
        <p>Haven't register an account? <a href="register.php">register here</a></p>
    </form>
</div>
    <script src="js/main.js"></script>
</body>
</html>