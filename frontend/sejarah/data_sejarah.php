<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Sejarah</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Sejarah</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
<!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">

        <div class="row content">
        <?php 
        $query = mysqli_query($koneksi, "SELECT * FROM tb_sejarah ORDER BY id_sejarah DESC");
        while ($d = mysqli_fetch_array($query)) {
        ?>
          <div class="col-lg-6" data-aos="fade-right">
            <h2>Sejarah</h2>
            <!-- <h3><?php //echo $row['isi']; ?></h3> -->
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            <p>
              <?php echo substr($d['isi'], 0, 700); ?>
            </p>
             <div class="entry-content">
            <div class="read-more">
                  <a href="detail&sejarah">Lihat Lebih Lanjut</a>
                </div>
             </div>
          </div>
          <?php } ?>
        </div>

      </div>
    </section><!-- End About Us Section -->