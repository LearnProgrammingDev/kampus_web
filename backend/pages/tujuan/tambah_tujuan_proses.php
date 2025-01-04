	<?php

	include "../../config/koneksi.php";

	$isi       = $_POST['isi'];

	$tambah = mysqli_query($koneksi,"INSERT INTO tb_tujuan VALUES ('$isi')");
	// var_dump($tambah);die();

	if($tambah){
	header("Location:../../index.php?page=data_tujuan");

	}else{
		echo 'gagal';
	}
	
	?>