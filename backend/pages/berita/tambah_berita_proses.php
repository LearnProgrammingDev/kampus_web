 	<?php

	include "../../config/koneksi.php";
 
	if(isset($_POST['simpan'])){
		    $nama  = $_POST['nama'];
		    $judul = $_POST['judul'];
			$slug = str_replace(' ','-',$judul);
			$isi   = $_POST['isi'];
			$kategori = $_POST['tkategori'];
		
			
			$direktori      = "img/";
			$file_name      = $_FILES['foto']['name'];
			move_uploaded_file($_FILES['foto']['tmp_name'],$direktori.$file_name);

			
			$tambah = mysqli_query($koneksi, "INSERT INTO tb_berita(nama,judul,slug,isi,kategori,foto) VALUES ('$nama','$judul','$slug', '$isi','$kategori','$file_name')");

			if($tambah){
			header("Location:../../index.php?page=data_berita");

			}else{
				echo 'gagal';
			}
	}

   
	
	?>
	
 
 