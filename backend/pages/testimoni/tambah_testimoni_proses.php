	<?php

	include "../../config/koneksi.php";

    if(isset($_POST['simpan'])) {
		$nama  = $_POST['nama'];
	    $isi   = $_POST['isi'];
      
		
		// $direktori      = "img/";
		// $file_name      = $_FILES['foto']['name'];
		// move_uploaded_file($_FILES['foto']['tmp_name'],$direktori.$file_name);
	
	$tambah = mysqli_query($koneksi, "INSERT INTO tb_testimoni(nama,isi) VALUES ('$nama', '$isi')");
	//var_dump($tambah);die();

	if($tambah){
	header("Location:../../index.php?page=data_testimoni");

	}else{
		echo 'gagal';
	}
	}
	
	
	?>