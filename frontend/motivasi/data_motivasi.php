<!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Motivasi</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Motivasi</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

<!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Motivasi</h2>
        </div>
         <?php
          $query = mysqli_query($koneksi, "SELECT * FROM tb_motivasi ORDER BY id_motivasi ASC");
          while ($d = mysqli_fetch_array($query)) {
          ?>
        <div class="faq-list">
          
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"><em>- oleh <strong><?php echo $d ['nama']; ?> (1667-1745) - <?php echo $d ['profesi']; ?></strong></em><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                 <?php echo $d ['isi']; ?>
                </p>
              </div>
            </li>

            

           

          </ul>
        </div>
<?php } ?>
      </div>
    </section><!-- End Frequently Asked Questions Section -->