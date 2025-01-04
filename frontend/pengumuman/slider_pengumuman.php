

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <div class="carousel-inner" role="listbox">
        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM tb_pengumuman ORDER BY id_pengumuman");
        while($d = mysqli_fetch_array($query)) {
        ?>
        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2><?php echo $d ['judul'];?></span></h2>
              <p><?php echo $d ['isi'];?></p>
              <div class="text-center"><a href="index.php?page=slider_pengumuman<?php echo $d ['id_pengumuman'];?>" class="btn-get-started">Read More</a></div>
            </div>
          </div>
        </div>
          <?php } ?>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel<?php echo $d ['id'];?>" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section><!-- End Hero -->