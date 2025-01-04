<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>About</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>About</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
<!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">
        <?php 
        $query = mysqli_query($koneksi, "SELECT * FROM tb_visi_misi ORDER BY id_visi_misi DESC");
        while ($row = mysqli_fetch_array($query)) {
        ?>
        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right">
            <h2>VISI</h2>
            <h3><?php echo $row['visi']; ?></h3>
          </div>
          <div class="col-lg-6" data-aos="fade-right">
            <h2>MISI</h2>
            <h3><?php echo $row['misi']; ?></h3>
          </div>
        </div>

      </div>
      <?php } ?>
    </section><!-- End About Us Section -->
    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">
        <?php 
        $query = mysqli_query($koneksi, "SELECT * FROM tb_tujuan ORDER BY id_tujuan DESC");
        while ($row = mysqli_fetch_array($query)) {
        ?>
        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right">
            <h2>Tujuan</h2>
            <h3><?php echo $row['isi']; ?></h3>
          </div>
          
        </div>

      </div>
      <?php } ?>
    </section><!-- End About Us Section -->