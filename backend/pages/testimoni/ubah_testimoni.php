  
  <!--//$query = mysqli_query($koneksi, "SELECT * FROM tb_testimoni WHERE id_testimoni='".$_GET['id']."'"); -->
  <!--// $row = mysqli_fetch_array($query); -->
  
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 include "config/koneksi.php";
// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM tb_testimoni WHERE id_testimoni='$id'");
 $d = mysqli_fetch_array($result);

?>
  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
        UBAH testimoni
        </h1>
        <ol class="breadcrumb">
          <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
          <li class="active">UBAH testimoni</li>
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
              <form role="form" method="post" action="pages/testimoni/ubah_testimoni_proses.php" enctype="multipart/form-data">
                <div class="box-body">
                  <input type="hidden" name="id" value="<?php echo $d ['id_testimoni']; ?>">
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?php echo $d ['nama'];?>">
                  </div>
                  <!-- <div class="form-group">
                    <label>foto</label>
                    <br>
                    <img src="pages/testimoni/img/<?php //$d//['foto'] ?>" alt="tes" style="width: 10em;">
                    <br>
                    <input type="file" name="foto" value="<?php //echo $d ['foto']; ?>">
                  </div> -->
                  <div class="form-group">
                    <label>isi</label>
                    <textarea name="isi" id="ckeditor" class="ckeditor" required><?php echo $d ['isi']; ?></textarea>
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