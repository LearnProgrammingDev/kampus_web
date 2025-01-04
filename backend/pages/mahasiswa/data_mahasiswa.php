 
  <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800"> Data Mahasiswa</h1>
            <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data Dosen</li>
  </ol>
</nav>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa</h6>
                        </div>
                        <div class="card-body">
                        <div class="box-header py-3">
                            <a href="index.php?page=tambah_mahasiswa" class="btn btn-primary" role="button" title="Tambah Data"><i class="fas fa-fw fa-plus-circle"></i>Tambah Mahasiswa</a>
                        </div>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nim</th>
                                            <th>Nama</th>
                                            <th>Foto</th>
                                            <th>Alamat</th>
                                            <th>Jurusan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                    <?php
                    include "config/koneksi.php";
                    $no=0;
                    $query = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa ORDER BY id_mahasiswa DESC");
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                                        <tr>
                                            <td><?php echo $no=$no+1;?></td>
                                            <td><?php echo $row['nim'];?></td>
                                            <td><?php echo $row['nama'];?></td>
                                            <td>
                                                <img src="<?php echo 'pages/mahasiswa/img/'.$row['foto']; ?>" width="80em" alt="<?php echo $row['nama'];?>" />
                                            </td>
                                            <td><?php echo $row['alamat'];?></td>
                                            <td><?php echo $row['jurusan'];?></td>
                                            <td>
                                                <a href="index.php?page=ubah_mahasiswa&id=<?=$row['id_mahasiswa'];?>" class="btn btn-success" role="button" title="Ubah Data"><i class="glyphicon glyphicon-edit">Edit</i></a>
                                                <a onclick="return confirm('yakin')" href="pages/mahasiswa/hapus_mahasiswa.php?id=<?=$row['id_mahasiswa'];?>" class="btn btn-danger" role="button" title="Hapus Data"><i class="glyphicon glyphicon-trash">Delete</i></a>
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