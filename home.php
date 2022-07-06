<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home | Skuycation</title>
   <link rel="shortcut icon" href="images/icon-logo.png">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">
      <b>Skuy</b><c>cation.</c>
   </a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="browseby.php">Browse By</a>
      <a href="event.php">Event</a>
      <a href="book.php">book</a>
      <a href="stories.php">stories</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" >
            <div class="content">
               <span>cari, temukan, liburan</span>
               <h3>lupakan pekerjaan, mari berwisata</h3>
               <a href="#rekomendasi" class="btn">lihat sekarang</a>
            </div>
         </div>
      </div>

      <!-- Fungsi swipper slide  -->
      <!-- <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div> -->

   </div>

</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> Fasilitas </h1>

   <div class="box-container">

      <a href="browseby.php">
         <div class="box">
         &emsp;&emsp;&emsp;<img src="images/icon-1.svg" alt="">
            <h3>100 Titik Wisata</h3>
         </div>
      </a>

      <a href="event.php">
         <div class="box">
            <img src="images/icon-2.svg" alt="">
            <h3>70 Event</h3>
         </div>
      </a>

      <a href="browseby.php">
         <div class="box">
         &emsp;&emsp;&emsp;<img src="images/icon-3.svg" alt="">
            <h3>25 Kota</h3>
         </div>
      </a>
   </div>

</section>

<!-- services section ends -->

<!-- home packages section starts  -->

   <!-- Sec-1 -->
   <section id="rekomendasi" class="home-packages">
      <h1 class="heading-title"> Penginapan Paling Dicari </h1>

      <div class="box-container">

         <div class="box">
            <div class="image">
               <img src="images/hotel/sheraton.svg" alt="">
            </div>
            <div class="content">
               <h3>Sheraton Grand</h3>
               <p>Surakarta, Indonesia</p>
               <a href="detail_browseby/detail_1.php" class="btn">lihat detail</a>
            </div>
         </div>

         <div class="box">
            <div class="image">
               <img src="images/hotel/ocean.svg" alt="">
            </div>
            <div class="content">
               <h3>Ocean Land</h3>
               <p>Denpasar, Indonesia</p>
               <a href="book.php" class="btn">book now</a>
            </div>
         </div>
         
         <div class="box">
            <div class="image">
               <img src="images/hotel/stark.svg" alt="">
            </div>
            <div class="content">
               <h3>Stark House</h3>
               <p>Jogja, Indonesia</p>
               <a href="book.php" class="btn">book now</a>
            </div>
         </div>
      </div>
   </section>
   <!-- Sec-1 -->

   <!-- Sec-2 -->
   <section class="home-packages">
      <h1 class="heading-title"> Penginapan Halaman Luas </h1>

      <div class="box-container">

         <div class="box">
            <div class="image">
               <img src="images/hotel/greenpark.svg" alt="">
            </div>
            <div class="content">
               <h3>Green Park</h3>
               <p>Surakarta, Indonesia</p>
               <a href="book.php" class="btn">book now</a>
            </div>
         </div>

         <div class="box">
            <div class="image">
               <img src="images/hotel/cakra.svg" alt="">
            </div>
            <div class="content">
               <h3>Grand Cakra Hotel</h3>
               <p>Denpasar, Indonesia</p>
               <a href="book.php" class="btn">book now</a>
            </div>
         </div>
         
         <div class="box">
            <div class="image">
               <img src="images/hotel/silver.svg" alt="">
            </div>
            <div class="content">
               <h3>SIlver Rain</h3>
               <p>Jogja, Indonesia</p>
               <a href="book.php" class="btn">book now</a>
            </div>
         </div>
      </div>
      <div class="load-more"> <a href="browseby.php" class="btn">lihat selengkapnya</a> </div>
   </section>
   <!-- Sec-2 -->


<!-- home packages section ends -->

<!-- home about section starts  -->

<section class="home-about">
   <div class="image">
      <img src="images/banner.png" alt="">
   </div>

   <div class="content">
      <h3>Stories</h3>
      <p>Dapatkan penawaran hotel dari kami, dan segera jelajahi wisata di Indonesia.
         Lihat review mereka yang sudah menggunakan Skuycation sebagai tempat mencari hotel dan berwisata
      </p>
      <a href="stories.php" class="btn">lihat selengkapnya</a>
   </div>
</section>

<!-- home about section ends -->

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="browseby.php"> <i class="fas fa-angle-right"></i> Browse By</a>
         <a href="event.php"> <i class="fas fa-angle-right"></i> Event</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
         <a href="stories.php"> <i class="fas fa-angle-right"></i> Stories</a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +62 812-2378-0410 </a>
         <a href="#"> <i class="fas fa-envelope"></i> skuycation@skuy.com </a>
         <a href="#"> <i class="fas fa-map"></i> Jawa Tengah, Surakarta - Banyuanyar </a>
      </div>

   </div>

   <div class="credit"> copyright <span>skuycation</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>