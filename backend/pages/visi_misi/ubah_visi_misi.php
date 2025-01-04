  
  <!--//$query = mysqli_query($koneksi, "SELECT * FROM tb_visi_misi WHERE id_visi_misi='".$_GET['id']."'"); -->
  <!--// $row = mysqli_fetch_array($query); -->
  
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 include "config/koneksi.php";
// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM tb_visi_misi WHERE id_visi_misi='$id'");
 $d = mysqli_fetch_array($result);

?>
  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
        UBAH Visi & Misi
        </h1>
        <ol class="breadcrumb">
          <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
          <li class="active">UBAH visi_misi</li>
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
              <form role="form" method="POST" action="pages/visi_misi/ubah_visi_misi_proses.php">
                <div class="box-body">
                  <input type="hidden" name="id" value="<?php echo $d ['id_visi_misi']; ?>">

                  <div class="form-group">
                    <label>Visi</label>
                    <textarea name="visi" id="ckeditor" class="ckeditor"><?php echo $d ['visi'];?></textarea>
                 </div>

                 <div class="form-group">
                    <label>Misi</label>
                    <textarea name="misi" id="ckeditor" class="ckeditor"><?php echo $d ['misi'];?></textarea>
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