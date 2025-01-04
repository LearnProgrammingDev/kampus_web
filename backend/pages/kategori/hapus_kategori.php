	<?php
	include "../../config/koneksi.php";
	
	$id    = $_GET['id'];
	$query = ("DELETE FROM tb_kategori WHERE id_kategori ='$id'");
	if(! mysqli_query ($koneksi, $query) ){
	die('mysqli_error');
	} else {
	echo '<script>alert("Data Berhasil Dihapus !!!");
	window.location.href="../../index.php?page=data_kategori"</script>';
	}
	?>