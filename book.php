<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Form Booking | Skuycation</title>
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

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>book now</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">book your trip!</h1>

   <form name="formPendaftaran" action="book_form.php" method="post" class="book-form" onsubmit="return validateForm()">

      <div class="flex">
         <div class="inputBox">
            <span>nama hotel :</span>
            <input type="text" placeholder="masukan nama hotel" name="nama_hotel" id="nama_hotel" autocomplete="off"
            value=
            "<?php
               echo (isset($_GET['previews_name'])) ? $_GET['previews_name'] : '';
            ?>">
         </div>
         <div class="inputBox">
            <span>tipe kamar :</span>
            <input type="text" placeholder="masukan tipe kamar" name="tipe" id="tipe" autocomplete="off">
         </div>
         <div class="inputBox">
            <span>nama :</span>
            <input type="text" placeholder="masukan nama anda" name="name" id="name" autocomplete="off">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="masukan email anda" name="email" id="email" autocomplete="off">
         </div>
         <div class="inputBox">
            <span>telephone :</span>
            <input type="number" placeholder="masukan nomor handphone anda" name="phone" id="phone" autocomplete="off">
         </div>
         <div class="inputBox">
            <span>alamat :</span>
            <input type="text" placeholder="masukan alamat" name="address" id="address" autocomplete="off">
         </div>
         <div class="inputBox">
            <span>Kota tujuan :</span>
            <input type="text" placeholder="kota yang anda kunjungi" name="location" id="location" autocomplete="off">
         </div>
         <div class="inputBox">
            <span>Jumlah tamu :</span>
            <input type="number" placeholder="masukan jumlah tamu" name="guests" id="guests" autocomplete="off">
         </div>
         <div class="inputBox">
            <span>cek in :</span>
            <input type="date" name="arrivals" id="arrivals" autocomplete="off">
         </div>
         <div class="inputBox">
            <span>cek out :</span>
            <input type="date" name="leaving" id="leaving" autocomplete="off">
         </div>
      </div>

      <input type="submit" value="submit" class="btn" name="send">

   </form>

</section>

<!-- booking section ends -->

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

<script>
      function validateForm() {
            if (document.forms["formPendaftaran"]["nama_hotel"].value == "") {
               alert("Nama Hotel Tidak Boleh Kosong");
               document.forms["formPendaftaran"]["nama_hotel"].focus();
               return false;
            }
            if (document.forms["formPendaftaran"]["tipe"].value == "") {
               alert("Tipe Hotel Tidak Boleh Kosong");
               document.forms["formPendaftaran"]["tipe"].focus();
               return false;
            }
            if (document.forms["formPendaftaran"]["name"].value == "") {
               alert("Nama Traveller Tidak Boleh Kosong");
               document.forms["formPendaftaran"]["name"].focus();
               return false;
            }
            if (document.forms["formPendaftaran"]["email"].value == "") {
               alert("Email Tidak Boleh Kosong");
               document.forms["formPendaftaran"]["email"].focus();
               return false;
            }
            if (document.forms["formPendaftaran"]["phone"].value == "") {
               alert("No Hp Tidak Boleh Kosong");
               document.forms["formPendaftaran"]["phone"].focus();
               return false;
            }
            if (document.forms["formPendaftaran"]["address"].value == "") {
               alert("Alamat Tidak Boleh Kosong");
               document.forms["formPendaftaran"]["address"].focus();
               return false;
            }
            if (document.forms["formPendaftaran"]["location"].value == "") {
               alert("Lokasi Tidak Boleh Kosong");
               document.forms["formPendaftaran"]["location"].focus();
               return false;
            }
            if (document.forms["formPendaftaran"]["guets"].value == "") {
               alert("Isian Berapa Tamu Tidak Boleh Kosong");
               document.forms["formPendaftaran"]["guets"].focus();
               return false;
            }
            if (document.forms["formPendaftaran"]["arrivals"].selectedIndex < 1) {
               alert("Isi Tanggal Kedatangan Tidak Boleh Kosong");
               document.forms["formPendaftaran"]["arrivals"].focus();
               return false;
            }
            if (document.forms["formPendaftaran"]["leaving"].selectedIndex < 2) {
               alert("Isi Tanggal Kehadiran Tidak Boleh Kosong");
               document.forms["formPendaftaran"]["leaving"].focus();
               return false;
            }
      }
   </script>
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>