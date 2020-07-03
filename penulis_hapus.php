<?php 

$connect = mysqli_connect("localhost","root","","perpustakaan");
$id_penulis = $_GET['id_penulis'];
$query = $connect->query("DELETE FROM penulis WHERE id_penulis='$id_penulis'")or die(mysqli_error());
	if($query ==  true) {
		echo "<script>alert('Hapus Data Berhasil');</script>";
	}else {
		echo "<script>alert('Hapus Data gagal');</script>";
	}
 
header("location:penulis.php?pesan=hapus");
?>