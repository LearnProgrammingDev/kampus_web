      <?php

       //---------------------------------------------- Admin
        if(isset($_GET['page'])){
        $page = $_GET['page'];
      switch ($page) {
      // Beranda
        case 'data_admin':
          include 'pages/admin/data_admin.php';
          break;
        case 'tambah_admin':
          include 'pages/admin/tambah_admin.php';
          break;
        case 'ubah_admin';
          include 'pages/admin/ubah_admin.php';
          break;
        }
      } else {
        include 'pages/beranda.php';
      }

      //----------------------------------// MAHASISWA
      if(isset($_GET['page'])){
        $page = $_GET['page'];
      switch ($page) {
      // Beranda
        case 'data_mahasiswa':
          include 'pages/mahasiswa/data_mahasiswa.php';
        break;
        case 'tambah_mahasiswa':
          include 'pages/mahasiswa/tambah_mahasiswa.php';
        break;
        case 'ubah_mahasiswa';
          include 'pages/mahasiswa/ubah_mahasiswa.php';
        break;
        }
      } 

        //----------------------------------// DOSEN
      if(isset($_GET['page'])){
        $page = $_GET['page'];
      switch ($page) {
      // Beranda
        case 'data_dosen':
          include 'pages/dosen/data_dosen.php';
        break;
        case 'tambah_dosen':
          include 'pages/dosen/tambah_dosen.php';
        break;
        case 'ubah_dosen';
          include 'pages/dosen/ubah_dosen.php';
        break;
        }
      }

      //  ---------------------------------------Motivasi
      if(isset($_GET['page'])){
        $page = $_GET['page'];
      switch ($page) {
      // Beranda
        case 'data_motivasi':
          include 'pages/motivasi/data_motivasi.php';
          break;
        case 'tambah_motivasi':
          include 'pages/motivasi/tambah_motivasi.php';
          break;
        case 'ubah_motivasi';
          include 'pages/motivasi/ubah_motivasi.php';
          break;
        }
      }
        //----------------------------------// Galery
      if(isset($_GET['page'])){
        $page = $_GET['page'];
      switch ($page) {
      // Beranda
        case 'data_galery':
          include 'pages/galery/data_galery.php';
          break;
        case 'tambah_galery':
          include 'pages/galery/tambah_galery.php';
          break;
        case 'ubah_galery';
          include 'pages/galery/ubah_galery.php';
          break;
        }
      }
        
      // -----------------------------------------berita
      if(isset($_GET['page'])){
        $page = $_GET['page'];
      switch ($page) {
      // Beranda
        case 'data_berita':
          include 'pages/berita/data_berita.php';
          break;
        case 'tambah_berita':
          include 'pages/berita/tambah_berita.php';
          break;
        case 'ubah_berita';
          include 'pages/berita/ubah_berita.php';
          break;
        }
      }

      //  -------------------------------------------pengumuman
      if(isset($_GET['page'])){
        $page = $_GET['page'];
      switch ($page) {
      // Beranda  
        case 'data_pengumuman':
          include 'pages/pengumuman/data_pengumuman.php';
          break;
        case 'tambah_pengumuman':
          include 'pages/pengumuman/tambah_pengumuman.php';
          break;
        case 'ubah_pengumuman';
          include 'pages/pengumuman/ubah_pengumuman.php';
          break;
        }
      }
      

     

      //--------------------------------------------- Kategori
      if(isset($_GET['page'])){
        $page = $_GET['page'];
        switch ($page) {
          case 'data_kategori':
            include 'pages/kategori/data_kategori.php';
          break;
          case 'tambah_kategori':
            include 'pages/kategori/tambah_kategori.php';
          break;
          
        }
      }

       //------------------------------------------------------visi & misi
      if(isset($_GET['page'])){
        $page = $_GET['page'];
      switch ($page) {
      // Beranda
        case 'data_visi_misi':
          include 'pages/visi_misi/data_visi_misi.php';
          break;
        case 'ubah_visi_misi';
          include 'pages/visi_misi/ubah_visi_misi.php';
          break;
        }
      }

      // -----------------------------------------------------------testimoni
      if(isset($_GET['page'])){
        $page = $_GET['page'];
      switch ($page) {
      // Beranda
        case 'data_testimoni':
          include 'pages/testimoni/data_testimoni.php';
          break;
        case 'tambah_testimoni':
          include 'pages/testimoni/tambah_testimoni.php';
          break;
        case 'ubah_testimoni';
          include 'pages/testimoni/ubah_testimoni.php';
          break;
        }
      }


      //----------------------------------------------------- sejarah
      if(isset($_GET['page'])){
        $page = $_GET['page'];
      switch ($page) {
      // Beranda
        case 'data_sejarah':
          include 'pages/sejarah/data_sejarah.php';
          break;
        case 'tambah_sejarah':
          include 'pages/sejarah/tambah_sejarah.php';
          break;
        case 'ubah_sejarah';
          include 'pages/sejarah/ubah_sejarah.php';
          break;
        }
      }
      
      // ----------------------------------------------------------info
      if(isset($_GET['page'])){
        $page = $_GET['page'];
      switch ($page) {
      // Beranda
        case 'data_info':
          include 'pages/info/data_info.php';
          break;
        case 'ubah_info';
          include 'pages/info/ubah_info.php';
          break;
        }
      }
      // -----------------------------------------------------tujuan
      if(isset($_GET['page'])){
        $page = $_GET['page'];
      switch ($page) {
      // Beranda
        case 'data_tujuan':
          include 'pages/tujuan/data_tujuan.php';
          break;
        case 'tambah_tujuan':
          include 'pages/tujuan/tambah_tujuan.php';
          break;
        case 'ubah_tujuan';
          include 'pages/tujuan/ubah_tujuan.php';
          break;
        }
      }
//  else {
//           include "pages/beranda.php";
//         }
?>