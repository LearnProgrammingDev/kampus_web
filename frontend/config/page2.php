<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {

        // ----------Berita
        case 'list_berita':
           include 'frontend/berita/list_berita.php';
        break;

        // ----------kategori
        case 'list_kategori':
           include 'frontend/berita/list_kategori.php';
        break;

        // -----------Home
        case 'index':
            include 'frontend/home/index.php';
        break;

        // ----------Struktur Organisasi
        case 'data_struktur_organisasi':
           include 'frontend/struktur_organisasi/data_struktur_organisasi.php';
        break;

        // ----------Sejarah
        case 'detail_sejarah':
            include 'frontend/sejarah/detail_sejarah.php';
            break;
        case 'data_sejarah':
            include 'frontend/sejarah/data_sejarah.php';
        break;

        case 'sidebar_berita':
            include 'frontend/berita/sidebar_berita.php';
        break;

        case 'detail_berita':
            include 'frontend/berita/detail_berita.php';
        break;

        // ----------Info & Contact
        case 'data_info':
            include 'frontend/info/data_info.php';
        break;

        // ----------Pengumuman
        case 'slider_pengumuman':
            include 'frontend/pengumuman/slider_pengumuman.php';
        break;

        // ----------Dosen
        case 'bio_dosen';
           include 'frontend/dosen/bio_dosen.php';
        break;

        case 'list_dosen':
            include 'frontend/testimoni/list_testimoni.php';
         break;

            //----------Testimoni
        case 'list_testimoni':
            include 'frontend/testimoni/list_testimoni.php';
        break;

            // ----------Galery
        case 'list_galery':
            include 'frontend/galery/list_galery.php';
        break;
        
            // -----------VISI & MISI
        case 'data_visi_misi':
            include 'frontend/visi_misi/data_visi_misi.php';
        break;

        // -----------------MOTIVASI
        case 'data_motivasi':
            include 'frontend/motivasi/data_motivasi.php';
            break;
    }   
    
} else {
    include 'frontend/home/index.php';
}