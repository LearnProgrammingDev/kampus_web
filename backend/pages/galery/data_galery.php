
  <!-- Begin Page Content -->
                <div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Galery</h1>
   <nav aria-label="breadcrumb">
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data Galery</li>
  </ol>
</nav>


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="tambah_galery" class="btn btn-primary"><i class="fas fa-fw fa-plus-circle"></i>Tambah Galery</a>
                        </div>
                        <div class="card-body">
                         
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Foto</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody
                  ><?php
                  include "config/koneksi.php";
                  $no=0;
                  $query = mysqli_query($koneksi, "SELECT * FROM tb_galery ORDER BY id_galery DESC");
                  while ($row = mysqli_fetch_array($query)) {
                  ?>

                  <tr>
                    <td><?php echo $no=$no+1;?></td>
                    <td><img src="<?= 'pages/galery/img/' . $row['gambar']; ?>" width="70em" height="75em"></td>
                    <td>
                      <a href="index.php?page=ubah_galery&id=<?=$row['id_galery'];?>" class="btn btn-success" role="button" title="Ubah Data"><i class="far fa-edit">Edit</i></a>
                      <a onclick="return confirm('yakin???')" href="pages/galery/hapus_galery.php?id=<?=$row['id_galery'];?>" class="btn btn-danger" role="button" title="Hapus Data"><i class="fas fa-trash">Delete</i></a>
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