	<?php
	include "../../config/koneksi.php";

	
    $id_sejarah  = $_POST['id'];
	$isi         = $_POST['isi'];


	$result = mysqli_query($koneksi, "UPDATE tb_sejarah SET isi='$isi' WHERE id_sejarah='$id_sejarah'");

	

	if ($result) {
		header("Location:../../index.php?page=data_sejarah");
	}
?>