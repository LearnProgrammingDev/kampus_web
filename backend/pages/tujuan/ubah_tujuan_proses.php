	<?php
	include "../../config/koneksi.php";

	$id_tujuan    = $_POST['id'];
	$isi          = $_POST['isi'];


	$result = mysqli_query($koneksi, "UPDATE tb_tujuan SET isi='$isi', WHERE id_tujuan='$id_tujuan'");

	if ($result) {
		header("Location:../../index.php?page=data_tujuan");
	}
?>