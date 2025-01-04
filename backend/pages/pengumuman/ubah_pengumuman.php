  
  <!--//$query = mysqli_query($koneksi, "SELECT * FROM tb_dosen WHERE id_dosen='".$_GET['id']."'"); -->
  <!--// $row = mysqli_fetch_array($query); -->
  
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 include "config/koneksi.php";
// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM tb_pengumuman WHERE id_pengumuman='$id'");
 $d = mysqli_fetch_array($result);

?>
  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
        UBAH pengumuman
        </h1>
        <ol class="breadcrumb">
          <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
          <li class="active">UBAH pengumuman</li>
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
              <form role="form" method="post" action="pages/pengumuman/ubah_pengumuman_proses.php" enctype="multipart/form-data">
                <div class="box-body">
                  <input type="hidden" name="id" value="<?php echo $d ['id_pengumuman']; ?>">
                  <div class="form-group">
                    <label>Judul</label>
                    <input type="text" name="judul" class="form-control" placeholder="judul" value="<?php echo $d ['judul']; ?>" >
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