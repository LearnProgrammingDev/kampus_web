  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
        Tambah Dosen
        </h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="dosen">Dosen</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tambah Dosen</li>
  </ol>
</nav>
        <!-- <ol class="breadcrumb">
          <li><a href="dosen"><i class="fa fa-dashboard"></i>Dosen</a></li>
          <li class="active">/ Tambah Dosen</li>
        </ol> -->
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
              <!-- /.box-header -->


              <!-- Form -->
              <!-- form start -->
              <form role="form" method="POST" action="pages/dosen/tambah_dosen_proses.php" enctype="multipart/form-data">
                <div class="box-body">
                  <div class="form-group">
                    <label>Nim</label>
                    <input type="text" name="nrp" class="form-control" placeholder="Nim" required>
                  </div>
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                  </div>
                  <div class="form-group">
                    <label>Foto</label>
                    <input type="file" name="gambar" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" placeholder="Isi disini!"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Program Studi</label>
                    <select class="form-control" name="program_studi">
                      <option value="">- Pilih Program Studi -</option>
                      <option value="Manajemen Informatika">Manajemen Informatika</option>
                      <option value="Sistem Informasi">Sistem Informasi</option>
                      <option value="Teknik Informatika">Teknik Informatika</option>
                      <option value="Sistem Komputer">Sistem Komputer</option>
                      <option value="Akutansi">Akutansi</option>
                    </select>
                  </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" name="simpan" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
                </div>
              </form>
              <!-- End Form -->


            </div>
            <!-- /.box -->
          </div>
        </div>
      </section>
      <!-- /.content -->
    </div>
  <!-- /.content-wrapper -->