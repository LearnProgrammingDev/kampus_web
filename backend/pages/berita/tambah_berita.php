
 <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
       Tambah Berita
        </h1>
        <ol class="breadcrumb">
          <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">/ Tambah Berita</li>
        </ol>
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form" method="POST" action="pages/berita/tambah_berita_proses.php" enctype="multipart/form-data">
                <div class="box-body">
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="nama!" required>
                  </div>
                  <div class="form-group">
                    <label>Judul</label>
                    <input type="text" name="judul" class="form-control" placeholder="Judul!" required>
                  </div>
                  <div class="form-group">
                    <label>Foto</label>
                    <input type="file" name="foto" class="form-control" placeholder="foto" >
                  </div>


                  <div class="form-group">
                       <label>Kategori</label>
                <select name="tkategori" class="form-control"> 
                <?php
                    include "config/koneksi.php";
                    $query = mysqli_query($koneksi, "SELECT * FROM tb_kategori ORDER BY id_kategori DESC");

                    while ($kategori = mysqli_fetch_array($query)) {
                
                ?>
                <option value="<?= $kategori['id_kategori']; ?>"><?= $kategori['nama_kategori']; ?> </option>
                <?php } ?>

</select>
                  </div>
                  

                   <div class="form-group">
                  <label>Isi</label>
                  <textarea name="isi" id="ckeditor" class="ckeditor"></textarea>
                  </div>
                  
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" name="simpan" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
                </div>
              </form>
            </div>
            <!-- /.box -->
          </div>
        </div>
      </section>
      <!-- /.content -->
    </div>
  <!-- /.content-wrapper -->