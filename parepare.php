<?php
if (file_exists('koneksi.php')) {
    include 'koneksi.php';
} else {
    echo "File koneksi.php tidak ditemukan!";
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Parepare</title>
	<link rel="stylesheet" type="text/css" href="css/parepare style.css">
  <!-- link -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
</head> 
<body>

  
<!--------------------- NAVBAR SECTION ------------------>
<header>
  <a href="#" class="logo">
    <img src="image/logo.png" alt="Logo" />
  </a>
    <ul class="navbar">
      <li><a href="Beranda.html" id="home">Beranda</a></li>
      <li><a href="#tentang" id="about">Tentang</a></li>
      <li><a href="Informasi umum.html" id="informasi">Informasi umum</a></li>
      <li><a href="Wisata.html" id="wisata">Wisata</a></li> 
      <li class="login"><p href="Login.html" id="loginButton">Login/Register</p></li>
    </ul>
</header>


<!---------------------- BACKGROUND  -------------------->
<div class="background"></div>



<!---------------------- HOME SECTION  ---------------------->
<div class="home-section">
  <h1>Kota Parepare</h1>
  <p>
    Parepare adalah salah satu daerah di Provinsi Sulawesi Selatan, Indonesia, dengan luas sekitar 99,33 km² dan populasi sekitar 140.000 jiwa. Kota ini terkenal sebagai tempat kelahiran B.J. Habibie, Presiden ke-3 Indonesia. Mayoritas penduduknya adalah suku Bugis yang beragama Islam dan berbicara dalam bahasa Bugis. 
    <br>
    <br>Parepare terletak di tepi teluk yang menghadap Selat Makassar, berbatasan dengan Kabupaten Sidenreng Rappang di utara dan Kabupaten Barru di selatan. Wilayahnya sebagian besar berbukit-bukit. Kota ini memiliki iklim tropis dengan suhu rata-rata 28,5°C, dan dibagi menjadi dua musim: kemarau (Maret-September) dan hujan (Oktober-Februari).
  </p>
  <!-- <a href="#" class="read-more">Baca selengkapnya</a> -->
</div>

<!---------------------- HOME2 SECTION  ---------------------->
<div class="section">
  <div class="icon-title">
      <div class="icon">
          <i class="fas fa-lightbulb"></i>
      </div>
      <div>
          <h2>Mengenal Parepare</h2>
          <p>Ikuti tur ke tempat-tempat menarik di destinasi ini</p>
      </div>
  </div>
  <hr>
</div>

<!---------------------- HOME3 SECTION  ---------------------->
<div class="container">
  <h1>Tempat Wisata Terbaik di Parepare</h1>
  <p>Beragam destinasi wisata di Parepare, mulai dari alam, sejarah, hingga hits untuk Anda.</p>
  <div class="carousel">
    <button class="arrow left"><i class="fas fa-chevron-left"></i></button>
    <div class="carousel-wrapper">
      <a href="Anjungan Cempae.html" class="card">
        <img src="image/anjungan-cempae.png">
        <p>Anjungan Cempae</p>
      </a>
      <a href=".html" class="card">
        <img src="image/pantai-paputo.png">
        <p>Paputo Beach</p>
      </a>
      <a href="Taman Mattirotasi.html" class="card">
        <img src="image/mattirotasi-bg.png">
        <p>Taman Mattirotasi</p>
      </a>
      <a href=".html" class="card">
        <img src="image/habibie bg.png">
        <p>Monumen Habibie & Ainun</p>
      </a>
      <a href=".html" class="card">
        <img src="image/tonrangeng.png">
        <p>Tonrangeng River Side</p>
      </a>
    </div>
    <button class="arrow right"><i class="fas fa-chevron-right"></i></button>
  </div>
</div>






<!------------------ KUNJUNGI WISATA -------------------->
<section class="explore-more-home">
  <hr>
  <div class="home">
    <h1>Kunjungi Wisata di Parepare</h1>
    <p class="sub-text-home">Beragam destinasi wisata di Parepare, mulai dari wisata alam, sejarah, sampai yang lagi hits.</p>
  </div>
  <div id="cards-home" class="card-container-home">
    <!-- Card item -->
    <div class="card" data-image="image/mattirotasi-bg.png" data-title="Taman Mattirotasi"></div>
    <div class="card" data-image="image/tonrangeng.png" data-title="Tonrangeng River Side"></div>
    <div class="card" data-image="image/pantai-paputo.png" data-title="Paputo Beach"></div>
    <div class="card" data-image="image/anjungan-cempae.png" data-title="Anjungan Cempae"></div>
    <div class="card" data-image="image/habibie bg.png" data-title="Monumen Habibie & Ainun"></div>
  </div>
  <div class="show-more-home">
    <button id="show-more-btn-home">Menampilkan lebih banyak</button>
  </div>
</section>



<!----------------- FOOTER SECTION --------------------->
<section class="Footer">
  <div class="footer-box">
    <h3>Services</h3>
    <a href="#">Email Marketing</a>
    <a href="">Campaigns</a>
    <a href="#">Brandings</a>
    <a href="#">Offline</a>
  </div>

  <div class="footer-box">
    <h3>Services</h3>
    <a href="#">Our story</a>
    <a href="">Benefits</a>
    <a href="#">Team</a>
    <a href="#">Careers</a>
  </div>

  <div class="footer-box">
    <h3>Services</h3>
    <a href="#">Help</a>
    <a href="">FAQ</a>
    <a href="#">Contact us</a>
  </div>

  <div class="footer-box">
    <h3>Social</h3>
    <div class="Social">
      <a href="#"><i class="ri-instagram-fill"></i></a>
      <a href="#"><i class="ri-twitter-fill"></i></a>
      <a href="#"><i class="ri-facebook-fill"></i></a>
      <a href="#"><i class="ri-Github-fill"></i></a>
      <a href="#"><i class="ri-Snpachat-fill"></i></a>
      <a href="#"><i class="ri-WhatsApp-fill"></i></a>
    </div>
  </div>
</section>

<script src="js/parepare script.js"></script>
</body>
</html>