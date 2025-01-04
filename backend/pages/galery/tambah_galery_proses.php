	<?php

	include "../../config/koneksi.php";

	

	
	$direktori      = "img/";
	$file_name      = $_FILES['gambar']['name'];
	move_uploaded_file($_FILES['gambar']['tmp_name'],$direktori.$file_name);


	
	$tambah = mysqli_query($koneksi,"INSERT INTO tb_galery(gambar) VALUES ('$file_name')");
	// var_dump($tambah);die();

	if($tambah){
	header("Location:../../index.php?page=data_galery");

	}else{
		echo 'gagal';
	}
	
	?>