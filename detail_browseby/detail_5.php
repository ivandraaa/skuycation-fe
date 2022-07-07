<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail | Skuycation</title>
    <link rel="shortcut icon" href="/images/icon-logo.png">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="/css/style.css">

</head>
<body>

<!-- header section starts  -->

<section class="header">

    <a href="home.php" class="logo">
        <b>Skuy</b><c>cation.</c>
    </a>

    <nav class="navbar">
        <a href="/home.php">home</a>
        <a href="/browseby.php">Browse By</a>
        <a href="/event.php">Event</a>
        <a href="/book.php">book</a>
        <a href="/stories.php">stories</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- home about section starts  -->
<h1 class="heading-title-detail"> Bali True Living </h1>
<section class="home-about">
    <div class="image">
        <img src="/images/browseby/balitrue.svg" alt="gambar alila">
    </div>
    &emsp;
    <div class="content">
        <h3>Fasilitas</h3>
        <p>Berikut merupakan fasilitas yang tersedia di hotel ini :</p>
        <img style="padding-right: 1em" src="/images/hotel/ic_ac.svg" alt="">
        <img style="padding-right: 1em" src="/images/hotel/ic_kulkas.svg" alt="">
        <img style="padding-right: 1em" src="/images/hotel/ic_tv.svg" alt="">
        <img style="padding-right: 1em" src="/images/hotel/ic_wifi.svg" alt=""><br><br>
        <form action="/book.php" method="GET">
            <input type="text" name="previews_name" value="Bali True Living" hidden>
            <button class="btn-price" type="submit">Book Now</button>
        </form>
        <!-- <a href="/book.php" class="btn">book now</a> -->
        <a class="btn-price">Rp 700.000 / Malam</a>
    </div>
</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

    <!-- Sec-2 -->
    
    <section class="home-packages">
    <h3 class="detail-event">Pilihan Event Yang Tersedia</h3>
        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="/images/event/denpasar-festival.svg" alt="">
                </div>
                <div class="content">
                    <h3>Denpasar Festival 2022</h3>
                    <p>15 Juni 2022</p>
                    
                    <a href="" class="btn">Lihat Detail</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="/images/event/sanur_village.svg" alt="">
                </div>
                <div class="content">
                    <h3>Sanur Village Festival</h3>
                    <p>20 Agustus 2022</p>
                    
                    <a href="" class="btn">Lihat Detail</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="/images/event/denpasar-festival.svg" alt="">
                </div>
                <div class="content">
                    <h3>Bali Art Festival</h3>
                    <p>18 Agustus 2022</p>
                    
                    <a href="" class="btn">Lihat Detail</a>
                </div>
            </div>
        </div>
        <a href="/browseby.php" class="btn-price-back">Kembali</a>
    </section>
    <!-- Sec-2 -->


<!-- home packages section ends -->

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