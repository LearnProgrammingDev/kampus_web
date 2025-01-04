	<?php

	include "../../config/koneksi.php";

	$nrp             = $_POST['nrp'];
	$nama            = $_POST['nama'];
	$alamat          = $_POST['alamat'];
	$program_studi   = $_POST['program_studi'];

	
	$direktori      = "img/";
	$file_name      = $_FILES['gambar']['name'];
	move_uploaded_file($_FILES['gambar']['tmp_name'],$direktori.$file_name);


	
	$tambah = mysqli_query($koneksi,"INSERT INTO tb_dosen(nrp, nama, gambar, alamat, program_studi) VALUES ('$nrp','$nama','$file_name','$alamat','$program_studi')");
	// var_dump($tambah);die();

	if($tambah){
	header("Location:../../index.php?page=data_dosen");

	}else{
		echo 'gagal';
	}
	
	?>