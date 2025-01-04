<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Testimonials</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Testimonials</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
<!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="row">
          <?php
          $query = mysqli_query($koneksi, "SELECT * FROM tb_testimoni ORDER BY id_testimoni DESC");
          while ($d = mysqli_fetch_array($query)) {
              ?>
              
          <div class="col-lg-6" data-aos="fade-up">
            <div class="testimonial-item">
              <img src="../asset/frontend/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3><?php echo $d['nama']; ?></h3>
              <h4>Ceo &amp; Founder</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                <?php echo $d['isi']; ?>
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial-item mt-4 mt-lg-0">
              <img src="../asset/frontend/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>no nama</h3>
              <h4>Designer</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

         
       <?php } ?>
        </div>

      </div>
    </section><!-- End Testimonials Section -->
      </main><!-- End #main -->