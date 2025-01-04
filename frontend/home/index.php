 <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(asset/frontend/img/slide/coba-1.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Welcome to <span>Kampus</span></h2>
              <p>Bagi kami kreativitas merupakan gerbang masa depan.
kreativitas akan mendorong inovasi.
Itulah yang kami lakukan.</p>
              <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(asset/frontend/img/slide/coba-2.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Guru Bekualitas Tinggi</h2>
              <p>Guru merupakan faktor penting dalam proses belajar-mengajar.
Itulah kenapa kami mendatangkan guru-guru
terbaik dari berbagai penjuru.
</p>
              <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(asset/frontend/img/slide/coba-3.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Proses Belajar Interatif</h2>
              <p>Kami membuat proses belajar mengajar menjadi lebih interatif.
dengan demikian siswa lebih menyukai
proses belajar.</p>
              <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
            </div>
          </div>
        </div>
<!-- <a href="https://api.whatsapp.com/send?phone=628123456789&text=Hallo%20Agan%20Baik"><img src="tombol.png"></a> -->

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right">
            <h2>Welcome</h2>
            <h3>Kami Menyambut baik terbitnya , dengan harapan dipublikasinya website ini sekolah berharap : Peningkatan layanan pendidikan kepada siswa, orangtua, dan masyarakat pada umumnya semakin meningkat.</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">
        
        <div class="row">
          <div class="section-title" data-aos="fade-up">
          <h2>Artikel <strong>Terbaru</strong></h2>
          <p></p>
        </div>
        <?php 
        $query = mysqli_query($koneksi, "SELECT * FROM tb_berita ORDER BY id_berita DESC");
        while ($row = mysqli_fetch_array($query)) {
        ?>
          <div class="col-lg-4 mt-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              
              <h4><a href="index.php?page=detail_berita&slug=<?php echo $row['slug']; ?>"><?php echo $row ['judul'];?></a></h4>
              <p><?php echo substr($row ['isi'], 0, 200); ?></p>
            </div>
          </div>
          
     <?php } ?>
          </div> 
         

        </div>

      </div>
    </section><!-- End Services Section -->
    

  </main><!-- End #main -->