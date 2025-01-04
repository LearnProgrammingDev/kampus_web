	<?php

	include "../../config/koneksi.php";

	if (isset($_POST['simpan'])) {
		$nama    = $_POST['nama'];
	$isi     = $_POST['isi'];
	$profesi = $_POST['profesi'];


	
	$tambah = mysqli_query($koneksi,"INSERT INTO tb_motivasi(nama, isi, profesi) VALUES ('$nama','$isi','$profesi')");
	// var_dump($tambah);die();

	if($tambah){
	header("Location:../../index.php?page=data_motivasi");

	}else{
		echo 'gagal';
	}
	}
	
	
	?>