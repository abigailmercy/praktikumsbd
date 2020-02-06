<?php 

include "koneksi.php"; 
$id = $_GET['id']; 
$nidn = $_GET['nidn']; 
$nama = $_GET['nama']; 
$alamat = $_GET['alamat']; 
$email = $_GET['email'];

$query = mysqli_query($connect, "update dosen set nidn= '$nidn', nama='$nama', alamat= '$alamat', email= '$email' where id_dosen='$id'") or die(mysqli_error($connect)); 

if ($query) {
	header('location:dosen.php'); 
} else {
	echo mysqli_error();
} 
?>