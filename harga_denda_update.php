<?php
			  $id_jenis   =$_POST['id_jenis'];
              $Jenis_denda    =$_POST['Jenis_denda'];
              $harga   =$_POST['harga'];
        
              $connect = mysqli_connect("localhost","root","","perpustakaan");
 			  $query =$connect->query("UPDATE harga_denda SET id_jenis='$id_jenis', jenis_denda='$jenis_denda', harga='$harga' where id_jenis='$id_jenis'");

 
header("location:harga_denda.php?pesan=update");
?>