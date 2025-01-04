	<?php
	include "../../config/koneksi.php";

	if(isset($_POST['simpan'])){

    $id_testimoni     = $_POST['id'];
	$nama             = $_POST['nama'];
	$isi              = $_POST['isi'];


	
	// $direktori      = "img/";
	// $file_name      = $_FILES['foto']['name'];
	// move_uploaded_file($_FILES['foto']['tmp_name'],$direktori.$file_name);
	
	$result = mysqli_query($koneksi, "UPDATE tb_testimoni SET nama='$nama', isi='$isi' WHERE id_testimoni='$id_testimoni'");

	

	if ($result) {
		header("Location:../../index.php?page=data_testimoni");
	}
	}
	
?>