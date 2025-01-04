	<?php
	include "../../config/koneksi.php";

	
    $id_dosen       = $_POST['id'];
	$nim            = $_POST['nrp'];
	$nama           = $_POST['nama'];
	$alamat         = $_POST['alamat'];
	$program_studi  = $_POST['program_studi'];

	$query = mysqli_query($koneksi, "SELECT * fROM tb_dosen WHERE id_dosen='$id_dosen'");
	$d = mysqli_fetch_array($query);
	$foto_lama = $d['gambar'];

	if($_FILES['gambar']['name'] != null){
		$direktori      = "img/";
		$file_name      = $_FILES['gambar']['name'];
		move_uploaded_file($_FILES['gambar']['tmp_name'],$direktori.$file_name);

	}else{
		$file_name = $foto_lama;
	}

	$result = mysqli_query($koneksi, "UPDATE tb_dosen SET nrp='$nim', nama='$nama',gambar='$file_name', alamat='$alamat', program_studi='$program_studi', gambar='$file_name'  WHERE id_dosen='$id_dosen'");

	if ($result) {
		header("Location:../../index.php?page=data_dosen");
	}
?>