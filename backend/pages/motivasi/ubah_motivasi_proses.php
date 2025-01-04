	<?php
	include "../../config/koneksi.php";

	

	$id_motivasi  = $_POST['id'];
	$nama         = $_POST['nama'];
	$isi          = $_POST['isi'];
	$profesi      = $_POST['profesi'];



	$result = mysqli_query($koneksi, "UPDATE tb_motivasi SET nama='$nama', isi='$isi', profesi='$profesi',  WHERE id_motivasi='$id_motivasi'");


	if ($result) {
		header("Location:../../index.php?page=data_motivasi");
	}
	
	
    
?>