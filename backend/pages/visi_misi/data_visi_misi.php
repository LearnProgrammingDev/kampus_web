
  <!-- Begin Page Content -->
                <div class="container-fluid">
        <ol class="breadcrumb">
          <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">/Data Visi & MIsi</li>
        </ol>
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Visi Misi</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Visi & Misi</h6>
                        </div>
                        <div class="card-body">
                          
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Visi</th>
                                            <th>MIsi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody
                  ><?php
                  include "config/koneksi.php";
                  $no=0;
                  $query = mysqli_query($koneksi, "SELECT * FROM tb_visi_misi ORDER BY id_visi_misi DESC");
                  while ($row = mysqli_fetch_array($query)) {
                  ?>

                  <tr>
                    <td><?php echo $no=$no+1;?></td>
                    <td><?php echo $row['visi'];?></td>
                    <td><?php echo substr($row['misi'], 0, 200); ?></td>
                    <td>
                      <a href="index.php?page=ubah_visi_misi&id=<?=$row['id_visi_misi'];?>" class="btn btn-success" role="button" title="Ubah Data"><i class="far fa-edit">Edit</i></a>
                      
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