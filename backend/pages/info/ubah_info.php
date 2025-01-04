  
  <!--//$query = mysqli_query($koneksi, "SELECT * FROM tb_info WHERE id_info='".$_GET['id']."'"); -->
  <!--// $row = mysqli_fetch_array($query); -->
  
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 include "config/koneksi.php";
// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM tb_info WHERE id_info='$id'");
 $d = mysqli_fetch_array($result);

?>
  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
        UBAH info
        </h1>
        <ol class="breadcrumb">
          <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
          <li class="active">UBAH info</li>
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
              <form role="form" method="post" action="pages/info/ubah_info_proses.php" enctype="multipart/form-data">
                <div class="box-body">
                  <input type="hidden" name="id" value="<?php echo $d ['id_info']; ?>">
                  <div class="form-group">
                    <label>alamat</label>
                    <textarea name="alamat" class="form-control" placeholder="Masukan alamat disisni!" value="<?php echo $d ['alamat']; ?>"></textarea>
                    
                  </div>
                  <div class="form-group">
                    <label>email</label>
                    <input type="text" name="email" class="form-control" placeholder="email" value="<?php echo $d ['email']; ?>" >
                  </div>
                  <div class="form-group">
                    <label>No Hp</label>
                    <input type="text" name="no_hp" class="form-control" placeholder="no_hp" value="<?php echo $d ['no_hp']; ?>" >
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