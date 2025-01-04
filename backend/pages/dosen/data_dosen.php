
  <!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Dosen</h1>
  <nav aria-label="breadcrumb">
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data Dosen</li>
  </ol>
</nav>
                    <p class="mb-4"><a target="_blank"
                            href="https://datatables.net">?</a></p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                          <a href="index.php?page=tambah_dosen" class="btn btn-primary"><i class="fas fa-fw fa-plus-circle"></i>Tambah Dosen</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
              <!-- Search Data Table -->
 <nav class="navbar navbar-light bg-light">
  <form class="form-inline mb-3 mt-3">
    <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search">
    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Cari Data disini</button>
  </form>
</nav>

                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nim</th>
                                            <th>Nama Dosen</th>
                                            <th>Foto</th>
                                            <th>Alamat</th>
                                            <th>Program Studi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                      <?php
                                      include "config/koneksi.php";
                                      $no = 0;
                                      $query = mysqli_query($koneksi, "SELECT * FROM tb_dosen ORDER BY id_dosen DESC");
                                      while ($row = mysqli_fetch_array($query)) {
                                      ?>   

                                        <tr>
                                            <td><?= $no = $no+1;  ?></td>
                                            <td><?= $row['nrp'];  ?></td>
                                            <td><?= $row['nama']; ?></td>
                                            <td><img src="<?= 'pages/dosen/img/' . $row['gambar']; ?>" width="70em" height="75em"></td>
                                            <td><?= $row['alamat']; ?></td>
                                            <td><?= $row['program_studi']; ?></td>
                                            <td>
                                              <a href="index.php?page=ubah_dosen&id=<?=$row['id_dosen']; ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                              <a onclick="return confirm('Yakin Hapus Data?')" href="pages/dosen/hapus_dosen.php?id=<?=$row['id_dosen']; ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>

                                <?php } ?>
                                        
                                    </tbody>
                                </table>

          <!-- Pagination -->
        <nav aria-label="...">
          <ul class="pagination">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a>
              </li>
              <li class="page-item active" aria-current="page">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
        </ul>
      </nav>
 </div>
 </div>
</div>

</div>
<!-- /.container-fluid -->