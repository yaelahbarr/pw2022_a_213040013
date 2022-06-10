<?php
  // require_once 'functions.php';
  // if (!isset($_SESSION["role"])) { session_start();
  //     echo " <script>
  //         alert('Anda tidak mempunyai akses');
  //         document.location.href='login.php'; </script>";
  //     exit;
  // }
  require 'functions.php';
  $tenmed = query("SELECT * FROM tenaga_medis");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="op.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>Sombrilla.Corp</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img
            src="../img/kisspng-umbrella-clip-art-5b3008645136e8.6524105115298745323327.png"
            width="40px"
          />
          Sombrilla.Corp</a
        >
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
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#doctors">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
          <form class="d-flex">
            <a href="login.php" class="btn btn-outline-primary" type="submit">
              Log In
            </a>
            <a href="signup.php" class="btn btn-outline-primary" type="submit">
              Sign Up
            </a>
          </form>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Banner -->
    <section class="banner">
      <h2>
        Ayo daftar sekarang, lindungi diri dan sekitar dengan berpartisipasi
        <br />dalam program Vaksinasi COVID-19 <br />
      </h2>
    </section>
    <!-- Akhir Banner -->

    <!-- About -->
    <div id="about">
      <div class="container-fluid">
        <div class="container-lg">
          <h1 style="color: lightseagreen">Apa itu Sombrilla Corporation?</h1>
          <p>
            Sombrilla Corporation adalah layanan masyarakat yang dikembangkan
            untuk membantu dalam menghentikan penyebaran virus Covid-19
          </p>
        </div>
      </div>
    </div>
    <!-- Akhir About -->

    <!-- Doctors -->
    <div id="doctors">
      <div class="container-fluid">
        <div class="container-lg">
          <h1 style="color: lightseagreen">OUR DOCTORS</h1>
          <form action="" method="POST">
            <div class="row">
              <div class="live-search col-4">
                <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Search...">
              </div>
              <div class="col-1">
                <button type="submit" name="cari" id="tombol-cari" class="btn btn-primary"><i class="bi bi-search"></i></button>
              </div>
            </div>
          </form>
          <div class="container" id="container">
            <div class="row mt-5">
              <?php
                foreach ($tenmed as $row){
              ?>
              <div class="col-sm-3">
                <div class="card" style="width: 18rem">
                  <img
                    src="../img/doctor.jpg"
                    class="card-img-top"
                  />
                  <div class="card-body">
                    <p class="card-text"><?php echo $row['nama_tenmed'] ?></p>
                  </div>
                </div>
              </div>
              <?php
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Doctors -->

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <h3 class="mb-5" style="color: lightseagreen">CONTACT INFO</h3>
        <div class="box">
          <div class="row">
            <div class="col-4">
              <h4>Address</h4>
              <p>Melong, South Cimahi, Cimahi City, West Java 40534</p>
            </div>
            <div class="col-4">
              <h4>Email</h4>
              <p>sombrillacorp@gmail.com</p>
              <p>corporationsombrilla@gmail.com</p>
            </div>
            <div class="col-4">
              <h4>Phone</h4>
              <p>+62 818 27 2003</p>
            </div>
          </div>
        </div>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.1823369523496!2d107.56110646868594!3d-6.922922617913994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e5fa67fa9061%3A0xcb21c3dfe400cd01!2sGg.%20Pada%20Asih%2C%20Melong%2C%20Kec.%20Cimahi%20Sel.%2C%20Kota%20Cimahi%2C%20Jawa%20Barat%2040534!5e0!3m2!1sen!2sid!4v1640169418897!5m2!1sen!2sid"
          width="100%"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
        ></iframe>
      </div>
    </section>
    <!-- Akhir Contact -->

    <!-- Footer -->
    <footer>
      <div class="container">
        <small
          >Copyright &copy; SOMBRILLA CORPORATION All Rights Reserved.</small
        >
      </div>
    </footer>
    <!-- Akhir Footer -->
  </body>
</html>
<script type="text/javascript">
    // ambil elemen2 yang dibutuhkan
    var keyword = document.getElementById('keyword');
    var tombolCari = document.getElementById('tombol-cari');
    var container = document.getElementById('container');

    // tambahkan event ketika keyword ditulis
    keyword.addEventListener('keyup', function() {

        // buat object ajax
        var xhr = new XMLHttpRequest();

        // cek kesiapan ajax
        xhr.onreadystatechange = function() {
            if( xhr.readyState == 4 && xhr.status == 200 ) {
                container.innerHTML = xhr.responseText;
            }
        }

        // eksekusi ajax
        xhr.open('GET', 'ajax/index.php?keyword=' + keyword.value, true);
        xhr.send();

    });
</script>