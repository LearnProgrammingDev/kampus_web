  
  <!--//$query = mysqli_query($koneksi, "SELECT * FROM tb_motivasi WHERE id_motivasi='".$_GET['id']."'"); -->
  <!--// $row = mysqli_fetch_array($query); -->
  
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 include "config/koneksi.php";
// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM tb_motivasi WHERE id_motivasi='$id'");
 $d = mysqli_fetch_array($result);

?>
  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
        UBAH motivasi
        </h1>
        <ol class="breadcrumb">
          <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
          <li class="active">UBAH motivasi</li>
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
              <form role="form" method="post" action="pages/motivasi/ubah_motivasi_proses.php" enctype="multipart/form-data">
                <div class="box-body">
                  <input type="hidden" name="id" value="<?php echo $d ['id_motivasi']; ?>">
                  <div class="form-group">
                    <label>nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="nama" value="<?php echo $d ['nama']; ?>" >
                  </div>
                  <div class="form-group">
                    <label>isi</label>
                    <input type="text" name="isi" class="form-control" placeholder="isi" value="<?php echo $d ['isi']; ?>" >
                  </div>
                  
                  <div class="form-group">
                    <label>profesi</label>
                        <input type="text" name="profesi" class="form-control" placeholder="profesi" value="<?php echo $d ['profesi']?>" >  
                    </select>
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