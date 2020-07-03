<?php
			  $id_buku   =$_POST['id_buku'];
              $Judul     =$_POST['Judul'];
              $tahun_terbit   =$_POST['tahun_terbit'];
              $penulis	 =$_POST['penulis'];
              $penerbit  =$_POST['penerbit'];
              $jenis_buku=$_POST['jenis_buku'];
        
              $connect = mysqli_connect("localhost","root","","perpustakaan");
 $query =$connect->query("UPDATE buku SET id_Buku='$id_buku', Judul='$Judul', tahun_terbit='$tahun_terbit', id_penulis='$penulis', id_penerbit='$penerbit', id_jenis_buku='$jenis_buku' where id_buku='$id_buku'");

 
header("location:buku.php?pesan=update");
?>