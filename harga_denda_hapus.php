<?php 
include '.../inc/koneksi.php';
$connect = mysqli_connect("localhost","root","","perpustakaan");
$id_jenis = $_GET['id_jenis'];
$query = $connect->query("DELETE FROM harga_denda WHERE id_jenis='$id_jenis'")or die(mysqli_error());
	if($query ==  true) {
		echo "<script>alert('Hapus Data Berhasil');</script>";
	}else {
		echo "<script>alert('Hapus Data gagal');</script>";
	}
 
header("location:harga_denda.php?pesan=hapus");
?>