	<?php
	include "../../config/koneksi.php";

	if(isset($_POST['simpan'])){

    $id_visi_misi   = $_POST['id'];
	$visi            = $_POST['visi'];
	$misi           = $_POST['misi'];



	$result = mysqli_query($koneksi, "UPDATE tb_visi_misi SET visi='$visi', misi='$misi' WHERE id_visi_misi='$id_visi_misi'");

	

	if ($result) {
		header("Location:../../index.php?page=data_visi_misi");
	}
	}
?>