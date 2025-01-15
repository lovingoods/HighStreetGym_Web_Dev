<?php
session_start();
?>
<header class="header" id="header">
  <div class="header-container">
    <a href="" class="logo">
      <i class='bx bx-dumbbell'></i>gym<span>Highstreet</span>
    </a>
    <nav class="nav">
      <ul class="nav-menu">
        <li><a href="index.php#about" class="nav-link active">about</a></li>
        <li><a href="index.php#courses" class="nav-link">courses</a></li>
        <li><a href="index.php#trainer" class="nav-link">trainer</a></li>
        <li><a href="schedule.php" class="nav-link">schedule</a></li>
        
        <li><a href="index.php#contact" class="nav-link">contact</a></li>
        <li id="auth-buttons">
          <a href="login.php" class="nav-link auth-buttons btn">login</a>
          <a href="register.php" class="nav-link auth-buttons btn">register</a>
        </li>
        <li id="member-button" style="display: none;">
          <a href="member.php" class="nav-link">member</a>
        </li>
      </ul>
    </nav>
    <div class="nav-toggle">
      <i class='bx bx-menu'></i>
    </div>
  </div>
</header>