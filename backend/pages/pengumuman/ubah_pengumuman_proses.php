	<?php
	include "../../config/koneksi.php";

	if(isset($_POST['simpan'])){

        $id_pengumuman  = $_POST['id'];
	    $judul          = $_POST['judul'];
	    $isi            = $_POST['isi'];


	$result = mysqli_query($koneksi, "UPDATE tb_pengumuman SET judul='$judul', isi='$isi' WHERE id_pengumuman='$id_pengumuman'");


	if ($result) {
		header("Location:../../index.php?page=data_pengumuman");
	}
	}

    
?>