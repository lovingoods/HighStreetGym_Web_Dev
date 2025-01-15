<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GYMFIT Website</title>
  <!--Link CSS File-->
  <link rel="stylesheet" href="css/style.css">
  <!--Link BOXICONS File-->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
   <!-- Header Section Start
   <header class="header" id="header"> -->
    <?php include 'header.php'; ?>
   <!--Home Section Start-->
   <section class="home" id="home">
    <div class="home-slider swiper">
      <div class="swiper-wrapper">
        <div class="slide swiper-slide" style="background: url(img/banner-1.jpg);">
          <div class="content">
             <h1 class="section-title">HighStreet</h1>
             <h3 class="section-header">For athletic women</h3>
             <p>We offer as well hardcode strength machines,<br>
            curve treadmills, boxing studio, TRX, and spining</p>
            <a href="#" class="btn">join now</a>
          </div>
        </div>
        <div class="slide swiper-slide" style="background: url(img/banner-2.jpg);">
          <div class="content">
             <h1 class="section-title">HighStreet</h1>
             <h3 class="section-header">For athletic Men</h3>
             <p>We offer as well hardcode strength machines,<br>
            curve treadmills, boxing studio, TRX, and spining</p>
            <a href="#" class="btn">join now</a>
          </div>
        </div>
        <div class="slide swiper-slide" style="background: url(img/banner-3.jpg);">
          <div class="content">
             <h1 class="section-title">HighStreet</h1>
             <h3 class="section-header">For Everyone</h3>
             <p>We offer as well hardcode strength machines,<br>
            curve treadmills, boxing studio, TRX, and spining</p>
            <a href="#" class="btn">join now</a>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
   </section>
   <!--Home Section End-->
   <!--About Section Start-->
   <section class="about" id="about">
    <div class="about-container">
      <div class="left">
        <img src="img/about-1.jpg" alt="">
        <img src="img/about-2.jpg" alt="">
      </div>
      <div class="right">
        <h1 class="section-title">about us</h1>
        <h3 class="section-header">the best gym</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi consequuntur fugit itaque vero iste, aut saepe veritatis fuga similique, optio praesentium illum deleniti inventore rem nulla in quod perspiciatis explicabo porro autem dolores impedit totam aperiam tenetur! Dolores a veniam excepturi possimus aliquam libero voluptatem nobis optio. Placeat, odio animi.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui nihil, eos officia nobis velit ad commodi aliquid neque soluta sequi minima rem eveniet quis modi tempore consequuntur praesentium nostrum eligendi ab? Laudantium, facere alias hic dignissimos ipsum asperiores explicabo deleniti quam quasi, blanditiis sit doloremque quibusdam quos atque ducimus quas.</p>
        <a href="#" class="btn">read more</a>
      </div>
    </div>
   </section>
   <!--About Section End-->
   <!--Course Section Start-->
   <section class="courses" id="courses">
    <div class="courses-container">
      <div class="courses-content">
        <h1 class="section-title">courses</h1>
        <h3 class="section-header">we aim to transform your abilities</h3>
        <div class="courses-box">
          <div class="box">
            <img src="img/courses-1.jpg" alt="">
            <div class="info">
              <h3>Boxing</h3>
               <a href="" class="btn">read more</a>
            </div>
          </div>
          <div class="box">
            <img src="img/courses-2.jpg" alt="">
            <div class="info">
              <h3>Yoga</h3>
                <a href="" class="btn">read more</a>
            </div>
          </div>
          <div class="box">
            <img src="img/courses-3.jpg" alt="">
            <div class="info">
              <h3>Spining</h3>
                <a href="" class="btn">read more</a>
            </div>
          </div>
          <div class="box">
            <img src="img/courses-4.jpg" alt="">
            <div class="info">
              <h3>Pilates</h3>
                <a href="" class="btn">read more</a>
            </div>
          </div>
          <div class="box">
            <img src="img/courses-5.jpg" alt="">
            <div class="info">
              <h3>Weight lifting</h3>
                <a href="" class="btn">read more</a>
            </div>
          </div>
          <div class="box">
            <img src="img/courses-6.jpg" alt="">
            <div class="info">
              <h3>Personal Training</h3>
                <a href="" class="btn">read more</a>
          </div>
          </div>
        </div>
      </div>
    </div>
   </section>
   <!--Course Section End-->
   <!--Trainer Section Start-->
   <section class="trainer" id="trainer">
    <div class="trainer-container">
      <h1 class="section-title">trainer</h1>
      <h3 class="section-header">for athletic women</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero aliquam placeat, maiores numquam odit recusandae quos sunt, exercitationem
      </p>
      <div class="trainer-box">
        <div class="trainer-img">
          <img src="img/trainer-1.jpg" alt="">
          <div class="inner">
            <a href=""><i class='bx bxl-facebook'></i></a>
            <a href=""><i class='bx bxl-twitter'></i></a>
            <a href=""><i class='bx bxl-instagram'></i></a>
          </div>
          <h1>John Mark</h1>
          <p>gym trainer</p>
        </div>
        <div class="trainer-img">
          <img src="img/client-1.jpg" alt="">
          <div class="inner">
            <a href=""><i class='bx bxl-facebook'></i></a>
            <a href=""><i class='bx bxl-twitter'></i></a>
            <a href=""><i class='bx bxl-instagram'></i></a>
          </div>
          <h1>Marry Kinston</h1>
          <p>gym trainer</p>
        </div>
        <div class="trainer-img">
          <img src="img/trainer-4.jpg" alt="">
          <div class="inner">
            <a href=""><i class='bx bxl-facebook'></i></a>
            <a href=""><i class='bx bxl-twitter'></i></a>
            <a href=""><i class='bx bxl-instagram'></i></a>
          </div>
          <h1>Natalee Park</h1>
          <p>gym trainer</p>
        </div>
      </div>
    </div>
   </section>
   <!--Trainer Section End-->
   <!--Schedule Section Start-->
   <section class="schedule" id="schedule">
    <div class="time-container">
      <div class="time-text">
        <div class="left">
          <h1 class="section-title">timetable</h1>
          <h3 class="section-header">Lorem ipsum dolor sit amet </h3>
          <p>Lorem ipsum dolor sit amet consecteture nobis natus porro quos</p>
          <p>Lorem ipsum dolor sit amet consecteture nobis natus porro quos</p>
        </div>
        <div class="right">
          <a href="" class="btn active-btn">am</a>
          <a href="" class="btn">pm</a>
        </div>
      </div>
      <div class="time-imgs swiper">
        <div class="swiper-wrapper">
          <div class="slide swiper-slide">
            <img src="img/session-1.jpg" alt="">
          </div>
          <div class="slide swiper-slide">
            <img src="img/session-3.jpg" alt="">
          </div>
          <div class="slide swiper-slide">
            <img src="img/session-4.jpg" alt="">
          </div>
          <div class="slide swiper-slide">
            <img src="img/classes/1.jpg" alt="">
          </div>
          <div class="slide swiper-slide">
            <img src="img/classes/2.jpg" alt="">
          </div>
          <div class="slide swiper-slide">
            <img src="img/classes/3.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
   </section>
   <!--Schedule Section End-->
   <!--Blog Section End-->
   <section class="blog" id="blog">
    <div class="blog-container">
      <h1 class="section-title">our blog</h1>
      <h3 class="section-header">building a community of athletic</h3>
      <div class="blog-content">
        <div class="inner">
          <div class="blog-img">
            <img src="img/blog-1.jpg" alt="">
          </div>
          <p>Lorem ipsum dolor sit amet consectetur 
          </p>
          <p>adipisicing elit. Facilis, reprehenderit ea eligendi quos aut sint et ipsum dolor. Quisquam fuga maxime dolorem, sequi voluptate corrupti praesentium pariatur quos ad sunt?</p>
        </div>
        <div class="inner">
          <div class="blog-img">
            <img src="img/blog-2.jpg" alt="">
          </div>
          <p>Lorem ipsum dolor sit amet consectetur 
          </p>
          <p>adipisicing elit. Facilis, reprehenderit ea eligendi quos aut sint et ipsum dolor. Quisquam fuga maxime dolorem, sequi voluptate corrupti praesentium pariatur quos ad sunt?</p>
        </div>
        <div class="inner">
          <div class="blog-img">
            <img src="img/blog-3.jpg" alt="">
          </div>
          <p>Lorem ipsum dolor sit amet consectetur 
          </p>
          <p>adipisicing elit. Facilis, reprehenderit ea eligendi quos aut sint et ipsum dolor. Quisquam fuga maxime dolorem, sequi voluptate corrupti praesentium pariatur quos ad sunt?</p>
        </div>
      </div>
      </div>
    </div>
   </section>
   <!--Blog Section End-->
   <!--Footer Section End-->
   <?php include 'footer.php'?>
   <!--Footer Section End-->
   <!-- Scroll Top Button-->
    <div class="up">
      <i class='bx bx-up-arrow-alt'></i>
    </div>
   <!-- Scroll Top Button-->
   <!-- Swiper JS -->
   <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
   <!--Link Js File-->
   <script src="main.js"></script>
   
</body>
</html>