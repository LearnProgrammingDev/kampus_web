


<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Berita</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Berita</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">
          <?php 
            $query = mysqli_query($koneksi, "SELECT * FROM tb_berita ORDER BY id_berita DESC");
            while($row = mysqli_fetch_array($query)) {
          ?>
          
            <article class="entry">

              <div class="entry-img">
                <img src="backend/pages/berita/img/<?php echo $row['foto']; ?>" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href=""><?php echo $row['judul']; ?></a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="detail_author.php"><?php echo $row['nama']; ?></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href=""><time datetime="2020-01-01"><?php echo $row['tgl_isi'] ?></time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="">12 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                
                  <?php echo substr($row['isi'], 0, 200); ?>
                <div class="read-more">
                  <a href="index.php?page=detail_berita&slug=<?php echo $row['slug']; ?>">Lihat Lebih Lanjut</a>
                </div>
              </div>
        
            </article><!-- End blog entry -->
 <?php } ?> 
            


          </div><!-- End blog entries list -->
          
          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <h3 class="sidebar-title">Kategori</h3>
              <div class="sidebar-item categories">


                <ul>
                   <?php
              
              // $query = mysqli_query($koneksi, "SELECT tb_berita.*, tb_kategori.nama_kategori FROM tb_berita INNER JOIN tb_kategori ON tb_kategori.id_kategori = tb_berita.kategori ORDER BY id_berita");
              $query = mysqli_query($koneksi, "SELECT * FROM tb_kategori");
              while ($kategori = mysqli_fetch_array($query)) {
              
              
              ?>
                  <li><a href="index.php?page=list_kategori&id=<?= $kategori['id_kategori']; ?>"><?= $kategori['nama_kategori']; ?> <span>(25)</span></a></li>
                <?php } ?>
                </ul>

               
              </div><!-- End sidebar categories-->

              <h3 class="sidebar-title">Populer Berita</h3>
              <div class="sidebar-item recent-posts">
                <div class="post-item clearfix">
                  <img src="../asset/frontend/img/blog/blog-recent-1.jpg" alt="">
                  <h4><a href="blog-single.php"></a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="../asset/frontend/img/blog/blog-recent-2.jpg" alt="">
                  <h4><a href="blog-single.php">Quidem autem et impedit</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="../asset/frontend/img/blog/blog-recent-3.jpg" alt="">
                  <h4><a href="blog-single.php">Id quia et et ut maxime similique occaecati ut</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="../asset/frontend/img/blog/blog-recent-4.jpg" alt="">
                  <h4><a href="blog-single.php">Laborum corporis quo dara net para</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="../asset/frontend/img/blog/blog-recent-5.jpg" alt="">
                  <h4><a href="blog-single.php">Et dolores corrupti quae illo quod dolor</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

              </div><!-- End sidebar recent posts-->

              <h3 class="sidebar-title">Populer Tags</h3>
              <div class="sidebar-item tags">
                <ul>
                  <li><a href="#">App</a></li>
                  <li><a href="#">IT</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Web</a></li>
                  <li><a href="#">Design</a></li>
                  <li><a href="#">Office</a></li>
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Studio</a></li>
                  <li><a href="#">Smart</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div><!-- End sidebar tags-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->