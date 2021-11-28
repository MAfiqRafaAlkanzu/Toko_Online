<?php
	if($_POST){
		$nama_produk=$_POST['nama_produk'];
		$deskripsi=$_POST['deskripsi'];
		$harga=$_POST['harga'];

		//mulai upload file
		$temp = $_FILES['foto_produk']['tmp_name'];
		$size = $_FILES['foto_produk']['size'];
		$type = $_FILES['foto_produk']['type'];
		$name = rand(0,999).$_FILES['foto']['name'];
		$folder = "foto";
		//akhir upload file

		if(empty($nama_produk)){
			echo "<script>alert('nama produk tidak boleh kosong');location.href='tambah_produk.php';</script>";
		} elseif(empty($deskripsi)){
			echo "<script>alert('deskripsi tidak boleh kosong');location.href='tambah_produk.php';</script>";
		} elseif(empty($harga)){
			echo "<script>alert('harga tidak boleh kosong');location.href='tambah_produk.php';</script>";
		} else {
			include "koneksi.php";

			//mulai upload file
			move_uploaded_file($file_tmp, $folder.$name);
			$insert=mysqli_query($koneksi,"INSERT into produk (nama_produk, deskripsi, harga, foto_produk) value ('".$nama_produk."','".$deskripsi."', '".$harga ."','".$name."')");
			//akhir upload file

			if($insert){
				echo "<script>alert('Sukses menambahkan produk');location.href='produk.php';</script>";
			} else {
				echo "<script>alert('Gagal menambahkan produk');location.href='tambah_produk.php';</script>";
			// echo "insert into produk (nama_produk,deskripsi,harga) value ('".$nama_produk."','".$deskripsi."','".$harga."')";
			}
		}
	}
?>