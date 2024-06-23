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
	<title>Makassar</title>
	<link rel="stylesheet" type="text/css" href="css/makassar style.css">
  <!-- link -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
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


<!---------------------- BACKGROUND --------------------->
<div class="hero"></div>



<!--------------------- HOME SECTION --------------------->
<div class="container">
  <h1>Kota Makassar</h1>
  <p class="intro">
    Makassar, ibu kota Provinsi Sulawesi Selatan, Indonesia, memiliki sejarah kaya dengan pengaruh Kerajaan Gowa dan Tallo. Dominasi suku Makassar, bersama suku Bugis, Toraja, dan Tionghoa, serta mayoritas penduduk Muslim, mencirikan kota ini. Makassar terkenal dengan budaya perahu Pinisi dan festival F8. Pendidikan berkembang dengan Universitas Hasanuddin sebagai ikon, dan fasilitas kesehatan terus ditingkatkan. Infrastruktur yang baik, termasuk Pelabuhan Soekarno-Hatta dan Bandara Sultan Hasanuddin, mendukung ekonomi yang beragam, terutama di sektor perdagangan, jasa, dan pariwisata. Objek wisata terkenal antara lain Pantai Losari dan Fort Rotterdam. Pemerintah fokus pada pengembangan pariwisata, transportasi, pendidikan, dan kesehatan, menjadikan Makassar <span id="dots">...</span><span class="more-content"> pusat penting di Sulawesi Selatan dan destinasi menarik bagi wisatawan dan investor.
  </p>
  <a href="#" class="read-more" onclick="toggleReadMore(event)">Read More</a>
  <div class="section"></div>
  <hr>

  <h2>Tempat Populer di Makassar</h2>
</div>
<div class="container1">
  <div class="places">
      <a href="#" class="place">
          <div class="image-container">
              <img src="image/nipah mall Bg.jpg" alt="Nipah Mall">
              <div class="rating-badge">
                  <span class="rating-text">4.8</span>
                  <span class="rating-star">
                      <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                      </svg>
                  </span>
              </div>
          </div>
          <h2>Nipah Mall</h2>
          <div class="location">
              <i class="fas fa-map-marker-alt"></i>
              <p>Jl. Urip Sumoharjo, Panakkukang</p>
          </div>
      </a>
      <a href="#" class="place">
        <div class="image-container">
            <img src="image/99 kubah.jpg" alt="Masjid Kubah">
            <div class="rating-badge">
                <span class="rating-text">4.8</span>
                <span class="rating-star">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                    </svg>
                </span>
            </div>
        </div>
        <h2>Masjid Kubah</h2>
        <div class="location">
            <i class="fas fa-map-marker-alt"></i>
            <p>Jl. H. Bau, Tanjung Bunga</p>
        </div>
    </a>
    <a href="#" class="place">
      <div class="image-container">
          <img src="image/trans studio mks Bg.jpg" alt="Trans Studio">
          <div class="rating-badge">
              <span class="rating-text">4.8</span>
              <span class="rating-star">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                  </svg>
              </span>
          </div>
      </div>
      <h2>Trans Studio</h2>
      <div class="location">
          <i class="fas fa-map-marker-alt"></i>
          <p>Jl. Metro, Tanjung Bunga</p>
      </div>
  </a>
  <a href="#" class="place">
    <div class="image-container">
        <img src="image/Museum balla lompoa  bg.jpeg" alt="Museum Balla Lompoa">
        <div class="rating-badge">
            <span class="rating-text">4.8</span>
            <span class="rating-star">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                </svg>
            </span>
        </div>
    </div>
    <h2>Museum Balla Lompoa</h2>
    <div class="location">
        <i class="fas fa-map-marker-alt"></i>
        <p>Jl. K. H. Wahid Hasyim, Sungguminasa</p>
    </div>
</a>
<a href="#" class="place">
  <div class="image-container">
      <img src="image/rotterdamBg.jpg" alt="Benteng Rotterdam">
      <div class="rating-badge">
          <span class="rating-text">4.8</span>
          <span class="rating-star">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
              </svg>
          </span>
      </div>
  </div>
  <h2>Benteng Rotterdam</h2>
  <div class="location">
      <i class="fas fa-map-marker-alt"></i>
      <p>Jl. Ujung Pandang, Bulo Gading</p>
  </div>
</a>
</div>
</div>




<!------------------ KUNJUNGI WISATA -------------------->
<section class="explore-more">
  <div class="header">
    <hr>
    <h1>Kunjungi Wisata di Makassar</h1>
    <p class="sub-text">Beragam destinasi wisata di Makassar, mulai dari wisata alam, sejarah, sampai yang lagi hits.</p>
  </div>
  <div id="cards" class="card-container">
    <!-- Card item -->
    <div class="card" data-image="Museum balla lompoa  bg.jpeg" data-title="Museum Balla Lompoa"></div>
    <div class="card" data-image="image/99 kubah.jpg" data-title="Masjid Kubah 99 Asmaul Husna"></div>
    <div class="card" data-image="image/nipah mall Bg.jpg" data-title="Nipah Mall"></div>
    <div class="card" data-image="image/trans studio mks Bg.jpg" data-title="Trans Studio"></div>
    <div class="card" data-image="image/rotterdamBg.jpg" data-title="Benteng Rotterdam"></div>
  </div>
  <div class="show-more">
    <button id="show-more-btn">Menampilkan lebih banyak</button>
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
<script src="js/makassar script.js"></script>
</body>
</html>