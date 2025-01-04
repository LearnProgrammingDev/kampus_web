<!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">

        <div class="row content">
        <?php 
        $query = mysqli_query($koneksi, "SELECT * FROM tb_agenda ORDER BY id_agenda DESC");
        while ($row = mysqli_fetch_array($query)) {
        ?>
          <div class="col-lg-6" data-aos="fade-right">
            <h2>Struktur Organisasi</h2>
            <!-- <h3><?php //echo $row['isi']; ?></h3> -->
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            <p>
             <h2><?php echo $row['deskripsi']; ?></h2>
            </p>
            
          </div>
          <?php } ?>
        </div>

      </div>
    </section><!-- End About Us Section -->