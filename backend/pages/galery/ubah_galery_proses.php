	<?php
	include "../../config/koneksi.php";

	
    $id_galery      = $_POST['id'];


	
	$direktori      = "img/";
	$file_name      = $_FILES['gambar']['name'];
	move_uploaded_file($_FILES['gambar']['tmp_name'],$direktori.$file_name);

	$result = mysqli_query($koneksi, "UPDATE tb_galery SET gambar='$file_name',gambar='$file_name'  WHERE id_galery='$id_galery'");

	

	if ($result) {
		header("Location:../../index.php?page=data_galery");
	}
?>