<?php
include "koneksi.php"; 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>My Journal</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />

    <!-- ICON -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
  </head>
  <body> 
    
    <style>
        /* Dark Mode Styles */
        body.dark-mode {
          background-color: #121212;
          color: white;
        }
        
    /* Light Mode Styles */
    body.light-mode {
      background-color: #f8f9fa;
      color: black;
    }
      </style>
               
    <!-- NAVBAR START -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
      <div class="container">
        <a class="navbar-brand fw-bold" href="#"><i>My Journal</i></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#article">Article</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#schedule">Schedule</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#profile">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Login.php" target="_blank">Login</a>
              </li>
            <li class="nav-item">
                <button id="dark" class="btn bg-dark" style="color: white">
                  <b>DARK</b> <!-- <i class="bi bi-moon-stars"></i> -->
                </button>
              </li>
             <li class="nav-item">
                <button id="light" class="btn bg-info" style="color: white">
                  <b>LIGHT</b> <!-- <i class="bi bi-brightness-high"></i> -->
                </button>
              </li>     
          </ul>
        </div>
      </div>
    </nav>
    <!-- NAVBAR END -->

    <!-- HERO START -->
    <section
      id="hero"
      class="text-center p-5 pt-5 bg-primary-subtle text-sm-start"
    >
      <div class="container">
        <div class="d-sm-flex flex-sm-row-reverse align-items-center">
          <img
            class="img-fluid"
            src="img/profil 1.jpg"
            alt=""
            width="400"
          />
          <div>
            <h1 class="fw-bold display-7">
                Hello Everyone, I'm RANI. This is a daily journal </h1>
                <h4 class="lead display-9">
                    Ini adalah Daily Journal milik [Siti Syaharani Khoiriyah] yang sekarang sedang menempuh pendidikan untuk mendapatkan gelar sarjana pada program studi Teknik Informatika di Universitas, Universitas Dian Nuswantoro,Dengan NIM A11.2023.15171
                </h4>
                <br>
            <h6>
              <span id="tanggal"></span>
              <span id="jam"></span>
            </h6>
          </div>
        </div>
      </div>
    </section>
    <!-- HERO END -->

    <!-- article begin -->
    <section id="article" class="text-center p-5">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">article</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
          <?php
          $sql = "SELECT * FROM article ORDER BY tanggal DESC";
          $hasil = $conn->query($sql); 

          while($row = $hasil->fetch_assoc()){
          ?>
            <div class="col">
              <div class="card h-100">
                <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title"><?= $row["judul"]?></h5>
                  <p class="card-text">
                    <?= $row["isi"]?>
                  </p>
                </div>
                <div class="card-footer">
                  <small class="text-body-secondary">
                    <?= $row["tanggal"]?>
                  </small>
                </div>
              </div>
            </div>
            <?php
          }
          ?> 
        </div>
      </div>
    </section>
    <!-- article end -->

    <!-- GALLERY START -->
    <section id="gallery" class="text-center p-5 bg-info-subtle text-sm-start">
        <div class="container"><br>
          <h3 class="fw-bold display-4 pb-3 text-center">Galeri</h3>
  
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card">
              <img src="img/Photo_7.jpg" class="card-img-top">
              <div class="card-body">
            </div>
            </div>
          </div>
  
        <div class="col">
          <div class="card">
              <img src="img/Photo_8.jpg" class="card-img-top">
              <div class="card-body">
            </div>
            </div>
            </div>
  
            <div class="col">
              <div class="card">
                  <img src="img/Photo_6.jpg" class="card-img-top">
                  <div class="card-body">
                </div>
                </div>
                </div>
  
          <div class="col">
            <div class="card">
              <img src="img/Photo_2.jpg" class="card-img-top">
              <div class="card-body">
              </div>
            </div>
          </div>
  
          <div class="col">
              <div class="card">
                <img src="img/Photo_1.jpg" class="card-img-top">
                <div class="card-body">
                </div>
              </div>
            </div>
  
          <div class="col">
            <div class="card">
              <img src="img/Photo_9.jpg" class="card-img-top">
              <div class="card-body">
              </div>
            </div>
          </div>
        </div>
        </div>
      </section>
    <!-- GALLERY END -->

    <!-- SCHADULE START  -->
    <section id="schedule" class="text-center p-5">
      <div class="container">
          <h1 class="fw-bold display-5 pb-5">Jadwal Kuliah & Kegiatan Mahasiswa</h1>
          <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
              <div class="col">
                  <div class="card h-100 border-primary">
                      <div class="card-header bg-primary text-light">
                          Senin
                      </div>
                      <ul class="list-group list-group-flush">
                          <li class="list-group-item border-primary-subtle">
                              <h5 class="card-title p-2">09.30-12.00</h5>
                              <p class="card-text">REKAYASA PERANGKAT LUNAK</p>
                              <p class="card-text">(H.5.6)</p>
                          </li>
                          <li class="list-group-item">
                              <h5 class="card-title p-2">12.30-14.10</h5>
                              <p class="card-text">BASIS DATA (TEORI)</p>
                              <p class="card-text">(H.4.3)</p>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="col">
                  <div class="card h-100 border-success">
                      <div class="card-header bg-success text-light">
                          Selasa
                      </div>
                      <ul class="list-group list-group-flush">
                          <li class="list-group-item border-success-subtle">
                              <h5 class="card-title p-2">08.40-10.20</h5>
                              <p class="card-text">Pendidikan Kewarganegaraan</p>
                              <p class="card-text">(E.3.1)</p>
                          </li>
                          <li class="list-group-item">
                              <h5 class="card-title p-2">12.30-15.00</h5>
                              <p class="card-text">Sistem Operasi</p>
                              <p class="card-text">(H.4.10)</p>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="col">
                  <div class="card h-100 border-danger">
                    <div class="card-header bg-danger text-light">
                      Rabu
                      </div>
                      <ul class="list-group list-group-flush">
                          <li class="list-group-item border-danger-subtle">
                              <h5 class="card-title p-2">09.30-12.00</h5>
                              <p class="card-text">Logika Informatika</p>
                              <p class="card-text">(H.4.5)</p>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="col">
                  <div class="card h-100 border-warning">
                    <div class="card-header bg-warning text-light">
                      Kamis
                      </div>
                      <ul class="list-group list-group-flush">
                          <li class="list-group-item border-warning-subtle">
                              <h5 class="card-title p-2">10.20-12.00</h5>
                              <p class="card-text">Basis Data (Praktek)</p>
                              <p class="card-text">(D.3.M)</p>
                          </li>
                          <li class="list-group-item">
                              <h5 class="card-title p-2">14.10-15.50</h5>
                              <p class="card-text">Pemrograman Berbasis Web</p>
                              <p class="card-text">(D.2.J)</p>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="col">
                  <div class="card h-100 border-info">
                    <div class="card-header bg-info text-light">
                      Jum'at
                      </div>
                      <ul class="list-group list-group-flush">
                          <li class="list-group-item border-info-subtle">
                              <h5 class="card-title p-2">12.30-15.00</h5>
                              <p class="card-text">Probabilitas Dan Statistik</p>
                              <p class="card-text">(H.4.8)</p>
                          </li>
                          <li class="list-group-item">
                              <h5 class="card-title p-2">15.30-14.10</h5>
                              <p class="card-text">Sistem Informasi</p>
                              <p class="card-text">(H.3.8)</p>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="col">
                  <div class="card h-100 border-secondary">
                    <div class="card-header bg-secondary text-light">
                      Sabtu
                      </div>
                      <ul class="list-group list-group-flush">
                          <li class="list-group-item">
                              <h5 class="card-title p-2">Rapat Ukm</h5>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="col">
                  <div class="card h-100 border-dark">
                    <div class="card-header bg-dark text-light">
                      Minggu
                      </div>
                      <ul class="list-group list-group-flush">
                          <li class="list-group-item">
                              <h5 class="card-title p-2">Tidak ada jadwal</h5>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </section>
    <!-- SCHADULE END -->

    <!-- PROFILE START -->
    <section id="profile"class="text-center p-5 bg-primary-subtle">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">Profil Mahasiswa</h1>
        <div class="d-lg-flex flex-md-row align-items-center justify-content-evenly">
          <img src="img/Photo Me.jpg" alt="" class= "rounded-circle border shadow" width="200" height="200">
        <div class="p-3">
          <h2 class="text-center text-lg-start">Siti Syaharani Khoiriyah</h2>
          <table class="text-start p-5">
            <tr>
              <td><b>NIM</b></td>
              <td class="p-2">:</td>
              <td>A11.2023.15171</td>
            </tr>
            <tr>
              <td><b>Program studi</b></td>
              <td class="p-2">:</td>
              <td>Teknik Informatika</td>
            </tr>
            <tr>
              <td><b>Email</b></td>
              <td class="p-2">:</td>
              <td>111202315171@mhs.dinus.ac.id</td>
            </tr>
            <tr>
              <td><b>Telepon</b></td>
              <td class="p-2">:</td>
              <td>+6288214885711</td>
            </tr>
            <tr>
              <td><b>Alamat</b></td>
              <td class="p-2">:</td>
              <td>Jl. Pusponjolo Dalam lX No.17, Semarang Tengah, Semarang</td>
            </tr>
          </table>
        </div>
        </div>
     </section>
    <!-- PROFILE END -->

    <!-- FOOTER START -->
    <footer class="text-center p-5">
      <div class="text-center mt-4">
        <a href="https://www.instagram.com/xnxrran/profilecard/?igsh=MTF5YjFyZnpxbXQ5eg=="
          ><i class="bi bi-instagram h2 p-2 text-dark" href=""></i
        ></a>
        <a href="https://twitter.com/udinusofficial"
          ><i class="bi bi-twitter-x h2 p-2 text-dark"></i
        ></a>
        <a href="https://wa.me/+6288214885711"
          ><i class="bi bi-whatsapp h2 p-2 text-dark"></i
        ></a>
      </div>
      <div class="text-center mt-1 mb-4">
        <h6>Siti Syaharani Khoiriyah © 2024</h6>
      </div>
    </footer>
    <!-- FOOTER END -->

    <!--Membuat tanggal dan waktu-->

    <script type="text/javascript">

        window.setTimeout("tampilWaktu()", 1000);
  
        function tampilWaktu() {
          var waktu = new Date();
          var bulan = waktu.getMonth() + 1;
  
          setTimeout("tampilWaktu()",1000);
          document.getElementById("tanggal").innerHTML = 
          waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear();
  
          document.getElementById("jam").innerHTML = 
          waktu.getHours() + ":" + waktu.getMinutes() + ":" + waktu.getSeconds();
        }
        </script> 

        <!--Membuat mode gelap terang berjalan-->

       <script type="text/javascript">
        document.getElementById("dark").onclick = function () {
     
         document.body.classList.remove("light-mode");
         document.body.classList.add("dark-mode");
         
         applyDarkModeStylesToSection("artikel");
         applyDarkModeStylesToSection("galeri");
         applyDarkModeStylesToSection("schedule");
         applyDarkModeStylesToSection("about");
         applyDarkModeStylesToSection("home"); 
       }
 
         document.getElementById("light").onclick = function () {
             
             document.body.classList.remove("dark-mode");
             document.body.classList.add("light-mode");
 
             revertStylesForSection("artikel");
             revertStylesForSection("galeri");
             revertStylesForSection("schedule");
             revertStylesForSection("about");
             revertStylesForSection("home"); 
         };
 
         function applyDarkModeStylesToSection(sectionId) {
             var section = document.getElementById(sectionId);
             if (section) {
                 section.classList.remove("bg-info-subtle"); 
                 section.style.backgroundColor = "#000"; 
                 section.style.color = "white";
 
                 
                 var childElements = section.querySelectorAll("*");
                 childElements.forEach(function (element) {
                     element.style.backgroundColor = "#000";
                     element.style.color = "white";
                 });
             }
         }
 
         function revertStylesForSection(sectionId) {
             var section = document.getElementById(sectionId);
             if (section) {
                 section.classList.add("bg-info-subtle"); 
                 section.style.backgroundColor = ""; 
                 section.style.color = ""; 
 
                 var childElements = section.querySelectorAll("*");
                 childElements.forEach(function (element) {
                     element.style.backgroundColor = "";
                     element.style.color = "";
                 });
             }
         }
 
               </script>
  

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>