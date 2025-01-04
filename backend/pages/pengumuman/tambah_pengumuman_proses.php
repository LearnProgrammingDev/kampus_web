 	<?php

	include "../../config/koneksi.php";

	if(isset($_POST['simpan'])){
		$judul     = $_POST['judul'];
			$isi   = $_POST['isi'];
			
			
			$tambah = mysqli_query($koneksi,"INSERT INTO tb_pengumuman(judul,isi) VALUES ('$judul', '$isi')");

			if($tambah){
			header("Location:../../index.php?page=data_pengumuman");

			}else{
				echo 'gagal';
			}
	}

   
	
	?>
 
 