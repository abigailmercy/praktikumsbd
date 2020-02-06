<?php 

	include "koneksi.php"; 
	 
	 $id = $_GET['id'] ;
	 $nim = $_GET['nim'] ;
	 $nama = $_GET['nama']; 
	 $alamat = $_GET['alamat']; 
	 $jk = $_GET['jk']; 
	 $doswal = $_GET['doswal']; 
	 
	 $query = mysqli_query($connect, "update mahaiswa set nim='$nim', nama='$nama', alamat='$alamat', jeniskelamin='$jk',id_dosen='$doswal' where id='$id'") or die(mysqli_error($connect)); 
	 
	 if ($query) {
		 header('location:mahasiswa.php');
	 } else {
		 echo mysqli_error();
	 } 
	 ?>