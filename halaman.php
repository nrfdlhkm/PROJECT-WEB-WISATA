<?php
session_start();

// Periksa apakah pengguna sudah login
if(!isset($_SESSION["username"])){
    header("location: register.php");
    exit();
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="halaman style.css">

 <!---------------------------- Boxicons Link ------------------------------>
 <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

 <!---------------------------- Remixicon Link ------------------------------>
 <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>

 <!---------------------------- Google Fonts Link ------------------------------>
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

 <!---------------------------- Font Awesome Icons Link ------------------------------>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>

 <!------------------------------ Owl Carousel Links ------------------------------>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
 

 <style>
  .page-transition {
    animation: fadeOut 0.5s ease-in-out forwards;
  }

  @keyframes fadeOut {
    from {
      opacity: 1;
    }
    to {
      opacity: 0;
    }
  }
  body, h1, h2, h3, h4, h5, h6, p, a, span {
    font-family: 'Open Sans', sans-serif;
  }
</style>

</head> 

<body>

  <!---------------------- BACKGROUND VIDEO --------------------->
  <div class="hero">
    <video autoplay muted id="myVideo">
      <source src="3.mp4" type="video/mp4">
    </video>

    <!--------------------- NAVBAR SECTION --------------------->
    <header>
      <a href="#" class="logo">
        <img src="image/logo.png" alt="Logo" />
    </a>
          <ul class="navbar">
          <li><a href="halaman.html" id="home">Beranda</a></li>
          <li><a href="#holiday" id="about">Tentang</a></li>
          <li><a href="informasi umum.html" id="informasi">Informasi Umum</a></li>
          <li><a href="wisata.html" id="about">Wisata</a></li>
          <li><a href="login.html" id="login">Masuk</a></li>
          <!-- <li class="login"><a href="#" id="loginButton">Masuk</a></li> -->
      </ul>
  </header>
  </div>



    <!--------------------- LOGIN SECTION --------------------->
    <!-- <div class="modal" id="loginModal">
  <div class="modal-content">
      <span class="close" id="closeModal">&times;</span>
      <div class="tab">
      </div>
      <div id="LoginForm" class="form-container active">
          <div class="container-login">
              <div class="main-box login">
                  <h1>Masuk</h1>
                  <form action="">
                      <div class="input-box">
                          <span class="icon"><i class="bx bxs-envelope"></i></span>
                          <input type="email" required>
                          <label>Email</label>
                      </div>
                      <div class="input-box">
                          <span class="icon"><i class="bx bxs-lock-alt"></i></span>
                          <input type="password" required>
                          <label>Kata sandi</label>
                      </div>
                      <div class="check">
                          <label><input type="checkbox">Ingatkan saya!</label>
                          <span class="forgot-password"><a href="#">Lupa kata sandi?</a></span>
                      </div>
                      <button type="button" class="main-btn-login" onclick="redirectToProfile()">Masuk</button>
                      <div class="register">
                          <p>Tidak punya akun?<a href="#" class="register-link"> Daftar</a></p>
                      </div>
                  </form>
              </div>
          </div>
      </div>
      <div id="RegisterForm" class="form-container">
          <div class="container-login">
              <div class="main-box register">
                  <h1>Daftar</h1>
                  <form action="">
                      <div class="input-box">
                          <span class="icon"><i class="bx bxs-user"></i></span>
                          <input type="text" required>
                          <label>Nama pengguna</label>
                      </div>
                      <div class="input-box">
                          <span class="icon"><i class="bx bxs-envelope"></i></span>
                          <input type="email" required>
                          <label>Email</label>
                      </div>
                      <div class="input-box">
                          <span class="icon"><i class="bx bxs-lock-alt"></i></span>
                          <input type="password" required>
                          <label>Kata sandi</label>
                      </div>
                      <div class="input-box">
                          <span class="icon"><i class="bx bxs-lock-alt"></i></span>
                          <input type="password" required>
                          <label>Konfirmasi Kata sandi</label>
                      </div>
                      <div class="check">
                          <label><input type="checkbox">Saya menerima semua syarat & ketentuan</label>
                      </div>
                      <button type="submit" class="main-btn">Daftar</button>
                      <div class="register">
                          <p>Sudah punya akun?<a href="#" class="login-link"> Masuk</a></p>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div> -->




      <!--------------------- HEAD SECTION --------------------->
    <div class="content">
      <!-- <h3>Jelajahi Indonesia</h3> -->
      <h1>Wisata Nusantara</h1>
      <!-- <p></p>
      <a href="#" class="btn">search</a> -->
    </div>




      <!--------------------- SEARCH SECTION --------------------->
      <!-- <div class="search-bar">
      <div class="search-item">
          <i class="fas fa-map-marked-alt icon"></i>
          <select>
            <option value="" disabled selected hidden>Pilih Provinsi</option>
            <option value="1">Sulawesi Selatan</option>
            <option value="2">Sulawesi Barat</option>
            <option value="3">Jawa Timur</option>
            <option value="4">Jawa Barat</option>
            <option value="4">Bali</option>
            <option value="4">NTT</option>
        </select>
      </div>
      <div class="separator"></div>
      <div class="search-item">
          <i class="fas fa-building icon"></i>
          <select>
            <option value="" disabled selected hidden>Pilih Kota</option>
            <option value="kota">Parepare</option>
            <option value="kota">Polewali</option>
            <option value="kota">Pinrang</option>
            <option value="kota">Makassar</option>
            <option value="kota">Maros</option>
            <option value="kota">Barru</option>
            <option value="kota">Majene</option>
            <option value="kota">Tana Toraja</option>
        </select>
      </div>
      <div class="separator"></div>
      <div class="search-item">
          <i class="fas fa-list icon"></i>
          <select>
              <option value="" disabled selected hidden>Kategori</option>
              <option value="1">Pulau</option>
              <option value="2">Air Terjun</option>
              <option value="3">Gunung</option>
              <option value="4">Pantai</option>
          </select>
      </div>
      <button class="search-button" id="searchButton">Cari</button>
  </div> -->




      <!--------------------- HOME SECTION --------------------->
      <section class="explore-more">
  <div class="header">
      <h1>Jelajahi lebih lanjut</h1>
      <p class="sub-text">Nikmati liburan dan wisata lengkap di Indonesia, serta berbagai destinasi menarik lainnya. Mari kita jelajahi sekarang!</p>
  </div>
  <div class="filters">
      <button class="filter-btn active" onclick="showCategory('popular')">Destinasi Popular</button>
      <button class="filter-btn" onclick="showCategory('pulau')">Pulau</button>
      <button class="filter-btn" onclick="showCategory('danau')">Danau</button>
      <button class="filter-btn" onclick="showCategory('pantai')">Pantai</button>
      <button class="filter-btn" onclick="showCategory('gunung')">Gunung</button>
      <button class="filter-btn" onclick="showCategory('budaya')">Budaya & Sejarah</button>
      <button class="filter-btn" onclick="showCategory('AirTerjun')">Air Terjun</button>
      <!-- <button class="filter-btn" onclick="openModal()"><i class="fas fa-sliders-h"></i> Filters</button> -->
  </div>
  <div id="cards" class="card-container">
      <div class="card">
          <img src="image/borobudur.jpg" alt="Candi Borobudur">
          <div class="card-content">
              <div class="rating-badge">
                  <i class="fas fa-star"></i>
              </div>
              <p class="location">
                  <i class="fas fa-map-marker-alt location-icon"></i>
              </p>
              <p><a href="Candi borobudur.html"><button class="details-btn">Details</button></a></p>
            </div>
      </div>
      <div class="card">
        <img src="image/pink beach bg.jpg" alt="Pink Beach">
        <div class="card-content">
            <div class="rating-badge">
                <i class="fas fa-star"></i>
            </div>
            <p class="location">
                <i class="fas fa-map-marker-alt location-icon"></i>
            </p>
            <p><a href="pink beach.html"><button class="details-btn">Details</button></a></p>
          </div>
    </div>
      <div class="card">
          <img src="image/pura luhur.jpg" alt="Pura Luhur Uluwatu">
          <div class="card-content">
              <div class="rating-badge">
                  <i class="fas fa-star"></i>
              </div>
              <p class="location">
                  <i class="fas fa-map-marker-alt location-icon"></i>
              </p>
              <p><a href="pura uluwatu.html"><button class="details-btn">Details</button></a></p>
          </div>
      </div>
      <div class="card">
          <img src="image/candi.jpg" alt="Candi Prambanan">
          <div class="card-content">
              <div class="rating-badge">
                  <i class="fas fa-star"></i>
              </div>
              <p class="location">
                  <i class="fas fa-map-marker-alt location-icon"></i>
              </p>
              <p><a href="candi prambanan.html"><button class="details-btn">Details</button></a></p>
          </div>
      </div>
      <div class="card">
          <img src="image/komodo.jpg" alt="Pulau Komodo">
          <div class="card-content">
              <div class="rating-badge">
                  <i class="fas fa-star"></i>
              </div>
              <p class="location">
                  <i class="fas fa-map-marker-alt location-icon"></i>
              </p>
              <p><a href="pulau komodo.html"><button class="details-btn">Details</button></a></p>
          </div>
      </div>
      <div class="card hidden">
          <img src="image/rammang bg.jpg" alt="Rammang Rammang">
          <div class="card-content">
              <div class="rating-badge">
                  <i class="fas fa-star"></i>
              </div>
              <p class="location">
                  <i class="fas fa-map-marker-alt location-icon"></i>
              </p>
              <p><a href="rammang.html"><button class="details-btn">Details</button></a></p>
          </div>
      </div>
      <div class="card hidden">
          <img src="image/pura agung.jpg" alt="Pura Agung Besakih">
          <div class="card-content">
              <div class="rating-badge">
                  <i class="fas fa-star"></i>
              </div>
              <p class="location">
                  <i class="fas fa-map-marker-alt location-icon"></i>
              </p>
              <p><a href="candi prambanan.html"><button class="details-btn">Details</button></a></p>
          </div>
      </div>
      <div class="card hidden">
          <img src="image/Piaynemo Raja Ampat.jpg" alt="Raja Ampat">
          <div class="card-content">
              <div class="rating-badge">
                  <i class="fas fa-star"></i>
              </div>
              <p class="location">
                  <i class="fas fa-map-marker-alt location-icon"></i>
              </p>
              <button href="piaynemo.html" class="details-btn">Details</button>
          </div>
      </div>
      <div class="card hidden">
          <img src="image/banyumala.jpg" alt="Banyumala">
          <div class="card-content">
              <div class="rating-badge">
                  <i class="fas fa-star"></i>
              </div>
              <p class="location">
                  <i class="fas fa-map-marker-alt location-icon"></i>
              </p>
              <button href="piaynemo.html" class="details-btn">Details</button>
          </div>
      </div>
      <div class="card hidden">
        <img src="image/bromo bg.png" alt="King Kong Hill">
        <div class="card-content">
            <div class="rating-badge">
                <i class="fas fa-star"></i>
            </div>
            <p class="location">
                <i class="fas fa-map-marker-alt location-icon"></i>
            </p>
            <button href="Bromo.html" class="details-btn">Details</button>
          </div>
    </div>
    <div class="card hidden">
      <img src="image/labuan bajoo.jpg" alt="Labuan Bajo">
      <div class="card-content">
          <div class="rating-badge">
              <i class="fas fa-star"></i>
          </div>
          <p class="location">
              <i class="fas fa-map-marker-alt location-icon"></i>
          </p>
          <button href="Bromo.html" class="details-btn">Details</button>
        </div>
  </div>
  <div class="card hidden">
    <img src="image/ollon.png" alt="Lembah Ollon">
    <div class="card-content">
        <div class="rating-badge">
            <i class="fas fa-star"></i>
        </div>
        <p class="location">
            <i class="fas fa-map-marker-alt location-icon"></i>
        </p>
        <button href="Bromo.html" class="details-btn">Details</button>
      </div>
</div>
<div class="card hidden">
  <img src="image/ijen.jpg" alt="Gunung Ijen">
  <div class="card-content">
      <div class="rating-badge">
          <i class="fas fa-star"></i>
      </div>
      <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
      </p>
      <button href="ijen.html" class="details-btn">Details</button>
    </div>
</div>
<div class="card hidden">
  <img src="image/sewu.jpg" alt="Tumpak Sewu">
  <div class="card-content">
      <div class="rating-badge">
          <i class="fas fa-star"></i>
      </div>
      <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
      </p>
      <button href="ijen.html" class="details-btn">Details</button>
  </div>
</div>
<div class="card hidden">
  <img src="image/samosir bg.jpg" alt="Pulau samosir">
  <div class="card-content">
      <div class="rating-badge">
          <i class="fas fa-star"></i>
      </div>
      <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
      </p>
      <button href="Pulau samosir.html" class="details-btn">Details</button>
  </div>
</div>
<div class="card hidden">
  <img src="image/waerebo.jpg" alt="Waerebo Village">
  <div class="card-content">
      <div class="rating-badge">
          <i class="fas fa-star"></i>
      </div>
      <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
      </p>
      <button href="Pulau samosir.html" class="details-btn">Details</button>
  </div>
</div>
<div class="card hidden">
  <img src="image/goa.png" alt="Goa Gong Pacitan">
  <div class="card-content">
      <div class="rating-badge">
          <i class="fas fa-star"></i>
      </div>
      <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
      </p>
      <button href="Pulau samosir.html" class="details-btn">Details</button>
  </div>
</div>
<div class="card hidden">
  <img src="image/kuburan.jpg" alt="Kuburan Batu Lemo">
  <div class="card-content">
      <div class="rating-badge">
          <i class="fas fa-star"></i>
      </div>
      <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
      </p>
      <button href="kuburan batu.html" class="details-btn">Details</button>
  </div>
</div>
<div class="card hidden">
  <img src="image/Nglirip.png" alt="Nglirip">
  <div class="card-content">
      <div class="rating-badge">
          <i class="fas fa-star"></i>
      </div>
      <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
      </p>
      <button href="kuburan batu.html" class="details-btn">Details</button>
  </div>
</div>
<div class="card hidden">
  <img src="image/Benang Kelambu.png" alt="Benang Kelambu">
  <div class="card-content">
      <div class="rating-badge">
          <i class="fas fa-star"></i>
      </div>
      <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
      </p>
      <button href="kuburan batu.html" class="details-btn">Details</button>
  </div>
</div>
<div class="card hidden">
  <img src="image/Madakaripura.png" alt="Madakaripura">
  <div class="card-content">
      <div class="rating-badge">
          <i class="fas fa-star"></i>
      </div>
      <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
      </p>
      <button href="kuburan batu.html" class="details-btn">Details</button>
  </div>
</div>
<div class="card hidden">
  <img src="image/Nusa Penida.jpg" alt="Nusa Penida">
  <div class="card-content">
      <div class="rating-badge">
          <i class="fas fa-star"></i>
      </div>
      <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
      </p>
      <button href="nusa penida.html" class="details-btn">Details</button>
  </div>
</div>
<div class="card hidden">
  <img src="image/lorentz.png" alt="Lorentz">
  <div class="card-content">
      <div class="rating-badge">
          <i class="fas fa-star"></i>
      </div>
      <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
      </p>
      <button href="nusa penida.html" class="details-btn">Details</button>
  </div>
</div>
<div class="card hidden">
  <img src="image/kedung.png" alt="Keduang Kandang">
  <div class="card-content">
      <div class="rating-badge">
          <i class="fas fa-star"></i>
      </div>
      <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
      </p>
      <button class="details-btn">Details</button>
  </div>
</div>
  </div>
  <div class="show-more">
      <button id="show-more-btn">Menampilkan lebih banyak</button>
      <!-- <button id="show-more-btn">Show more</button> -->
  </div>
</section>





      <!------------------ WISATA TERKENAL SECTION ------------------>
      <div class="container-2">
  <div class="header-2">
      <h1>Wisata Terkenal di Sulawesi</h1>
      <!-- <button class="view-more">View More</button> -->
  </div>
  <div class="cards-2">
    <div class="card-2">
      <img src="image/padang indah.png">
      <div class="card-content-2">
          <h2>Padang Indah</h2>
          <p class="location">
            <i class="fas fa-map-marker-alt location-icon"></i>
            Barru, Sulawesi Selatan
           <!-- <p class="description">Surga bawah laut dengan <br>keanekaragaman hayati yang luar biasa</p> -->
                <p><button class="details-btn">Details</button></p>
            </div>
            <div class="rating-badge">
              <i class="fas fa-star"></i>
              <span>4.9</span>
      </div>
  </div>
      <div class="card-2">
          <img src="image/patung toraja.jpeg">
          <div class="card-content-2">
              <h2>Patung Yesus Buntu <br>Burake</h2>
              <p class="location">
                <i class="fas fa-map-marker-alt location-icon"></i>
                Tana Toraja, Sulawesi Selatan
                <p><button class="details-btn">Details</button></p>
                  </div>
                  <div class="rating-badge">
                    <i class="fas fa-star"></i>
                    <span>4.9</span>
         </div>
      </div>
      <div class="card-2">
          <img src="image/bunaken.png">
          <div class="card-content-2">
              <h2>Taman Nasional <br>Bunaken</h2>
              <p class="location">
                <i class="fas fa-map-marker-alt location-icon"></i>
                Manado, Sulawesi Utara
                <p><button class="details-btn">Details</button></p>
          </div>
          <div class="rating-badge">
            <i class="fas fa-star"></i>
            <span>4.9</span>
          </div>
      </div>
  <div class="card-2">
    <img src="image/rammang2.jpg">
    <div class="card-content-2">
        <h2>Karst Rammang <br>Rammang</h2>
        <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
          Maros, Sulawesi Selatan
          <p><button class="details-btn">Details</button></p>
        </div>
        <div class="rating-badge">
          <i class="fas fa-star"></i>
          <span>4.9</span>
    </div>
</div>
  <div class="card-2">
    <img src="image/bira.jpeg">
    <div class="card-content-2">
        <h2>Pantai <br>Tanjung Bira</h2>
        <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
          Bulukumba, Sulawesi Selatan
          <p><button class="details-btn">Details</button></p>
        </div>
        <div class="rating-badge">
          <i class="fas fa-star"></i>
          <span>4.9</span>
    </div>
</div>
<div class="card-2">
  <img src="image/selayar.png">
  <div class="card-content-2">
      <h2>Pulau <br>Selayar</h2>
      <p class="location">
        <i class="fas fa-map-marker-alt location-icon"></i>
        Selayar, Sulawesi Selatan
        <p><button class="details-btn">Details</button></p>
      </div>
      <div class="rating-badge">
        <i class="fas fa-star"></i>
        <span>4.9</span>
  </div>
</div>
<div class="card-2">
  <img src="image/gorontalo.png">
  <div class="card-content-2">
      <h2>Taman Nasional Bogani <br>Nani Wartabone</h2>
      <p class="location">
        <i class="fas fa-map-marker-alt location-icon"></i>
        Gorontalo, Sulawesi Utara
        <p><button class="details-btn">Details</button></p>
      </div>
      <div class="rating-badge">
        <i class="fas fa-star"></i>
        <span>4.9</span>
  </div>
</div>
<div class="card-2">
  <img src="image/ora.jpeg">
  <div class="card-content-2">
      <h2>Pantai <br>Ora</h2>
      <p class="location">
        <i class="fas fa-map-marker-alt location-icon"></i>
        Maluku Tengah, Maluku
        <p><button class="details-btn">Details</button></p>
      </div>
      <div class="rating-badge">
        <i class="fas fa-star"></i>
        <span>4.9</span>
  </div>
</div>
<div class="card-2">
  <img src="image/99 kubah.jpg">
  <div class="card-content-2">
      <h2>Masjid Kubah <br> 99 Asmaul Husna</h2>
      <p class="location">
        <i class="fas fa-map-marker-alt location-icon"></i>
        Makassar, Sulawesi Selatan
        <p><button class="details-btn">Details</button></p>
      </div>
      <div class="rating-badge">
        <i class="fas fa-star"></i>
        <span>4.9</span>
  </div>
</div>
<div class="card-2">
  <img src="image/laona.png">
  <div class="card-content-2">
      <h2>Lappa <br>Laona </h2>
      <p class="location">
        <i class="fas fa-map-marker-alt location-icon"></i>
        Barru, Sulawesi Selatan
        <p><button class="details-btn">Details</button></p>
      </div>
      <div class="rating-badge">
        <i class="fas fa-star"></i>
        <span>4.9</span>
  </div>
</div>
<div class="card-2">
  <img src="image/karawa2.png">
  <div class="card-content-2">
      <h2>Air Terjun <br>Karawa</h2>
      <p class="location">
        <i class="fas fa-map-marker-alt location-icon"></i>
        Pinrang, Sulawesi Selatan
        <p><button class="details-btn">Details</button></p>
      </div>
      <div class="rating-badge">
        <i class="fas fa-star"></i>
        <span>4.9</span>
  </div>
</div>
<div class="card-2">
  <img src="image/dato.png">
  <div class="card-content-2">
      <h2>Pantai <br>Dato</h2>
      <p class="location">
        <i class="fas fa-map-marker-alt location-icon"></i>
        Majene, Sulawesi Barat
        <p><button class="details-btn">Details</button></p>
      </div>
      <div class="rating-badge">
        <i class="fas fa-star"></i>
        <span>4.9</span>
  </div>
</div>
<div class="card-2">
  <img src="image/samalona.png">
  <div class="card-content-2">
      <h2>Pulau <br>Samalona</h2>
      <p class="location">
        <i class="fas fa-map-marker-alt location-icon"></i>
        Makassar, Sulawesi Selatan
        <p><button class="details-btn">Details</button></p>
      </div>
      <div class="rating-badge">
        <i class="fas fa-star"></i>
        <span>4.9</span>
  </div>
</div>
<div class="card-2">
  <img src="image/karomba.png">
  <div class="card-content-2">
      <h2>Puncak <br>Karomba</h2>
      <p class="location">
        <i class="fas fa-map-marker-alt location-icon"></i>
        Pinrang, Sulawesi Selatan
        <p><button class="details-btn">Details</button></p>
      </div>
      <div class="rating-badge">
        <i class="fas fa-star"></i>
        <span>4.9</span>
  </div>
</div>
<div class="card-2">
  <img src="image/salopi.png">
  <div class="card-content-2">
      <h2>Pantai <br>Salopi</h2>
      <p class="location">
        <i class="fas fa-map-marker-alt location-icon"></i>
        Pinrang, Sulawesi Selatan
        <p><button class="details-btn">Details</button></p>
      </div>
      <div class="rating-badge">
        <i class="fas fa-star"></i>
        <span>4.9</span>
  </div>
</div>
<div class="card-2">
  <img src="image/ammani.png">
  <div class="card-content-2">
      <h2>Pantai <br>Ammani</h2>
      <p class="location">
        <i class="fas fa-map-marker-alt location-icon"></i>
        Pinrang, Sulawesi Selatan
        <p><button class="details-btn">Details</button></p>
      </div>
      <div class="rating-badge">
        <i class="fas fa-star"></i>
        <span>4.9</span>
  </div>
</div>
<div class="card-2">
  <img src="image/Rumede3.png">
  <div class="card-content-2">
      <h2>Kampung <br>Rumede</h2>
      <p class="location">
        <i class="fas fa-map-marker-alt location-icon"></i>
        Polewali, Sulawesi Barat
        <p><button class="details-btn">Details</button></p>
      </div>
      <div class="rating-badge">
        <i class="fas fa-star"></i>
        <span>4.9</span>
  </div>
</div>
<div class="card-2">
  <img src="image/kali.png">
  <div class="card-content-2">
      <h2>Wisata Alam <br>Kalibiru </h2>
      <p class="location">
        <i class="fas fa-map-marker-alt location-icon"></i>
        Polewali, Sulawesi Barat
        <p><button class="details-btn">Details</button></p>
      </div>
      <div class="rating-badge">
        <i class="fas fa-star"></i>
        <span>4.9</span>
  </div>
</div>
  </div>
</div>




<!--------------------- PANDUAN SECTION --------------------->
 <section class="services" id="services">
  <div class="heading">
      <h3>Panduan Perjalanan </h3>
      <p>Semua yang harus Anda ketahui & persiapkan sebelum melangkah ke Petualangan Anda!</p>
      <!-- <p>Kami menyambut Anda untuk jadi bagian dari keajaiban yang tak terbatas</p> -->
  </div>
      <div class="card-content">
          <div class="row">
            <i class="fas fa-map-marked-alt"></i> 
            <div class="card-body">
                  <h3>Rencanakan Destinasi</h3>
                  <p>Pilih dan rencanakan perjalanan Anda di antara ribuan pulau di Indonesia yang menakjubkan, sesuai dengan minat dan preferensi Anda.</p>
              </div>
          </div>
          <div class="row">
              <i class="fas fa-monument"></i>
              <div class="card-body">
                  <h3>Eksplor <br> Budaya Indonesia</h3>
                  <p>Rasakan keberagaman budaya Indonesia dengan mengunjungi desa tradisional, pameran seni, dan festival lokal untuk pengalaman autentik.</p>
              </div>
          </div>
          <div class="row">
              <i class="fas fa-hand-holding-heart"></i>
              <div class="card-body">
                  <h3>Menghargai <br>Tradisi Lokal </h3>
                  <p>Hormati alam & budaya dengan menjaga kebersihan tempat wisata, hindari merusak lingkungan, dan patuhi aturan setempat.</p>
              </div>
          </div>
          <div class="row">
            <i class="fas fa-suitcase-rolling"></i>
            <div class="card-body4">
                <h3>Kebutuhan <br>Perjalanan</h3>
                <p>Pastikan membawa perlengkapan yang tepat, seperti pakaian sesuai dengan cuaca, obat-obatan pribadi &  perlengkapan keamanan untuk kegiatan luar ruangan.</p>
            </div>
              </div>
          </div>
      </div>
</section>
<!-- Services Section End -->






<!--------------------- SATU KLIK UNTUK ANDA --------------------->
<div class="container">
  <div class="info-section">
      <h3>Satu klik untuk Anda</h3>
      <ul>
          <li class="info-box" onmouseover="showDetail(this)" onmouseout="hideDetail(this)">
              <div class="icon2"><i class="fas fa-lightbulb"></i></div>
              <div>
                <h4>Tips & Tricks</h4>
                  <p>Dapatkan tips dan trik untuk memaksimalkan perjalanan Anda. Temukan destinasi impian dengan panduan terbaik.</p>
              </div>
          </li>
          <li class="info-box" onmouseover="showDetail(this)" onmouseout="hideDetail(this)" onclick="window.location.href = 'informasi umum.html'">
            <div class="icon2"><i class="fas fa-globe"></i></div>
              <div>
                <h4>Mengenal Indonesia</h4>
                  <p>Kenali keindahan dan keragaman Indonesia. Jelajahi budaya, alam, dan destinasi eksotis di seluruh negeri.</p>
              </div> 
          </li>
          <li class="info-box" onmouseover="showDetail(this)" onmouseout="hideDetail(this)">
              <div class="icon2"><i class="fas fa-map-signs"></i></div>
              <div>
                <h4>Temukan tujuan Anda</h4>
                  <p>Temukan tujuan wisata yang sesuai dengan preferensi Anda. Dapatkan rekomendasi dan inspirasi untuk perjalanan berikutnya.</p>
              </div>
          </li>
          <li class="info-box" onmouseover="showDetail(this)" onmouseout="hideDetail(this)" onclick="window.location.href = 'Menuju Indonesia.html'">
            <div class="icon2"><i class="fas fa-plane"></i></div>
              <div>
                  <h4>Menuju Indonesia</h4>
                <p>Bersiaplah untuk petualangan tak terlupakan di Indonesia. Temukan rekomendasi perjalanan khusus hanya untuk Anda.</p>
              </div>
          </li>
      </ul>
  </div>
</div>





  <!--------------------------- ABOUT SECTION ------------------------------>
  <section id="holiday" class="holiday">
    <div class="holiday-img">
      <img src="image/about-img.png">
    </div>
    <div class="holiday-text">
      <h5>Let's</h5>
      <!-- <h5>Mari</h5> -->
      <h2>Learn more about Tours</h2>
      <!-- <h2>Belajar lebih<br>tentang Tours</h2> -->
      <p>Menikmati keindahan alam dan kekayaan budaya dunia merupakan pengalaman yang tak terlupakan. Setiap perjalanan wisata adalah kesempatan untuk menemukan keajaiban baru, menjelajahi tempat-tempat ikonik, dan merasakan keunikan setiap destinasi. </p>
    </div>
  </section>



  <!----------------------------- FOOTER SECTION ----------------------------->
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

  <!---------------------------- COPYRIGHT SECTION ----------------------------->
  <!-- <div class="copyright">
    <p>Copyright 2024 By Tours</p>
  </div> -->







  <!------------------------------- JAVASCRIPT --------------------------------->

  <!-- JQuery Link -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

  <!-- Testimonial js Link -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>




  <!-------------- Link JS Swiper ---------------->
  <!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->



  <!-------------- ANIMASI HALAMAN ---------------->
  <script src="assets/js/scrollreveal.min.js"></script>
  <script>
    const sr = ScrollReveal({
      origin: 'top',
      distance:'60px',
      duration: 3000,
      delay: 400,
    });

    sr.reveal(`.container-2`,{delay: 600, distance: '100px', interval: 100});
    sr.reveal(`.container`,{delay: 600, distance: '100px', interval: 100});
    sr.reveal(`.image-caption, .background-image, .search-bar2`, {origin: 'left'});
    sr.reveal(`.card-container, .show-more `, {origin: 'bottom',});
    sr.reveal(`.tour`, {origin: 'bottom',});
    sr.reveal(`.content`, {origin: 'bottom',});
    sr.reveal(`.card-content`, {origin: 'bottom',});
    sr.reveal(`.heading`,{delay: 600, distance: '100px', interval: 100});
    sr.reveal(`.search-container`, {origin: 'bottom',});
    sr.reveal(`.Footer`, {origin: 'bottom',});
    sr.reveal(`.holiday-img`, {origin: 'left',});
    sr.reveal(`.holiday-text`, {origin: 'right',});
  </script>



<!------------------- BACKGROUND VIDEO ---------------->
<script>
  function playVideo() {
      var video = document.getElementById("hero-video");
      video.play();
  }

  window.onload = playVideo;
</script>


<!------------------- NAVBAR STICKY ---------------->
<script>
  // Kode JavaScript untuk membuat header tetap
  const header = document.querySelector("header");
  window.addEventListener("scroll", function() {
    header.classList.toggle("sticky", window.scrollY > 60)
  });
</script>



<!-------------------------- LOGIN ------------------------------->
<!-- <script>
  document.getElementById('loginButton').onclick = function() {
    document.getElementById('loginModal').style.display = "block";
    document.getElementById('LoginForm').classList.add('active');
    document.getElementById('RegisterForm').classList.remove('active');
  };

  document.getElementById('closeModal').onclick = function() {
    document.getElementById('loginModal').style.display = "none";
  };

  window.onclick = function(event) {
    if (event.target == document.getElementById('loginModal')) {
      document.getElementById('loginModal').style.display = "none";
    }
  };

  document.querySelector('.register-link').addEventListener('click', function(event) {
    event.preventDefault();
    document.getElementById('LoginForm').classList.remove('active');
    document.getElementById('RegisterForm').classList.add('active');
  });

  document.querySelector('.login-link').addEventListener('click', function(event) {
    event.preventDefault();
    document.getElementById('RegisterForm').classList.remove('active');
    document.getElementById('LoginForm').classList.add('active');
  });

  function redirectToProfile() {
    window.location.href = 'halaman profile.html';
  }
</script> -->




<!----------------------------------------------- HOME SECTION --------------------------------------------->

<!-- <script>
  document.getElementById('details-btn').addEventListener('click', function() {
    window.location.href = 'detail-page.html';
  });
</script> -->

<script>
  const cardsData = {
    popular: [
        { title: 'Candi Borobudur', location: 'Magelang, Jawa Tengah', rating: 4.7, imgSrc: 'image/borobudur.jpg', detailsUrl: 'Candi borobudur.html'},
        { title: 'Pink Beach', location: 'Manggarai Barat, NTT', rating: 4.6, imgSrc: 'image/pink beach bg.jpg', detailsUrl: 'pink beach.html'},
        { title: 'Candi Prambanan', location: 'Yogyakarta, Jawa Tengah', rating: 4.7, imgSrc: 'image/candi.jpg', detailsUrl: 'candi prambanan.html'},
        { title: 'King Kong Hill', location: 'Malang, Jawa Timur', rating: 4.7, imgSrc: 'image/bromo bg.png', detailsUrl: 'Bromo.html'},
        { title: 'Pulau Komodo', location: 'Pulau, NTT', rating: 4.4, imgSrc: 'image/komodo.jpg', detailsUrl: 'pulau komodo.html' },
        { title: 'Rammang Rammang', location: 'Maros, Sulawesi Selatan', rating: 4.7, imgSrc: 'image/rammang bg.jpg' , detailsUrl: 'rammang.html'},
        { title: 'Pura Luhur Uluwatu', location: 'Pecatu, Bali', rating: 4.6, imgSrc: 'image/pura luhur.jpg' , detailsUrl: 'pura uluwatu.html'},
        { title: 'Piaynemo', location: 'Sorong, Papua Barat Daya', rating: 4.4, imgSrc: 'image/Piaynemo Raja Ampat.jpg', detailsUrl: 'piaynemo.html' },
        { title: 'Banyumala', location: 'Buleleng, Bali', rating: 4.6, imgSrc: 'image/banyumala.jpg', detailsUrl: 'candi prambanan.html' },
        { title: 'Labuan Bajo', location: 'Manggarai Barat, NTT', rating: 4.7, imgSrc: 'image/labuan bajoo.jpg', detailsUrl: 'candi prambanan.html' },
        { title: 'Lembah Ollon', location: 'Tana Toraja, Sulawesi Selatan', rating: 4.8, imgSrc: 'image/ollon.png', detailsUrl: 'candi prambanan.html' },
        { title: 'Pura Agung Besakih', location: 'Karangasem, Bali', rating: 4.5, imgSrc: 'image/pura agung.jpg', detailsUrl: 'candi prambanan.html' },
        // { title: 'Sipiso-piso', location: 'Sumut, Sumatera Utara', rating: 4.6, imgSrc: 'image/sipiso.png' },
        { title: 'Gunung Ijen', location: 'Banyuwangi, Jawa Timur', rating: 4.7, imgSrc: 'image/ijen.jpg', detailsUrl: 'ijen.html' },
        { title: 'Tumpak Sewu', location: 'Lumajang, Jawa Timur', rating: 4.6, imgSrc: 'image/sewu.jpg', detailsUrl: 'candi prambanan.html' },
        { title: 'Pulau Samosir', location: 'Pulau Samosir, Sumatera Utara', rating: 4.6, imgSrc: 'image/samosir bg.jpg', detailsUrl: 'Pulau samosir.html' },
        { title: 'Waerebo Village', location: 'Kepulauan Manggarai, NTT', rating: 4.7, imgSrc: 'image/waerebo.jpg', detailsUrl: 'candi prambanan.html' },
        { title: 'Goa Gong Pacitan', location: 'Pacitan, Jawa Timur', rating: 4.4, imgSrc: 'image/goa.png', detailsUrl: 'candi prambanan.html' },
        // { title: 'Cukang Taneuh', location: 'Pangandaran, Jawa Barat', rating: 4.6, imgSrc: 'image/cukang.png' },
        { title: 'Kuburan Batu Lemo', location: 'Tana Toraja, Sulawesi Selatan', rating: 4.6, imgSrc: 'image/kuburan.jpg', detailsUrl: 'kuburan batu.html' },
        { title: 'Nglirip', location: 'Lumajang, Jawa Timur', rating: 4.6, imgSrc: 'image/Nglirip.png', detailsUrl: 'candi prambanan.html' },
        // { title: 'Kepulauan Derawan', location: 'Berau, Kalimantan Timur', rating: 4.6, imgSrc: 'image/Derawan.png' },
        { title: 'Benang Kelambu', location: 'Lombok Tengah, Lombok', rating: 4.6, imgSrc: 'image/Benang Kelambu.png', detailsUrl: 'candi prambanan.html' },
        { title: 'Madakaripura', location: 'Probolinggo, Jawa Timur', rating: 4.6, imgSrc: 'image/Madakaripura.png', detailsUrl: 'candi prambanan.html' },
        { title: 'Nusa Penida', location: 'Klungkung, Bali', rating: 4.8, imgSrc: 'image/Nusa Penida.jpg', detailsUrl: 'nusa penida.html' },
        { title: 'Lorentz', location: 'Jayawijaya, Papua', rating: 4.4, imgSrc: 'image/lorentz.png', detailsUrl: 'candi prambanan.html' },
        // { title: 'Karawa', location: 'Pinrang, Sulawesi Selatan', rating: 4.6, imgSrc: 'image/karawa.png' },
        // { title: 'Bulusaraung', location: 'Pangkep, Sulawesi Selatan', rating: 4.8, imgSrc: 'image/bulusaraung.png' },
        { title: 'Kedung Kandang', location: 'Yogyakarta, Jawa Tengah', rating: 4.8, imgSrc: 'image/kedung.png', detailsUrl: 'candi prambanan.html' },
    ],

    pulau: [
        { title: 'Pulau Komodo', location: 'Pulau, NTT', rating: 4.4, imgSrc: 'image/komodo.jpg' },
        { title: 'Labuan Bajo', location: 'Manggarai Barat, NTT', rating: 4.7, imgSrc: 'image/labuan bajoo.jpg' },
        // { title: 'Kepulauan Derawan', location: 'Berau, Kalimantan Timur', rating: 4.6, imgSrc: 'image/Derawan.png' },
        { title: 'Nusa Penida', location: 'Klungkung, Bali', rating: 4.8, imgSrc: 'image/Nusa Penida.jpg' },
        { title: 'Piaynemo', location: 'Sorong, Papua Barat Daya', rating: 4.4, imgSrc: 'image/Piaynemo Raja Ampat.jpg' },
        { title: 'Pulau Samosir', location: 'Pulau Samosir, Sumatera Utara', rating: 4.6, imgSrc: 'image/samosir bg.jpg' },
    ],

    danau: [
        { title: 'Lorentz', location: 'Jayawijaya, Papua', rating: 4.4, imgSrc: 'image/lorentz.png' },
    ],
    pantai: [
        { title: 'Pink Beach', location: 'Manggarai Barat, NTT', rating: 4.6, imgSrc: 'image/pink beach bg.jpg', detailsUrl: 'pink beach.html'  },
    ],
    gunung: [
        // { title: 'Bulusaraung', location: 'Pangkep, Sulawesi Selatan', rating: 4.8, imgSrc: 'image/bulusaraung.png' },
        { title: 'King Kong Hill', location: 'Malang, Jawa Timur', rating: 4.7, imgSrc: 'image/bromo bg.png' },
        { title: 'Lembah Ollon', location: 'Tana Toraja, Sulawesi Selatan', rating: 4.8, imgSrc: 'image/ollon.png' },
        { title: 'Gunung Ijen', location: 'Banyuwangi, Jawa Timur', rating: 4.7, imgSrc: 'image/ijen.jpg' },
        { title: 'Waerebo Village', location: 'Kepulauan Manggarai, NTT', rating: 4.7, imgSrc: 'image/waerebo.jpg' },
    ],
    budaya: [
        { title: 'Kuburan Batu Lemo', location: 'Tana Toraja, Sulawesi Selatan', rating: 4.6, imgSrc: 'image/kuburan.jpg' },
        { title: 'Candi Borobudur', location: 'Magelang, Jawa Tengah', rating: 4.7, imgSrc: 'image/borobudur.jpg', detailsUrl: 'Candi borobudur.html' },
        { title: 'Candi Prambanan', location: 'Yogyakarta, Jawa Tengah', rating: 4.7, imgSrc: 'image/candi.jpg', detailsUrl: 'candi prambanan.html'  },
        { title: 'Pura Luhur Uluwatu', location: 'Pecatu, Bali', rating: 4.6, imgSrc: 'image/pura luhur.jpg' , detailsUrl: 'pura uluwatu.html'  },
        { title: 'Pura Agung Besakih', location: 'Karangasem, Bali', rating: 4.5, imgSrc: 'image/pura agung.jpg' },
    ],
    AirTerjun: [
        // { title: 'Karawa', location: 'Pinrang, Sulawesi Selatan', rating: 4.6, imgSrc: 'karawa.png' },
        { title: 'Benang Kelambu', location: 'Lombok Tengah, Lombok', rating: 4.6, imgSrc: 'image/Benang Kelambu.png' },
        { title: 'Madakaripura', location: 'Probolinggo, Jawa Timur', rating: 4.6, imgSrc: 'image/Madakaripura.png' },
        { title: 'Nglirip', location: 'Lumajang, Jawa Timur', rating: 4.6, imgSrc: 'image/Nglirip.png' },
        // { title: 'Cukang Taneuh', location: 'Pangandaran, Jawa Barat', rating: 4.6, imgSrc: 'image/cukang.png' },
        { title: 'Tumpak Sewu', location: 'Lumajang, Jawa Timur', rating: 4.6, imgSrc: 'image/sewu.jpg' },
        // { title: 'Sipiso-piso', location: 'Sumut, Sumatera Utara', rating: 4.6, imgSrc: 'image/sipiso.png' },
        { title: 'Banyumala', location: 'Buleleng, Bali', rating: 4.6, imgSrc: 'image/banyumala.jpg' },
        { title: 'Kedung Kandang', location: 'Yogyakarta, Jawa Tengah', rating: 4.8, imgSrc: 'image/kedung.png' },
    ],
};


let currentIndex = 0;
let hiddenCards = [];

function showCategory(category) {
    const cardsContainer = document.getElementById('cards');
    cardsContainer.innerHTML = '';

    const categoryCards = cardsData[category];
    categoryCards.forEach(card => {
        const cardElement = document.createElement('div');
        cardElement.className = 'card';
        cardElement.innerHTML = `
            <img src="${card.imgSrc}" alt="${card.title}">
            <div class="card-content">
                <div class="rating-badge">
                    <i class="fas fa-star"></i>
                    <span>${card.rating}</span>
                </div>
                <h3>${card.title}</h3>
                <p class="location">
                    <i class="fas fa-map-marker-alt location-icon"></i>
                    ${card.location}
                </p>
                <a href="${card.detailsUrl}">
                    <button class="details-btn">Details</button>
                </a>
            </div>
        `;
        cardsContainer.appendChild(cardElement);
    });

    // Mengatur tombol "Show More"
    currentIndex = 4;
    hiddenCards = Array.from(cardsContainer.querySelectorAll('.card'));
    hiddenCards.forEach((card, index) => {
        if (index >= 4) {
            card.classList.add('hidden');
        }
    });

    if (hiddenCards.length > 4) {
        document.getElementById('show-more-btn').style.display = 'block';
    } else {
        document.getElementById('show-more-btn').style.display = 'none';
    }

    document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('active'));
    document.querySelector(`.filter-btn[onclick="showCategory('${category}')"]`).classList.add('active');
}

document.addEventListener("DOMContentLoaded", () => {
    const showMoreBtn = document.getElementById("show-more-btn");

    showMoreBtn.addEventListener("click", () => {
        for (let i = 0; i < 4 && currentIndex < hiddenCards.length; i++, currentIndex++) {
            hiddenCards[currentIndex].classList.remove("hidden");
        }

        if (currentIndex >= hiddenCards.length) {
            showMoreBtn.style.display = 'none';
        }
    });

    // Tampilkan kategori default
    showCategory('popular');
});
</script>



<!---------------------------- SATU KLIK UNTUK ANDA ----------------------------------->
<script>
  function showDetail(element) {
    element.classList.add('active');
  }

  function hideDetail(element) {
    element.classList.remove('active');
  }

  document.querySelectorAll('.info-box').forEach(box => {
    box.addEventListener('click', function() {
      // Mengambil teks judul dari info-box yang diklik
      const title = this.querySelector('h4').innerText;
      
      // Memeriksa judul dan mengarahkan pengguna ke halaman yang sesuai
      switch(title) {
        case 'Tips & Tricks':
          window.location.href = 'tips-tricks.html';
          break;
        case 'Mengenal Indonesia':
          window.location.href = 'informasi umum.html';
          break;
        case 'Temukan tujuan Anda':
          window.location.href = 'temukan-tujuan.html';
          break;
        case 'Menuju Indonesia':
          window.location.href = 'Menuju Indonesia.html';
          break;
        default:
          break;
      }
    });
  });
</script>

    <h2>Welcome, <?php echo $_SESSION["username"]; ?>!</h2>
    <p>This is the welcome page after successful login.</p>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
