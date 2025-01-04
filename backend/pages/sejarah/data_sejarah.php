
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Sejarah</h1>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data Sejarah</li>
    </ol>
    </nav>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="tambah_sejarah" class="btn btn-primary"><i class="fas fa-fw fa-plus-circle"></i>Tambah Sejarah</a>
                            
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Isi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                <?php
                include "config/koneksi.php";
                $no = 0;
                $query = mysqli_query($koneksi, "SELECT * FROM tb_sejarah ORDER BY id_sejarah DESC");
                while ($row = mysqli_fetch_array($query)) {
                ?>

                                    <tr>
                                        <td><?php echo $no = $no+1;?></td>
                                        <td><?php echo substr($row['isi'], 0, 200); ?></td>
                                        <td>
                                            <a href="index.php?page=ubah_sejarah&id=<?=$row['id_sejarah'];?>" class="btn btn-success" role="button" title="Ubah Data"><i class="fas fa-fw fa-edit"></i></a>
                                            <a onclick="return confirm('yakin???')" href="pages/sejarah/hapus_sejarah.php?id=<?=$row['id_sejarah'];?>" class="btn btn-danger" role="button" title="Hapus Data"><i class="fas fa-fw fa-trash"></i></a>
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