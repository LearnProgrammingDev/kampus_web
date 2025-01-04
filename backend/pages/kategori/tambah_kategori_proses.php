	<?php

	include "../../config/koneksi.php";
    if (isset($_POST['simpan'])) {
	$nama   = $_POST['nama'];

	
	$tambah = mysqli_query($koneksi,"INSERT INTO tb_kategori(nama_kategori) VALUES ('$nama')");
	var_dump($tambah);

	if($tambah){
	header("Location:../../index.php?page=data_kategori");

	}else{
		echo 'gagal';
	}
	}
	
	
	?>
	