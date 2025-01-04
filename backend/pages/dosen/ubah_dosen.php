<?php

  include "config/koneksi.php";
    $id = $_GET['id'];

$result = mysqli_query($koneksi, "SELECT * FROM tb_dosen WHERE id_dosen='$id'");
 $d = mysqli_fetch_array($result);

?>
  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
        Edit Data Dosen
        </h1>
        <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="dosen">Dosen</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit Dosen</li>
  </ol>
</nav>
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
              <form role="form" method="post" action="pages/dosen/ubah_dosen_proses.php" enctype="multipart/form-data">
                <div class="box-body">
                  <input type="hidden" name="id" value="<?php echo $d ['id_dosen']; ?>">
                  <div class="form-group">
                    <label>Nim</label>
                    <input type="text" name="nrp" class="form-control" placeholder="Nim" value="<?php echo $d ['nrp']; ?>" required>
                  </div>
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo $d ['nama']; ?>" required>
                  </div>
                  <div class="form-group">
                    <label>foto</label>
                    <br>
                    <img src="pages/dosen/img/<?= $d['gambar'] ?>" alt="tes" style="width: 10em;">
                    <br>
                    <input type="file" name="gambar" class="form-control" placeholder="foto" value="<?php echo $d ['gambar']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <!-- <textarea name="alamat" class="form-control" placeholder="Isi disini!" value="" required></textarea> -->
                        <input type="text" name="alamat" class="form-control" placeholder="alamat" value="<?php echo $d ['alamat']?>" required>  
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Program Studi</label>
                    <select class="form-control" name="program_studi">
                      <option value="<?php echo $d ['program_studi']; ?>">- <?php echo $d ['program_studi']; ?> -</option>
                      <option value="#">Manajemen Informatika</option>
                      <option value="Sistem Informasi">Sistem Informasi</option>
                      <option value="Teknik Informatika">Teknik Informatika</option>
                      <option value="Sistem Komputer">Sistem Komputer</option>
                      <option value="Akutansi">Akutansi</option>
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