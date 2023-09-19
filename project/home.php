<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device=device-width,initial-scale=1.0" />
  <title>home</title>

  <!-- swiper css link-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

  <!-- font awesome cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <!-- custom css file link-->
  <link rel="stylesheet" href="style.css" />

</head>

<body>

  <!-- header section starts-->
  <section class="header">
    <div class ="logo">
      <a href="home.php"><img src="images/logo1.png" alt="logo"></a>
    <a href="home.php" class="text">NepalYatra.</a>
</div>
    <nav class="navbar">
      <a href="home.php">Home</a>
      <a href="about.php">About</a>
      <a href="package.php">Package</a>
      <a href="book.php">Book</a>

    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

  </section>
  <!-- header section end-->


  <!-- home section starts-->

  <section class="home">

    <div class="swiper home-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background:url(images/home-slide-1.jpg) no-repeat">
          <div class="content">
            <div class="text">
              <span >The journey is the destination</span>
              <p class="body-text">Adventure is worthwhile</p>
            </div>

            <a href="package.php" class="btn">discover more</a>
          </div>
        </div>

        <div class="swiper-slide" style="background:url(images/home-slide-3.jpg) no-repeat">
          <div class="content">
            <div class="text">  
              <span>The journey is the destination</span>
                <p class="body-text">Travel is my therapy</h3>
            </div>
            <a href="package.php" class="btn">discover more</a>
          </div>
        </div>

        <div class="swiper-slide" style="background:url(images/home-slide-2.jpg) no-repeat">
          <div class="content">
            <div class="text">  
              <span>The journey is the destination</span>
              <p class="body-text">adventure begin</p>
            </div>
              <a href="package.php" class="btn">discover more</a>
          </div>
        </div>

      </div>


    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

    </div>
  </section>

  <!-- home section ends-->


  <!-- services section starts-->
  <section class="services">

    <h1 class="heading-title">our services </h1>
    <div class="box-container">
      <div class="box">
        <img src="images/icon-1.png" alt="">
        <h3>adventure</h3>
      </div>
      <div class="box">
        <img src="images/icon-2.png" alt="">
        <h3>tour guide</h3>
      </div>
      <div class="box">
        <img src="images/icon-3.png" alt="">
        <h3>camp fire</h3>
      </div>
      <div class="box">
        <img src="images/icon-4.png" alt="">
        <h3>off road</h3>
      </div>
      <div class="box">
        <img src="images/icon-5.png" alt="">
        <h3>treeking</h3>
      </div>
    </div>


  </section>
  <!-- services section ends -->

   <!-- about us section starts-->

<section class="home-about">
  <div class="image">
    <img src="images/about-img.jpeg" alt="">
  </div>
<div class="content">
  <h3> about us</h3>
  <p>we're not just in the business of travel; we're in the business of creating unforgettable experiences.
     Our journey began in 2023 when a group of passionate adventurers came together with a shared vision: 
     to introduce travelers to the wonders of the nepal and help them embark on journeys that would leave a lasting impact.
     We believe that travel has the power to transform lives and broaden horizons,
      and we're committed to making that transformation accessible to everyone.
      Our commitment to quality, safety, and excellence ensures that your adventure is not only thrilling but also worry-free.
       We work closely with local communities and organizations to minimize our environmental impact and
       contribute positively to the destinations we explore </p>
  <a href="about.php" class="btn">read more</a>
</div>

</section>
<!-- about us section ends -->

<!-- package section starts-->

<section class ="home-packages">
  <h1 class ="heading-title"> our packages </h1>
  <div class ="box-container">

    <div class ="box">
      <div class="image">
        <img src="images/003.jpg" alt="">
      </div>
        <div class="content">
          <h3>adventure & tour</h3>
          <p>The country on the lap of the himalayas gives the pleasure and refresentment to the eyes and significes that "Heaven is myth but Nepal is real".
            the highest moutain in the world "MT.EVEREST" provide the adventures , joy and unforgettable memory.</p>
          <a href="book.php" class= "btn" >book nows</a>
        </div>
    </div>
    <div class ="box">
      <div class="image">
        <img src="images/008.jpg" alt="">
      </div>
        <div class="content">
          <h3>adventure & tour</h3>
          <p>The amazing landscape create the fast flowing rivers originated from the himalayas which are suitable for rafting and many more activities 
            which dynamically provides the adventures and joyful memories..</p>
          <a href="book.php" class= "btn" >book nows</a>
        </div>
    </div>

    <div class ="box">
      <div class="image">
        <img src="images/004.jpg" alt="">
      </div>
        <div class="content">
          <h3>adventure & tour</h3>
          <p>Amazing landscape provides the ultimate adventures is the perferct example of the paraliding. The high altitude supports the paraliding because of the 
            fast flowing wind and the height from the sealevel </p>
          <a href="book.php" class= "btn" >book nows</a>
        </div>
    </div>
    

  </div>
  <div class="load-more"><a href="package.php" class="btn">load more</a></div>


</section>

<!--package section ends -->

<!-- offer section starts-->

  <section class ="home-offer">
    <div>
      <div class ="content">
        <h3>upto 50% off</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure tempora assumenda, debitis aliquid nesciunt maiores quas! Magni cumque quaerat saepe!</p>
        <a href= "book.php" class= "btn" >book now</a>
      </div>
    </div>  

  </section>

<!--offer section ends -->


<!-- footer section starts-->
  <section class="footer">
    <div>
      <div class="box-container">
        <div class="box">
          <h3>quick links</h3>
          <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
          <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
          <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
          <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
        </div>

        <div class="box">
          <h3> extra links</h3>
          <a href="#"><i class="fas fa-angle-right"></i>ask question</a>
          <a href="#"><i class="fas fa-angle-right"></i>about us </a>
          <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
          <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
        </div>
        <div class="box">
          <h3> contact info</h3>
          <a href="#"><i class="fas fa-phone"></i>9806951074</a>
          <a href="#"><i class="fas fa-phone"></i>9869747143</a>
          <a href="#"><i class="fas fa-envelope">cricketerbibek619@gmail.com</i></a>
          <a href="#"><i class="fas fa-map">kathmandu,nepal-101010</i></a>
        </div>

        <div class="box">
          <h3>follow us</h3>
          <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
          <a href="#"><i class="fab fa-twitter"></i>twitter</a>
          <a href="#"><i class="fab fa-instagram"></i>instagram</a>
          <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
        </div>
        <div class="box">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3534.0057930494513!2d85.31852427536717!3d27.65529247621244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb177c56a520d9%3A0xf3d0d1e37134dfb7!2sCosmos%20College%20of%20Management%20and%20Technology!5e0!3m2!1sen!2snp!4v1690473122573!5m2!1sen!2snp" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      <div class="credit"> created by <span> C2001 (2020)</span> |all rights reserved! </div>

    </div>
  </section>


  <!-- footer section ends-->



  <!-- swiper js link -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


  <!-- custom js file link-->
  <script src="script.js">
    var swiper = new Swiper(".mySwiper", {
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
 
  </script>

</body>

</html>