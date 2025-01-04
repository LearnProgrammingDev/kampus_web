  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
        Tambah sejarah
        </h1>
        <ol class="breadcrumb">
          <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">/ Tambah sejarah</li>
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
              <form role="form" method="POST" action="pages/sejarah/tambah_sejarah_proses.php" enctype="multipart/form-data">
                <div class="box-body">
                  

                <div class="form-group">
                  <label>Isi</label>
                  <textarea name="isi" id="ckeditor" class="ckeditor"></textarea>
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