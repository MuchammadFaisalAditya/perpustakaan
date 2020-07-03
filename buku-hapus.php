<?php 
include '.../inc/koneksi.php';
$connect = mysqli_connect("localhost","root","","perpustakaan");
$id_buku = $_GET['id_buku'];
$query = $connect->query("DELETE FROM buku WHERE id_buku='$id_buku'")or die(mysqli_error());
	if($query ==  true) {
		echo "<script>alert('Hapus Data Berhasil');</script>";
	}else {
		echo "<script>alert('Hapus Data gagal');</script>";
	}
 
header("location:buku.php?pesan=hapus");
?>