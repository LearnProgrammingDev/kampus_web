	<?php
	include "../../config/koneksi.php";

	if(isset($_POST['simpan'])){

        $id_berita  = $_POST['id'];
		$nama       = $_POST['nama'];
	    $judul      = $_POST['judul'];
	    $isi        = $_POST['isi'];

		$query = mysqli_query($koneksi, "SELECT * FROM tb_berita WHERE id_berita='$id_berita'");
		$row = mysqli_fetch_array($query);
		$foto_lama = $d['foto'];

		if ($_FILES['foto']['name'] != null) {
			$direktori      = "img/";
			$file_name      = $_FILES['foto']['name'];
			move_uploaded_file($_FILES['foto']['tmp_name'],$direktori.$file_name);
		}else {
			$file_name = $foto_lama;
		}
	

	$result = mysqli_query($koneksi, "UPDATE tb_berita SET nama='$nama', judul='$judul', isi='$isi', foto='$file_name' WHERE id_berita='$id_berita'");


	if ($result) {
		header("Location:../../index.php?page=data_berita");
	}
	}

    
?>