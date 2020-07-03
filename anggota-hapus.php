<?php 
include '.../inc/koneksi.php';
$connect = mysqli_connect("localhost","root","","perpustakaan");
$NIM = $_GET['NIM'];
$query = $connect->query("DELETE FROM anggota WHERE NIM='$NIM'")or die(mysqli_error());
	if($query ==  true) {
		echo "<script>alert('Hapus Data Berhasil');</script>";
	}else {
		echo "<script>alert('Hapus Data gagal');</script>";
	}
 
header("location:anggota.php?pesan=hapus");
?>