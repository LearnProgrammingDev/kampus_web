	<?php
	include "../../config/koneksi.php";

	
    $id_info       = $_POST['id'];
	$alamat            = $_POST['alamat'];
	$email           = $_POST['email'];
	$no_hp       = $_POST ['no_hp'];

	$result = mysqli_query($koneksi, "UPDATE tb_info SET alamat='$alamat', email='$email', no_hp='$no_hp' WHERE id_info=$id_info");

	

	if ($result) {
		header("Location:../../index.php?page=data_info");
	}
?>