<?php include 'backend/config/koneksi.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Web Kampus | Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="asset/frontend/img/rz.ico" rel="icon">
  <link href="asset/frontend/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="asset/frontend/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="asset/frontend/vendor/aos/aos.css" rel="stylesheet">
  <link href="asset/frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="asset/frontend/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="asset/frontend/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="asset/frontend/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="asset/frontend/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="asset/frontend/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="asset/frontend/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Company - v4.3.0
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php"><span>Kam</span>pus</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="asset/frontend/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="home" class="active">Home</a></li>

          <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="visi&misi">Visi, Misi & Tujuan</a></li>
              <li><a href="struktur&organisasi">Struktur Organisasi</a></li>
              <li><a href="index.php?page=bio_dosen">DOSEN</a></li>
              <li><a href="testimoni">Testimonials</a></li>
              <li><a href="sejarah">Sejarah</a></li>
              <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> -->
            </ul>
          </li>

          <!-- <li><a href="pages/services.php">Services</a></li> -->
          <li><a href="galery">Galery</a></li>
          <li><a href="motivasi ">Motivasi</a></li>
          <li><a href="index.php?page=list_berita">Berita</a></li>
          <li><a href="info">Contact</a></li>
          <li><a href="backend/login.php" target="blank">Login</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex">
        <a href="https://twitter.com/smkn4pyk" class="twitter"><i class="bu bi-twitter"></i></a>
        <a href="https://www.facebook.com/smkn4pyk" class="facebook"><i class="bu bi-facebook"></i></a>
        <a href="https://www.instagram.com/smkn4pyk/" class="instagram"><i class="bu bi-instagram"></i></a>
      </div>

    </div>
  </header><!-- End Header -->


  

  <?php include "frontend/config/page2.php";?>

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Hubungi Kami</h3>
            <?php 
    $query = mysqli_query($koneksi, "SELECT * FROM tb_info ORDER BY id_info DESC");
    while ($row = mysqli_fetch_array($query)) {
    ?>
            <p>
              <strong>Alamat:</strong> <?php echo $row['alamat']; ?> <br><br>
              <strong>Phone:</strong> <?php echo $row['no_hp'];?><br>
              <strong>Email:</strong> <?php echo $row['email']; ?><br>
            </p>
            <?php } ?>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Menu Utama</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="home">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="home">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="galery">Galery</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="info">Contact</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="berita">Berita</a></li>
            </ul>       </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Akademik</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php?page=bio_dosen">Dosen</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="mahasiswa">Mahasiswa</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="agenda">Agenda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="pengumuman">Pengumuman</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="download">Download</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Sosial Media</h4>
            <p>Follow Me In</p>
            <form action="https://www.youtube.com/" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Kampus</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/company-free-html-bootstrap-template/ -->
          Designed by <a href="">Rz</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/altreish.maulana" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="asset/frontend/vendor/aos/aos.js"></script>
  <script src="asset/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="asset/frontend/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="asset/frontend/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="asset/frontend/vendor/php-email-form/validate.js"></script>
  <script src="asset/frontend/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="asset/frontend/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="asset/frontend/js/main.js"></script>

</body>

</html>