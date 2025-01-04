<!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Mahasiswa</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Mahasiswa</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
<!-- ======= Our Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Siswa <strong>Kami</strong></h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <?php
          $query = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa ORDER BY id_mahasiswa DESC");
          while($row = mysqli_fetch_array($query)) {
          ?>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <a href="">
                <img src="backend/pages/mahasiswa/img/<?php echo $row['foto']; ?>" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4><?php echo $row['nama']; ?></h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <?php } ?>

          

         

        </div>

      </div>
    </section><!-- End Our Team Section -->