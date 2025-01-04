  
  <!-- Begin Page Content -->
                <div class="container-fluid">
        <ol class="breadcrumb">
          <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">/Data Tujuan</li>
        </ol>
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Tujuan</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Tujuan</h6>
                        </div>
                        <div class="card-body">
                          <div class="box-header">
                              <a href="index.php?page=tambah_galery" class="btn btn-primary" role="button" title="Tambah Data"><i class="fas fa-plus">Tambah</i></a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Isi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody
                  ><?php
                  include "config/koneksi.php";
                  $no=0;
                  $query = mysqli_query($koneksi, "SELECT * FROM tb_tujuan ORDER BY id_tujuan DESC");
                  while ($row = mysqli_fetch_array($query)) {
                  ?>

                  <tr>
                    <td><?php echo $no=$no+1;?></td>
                    <td><?php echo $row['isi'];?></td>
                    <td>
                      <a href="index.php?page=ubah_tujuan&id=<?=$row['id_tujuan'];?>" class="btn btn-success" role="button" title="Ubah Data"><i class="far fa-fw fa-edit"></i></a>
                      <a onclick="return confirm('yakin???')" href="pages/tujuan/hapus_tujuan.php?id=<?=$row['id_tujuan'];?>" class="btn btn-danger" role="button" title="Hapus Data"><i class="fas fa-fw fa-trash"></i></a>
                    </td>
                  </tr>

                  <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->