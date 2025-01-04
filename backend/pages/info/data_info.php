
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Contact</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Contact</h6>
                        </div>
                        <div class="card-body">
                       
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Alamat</th>
                                            <th>Email</th>
                                            <th>No Hp</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                  <?php
                  include "config/koneksi.php";
                  $no=0;
                  $query = mysqli_query($koneksi, "SELECT * FROM tb_info ORDER BY id_info DESC");
                  while ($row = mysqli_fetch_array($query)){
                  ?>

                <tr>
                    <td><?php echo $no=$no+1;?></td>
                    <td><?php echo $row['alamat'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['no_hp'];?></td>
                    <td>
                      <a href="index.php?page=ubah_info&id=<?=$row['id_info'];?>" class="btn btn-success" role="button" title="Ubah Data"><i class="far fa-edit">Edit</i></a>
                     
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