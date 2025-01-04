  
  <!--//$query = mysqli_query($koneksi, "SELECT * FROM tb_dosen WHERE id_dosen='".$_GET['id']."'"); -->
  <!--// $row = mysqli_fetch_array($query); -->
  
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 include "config/koneksi.php";
// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM tb_berita WHERE id_berita='$id'");
 $d = mysqli_fetch_array($result);

?>
  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
        UBAH berita
        </h1>
        <ol class="breadcrumb">
          <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
          <li class="active">UBAH berita</li>
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
              <form role="form" method="post" action="pages/berita/ubah_berita_proses.php" enctype="multipart/form-data">
                <div class="box-body">
                  <input type="hidden" name="id" value="<?php echo $d ['id_berita']; ?>">
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="nama" value="<?php echo $d ['nama']; ?>" >
                  </div>
                  <div class="form-group">
                    <label>Judul</label>
                    <input type="text" name="judul" class="form-control" placeholder="judul" value="<?php echo $d ['judul']; ?>" >
                  </div>
                 
                  <div class="form-group">
                    <label>foto</label>
                    <br>
                    <img src="pages/berita/img/<?= $d['foto'] ?>" alt="tes" style="width: 10em;">
                    <br>
                    <input type="file" name="foto" class="form-control" placeholder="foto" value="<?php echo $d ['foto']; ?>" >
                  </div>
                   <div class="form-group">
                        <label>Isi</label>
                        <textarea name="isi" id="ckeditor" class="ckeditor"><?php echo $d ['isi'];?></textarea>
                     </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary" name="simpan" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
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