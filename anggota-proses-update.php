<?php 
 include "koneksi.php";
			  $NIM      =$_POST['NIM'];
              $Nama     =$_POST['Nama'];
              $jk       =$_POST['Jenis_kelamin'];
              $Alamat   =$_POST['Alamat'];
              $Jurusan  =$_POST['Jurusan'];
              $Kecamatan=$_POST['Kecamatan'];
              $Kabupaten=$_POST['Kabupaten'];
              $Propinsi =$_POST['Propinsi'];

$connect = mysqli_connect("localhost","root","","perpustakaan");
 $query =$connect->query("UPDATE anggota SET NIM='$NIM', Nama='$Nama', jenis_kelamin='$jk', alamat='$Alamat', jurusan='$Jurusan', id_kecamatan='$Kecamatan', id_kabupaten='$Kabupaten', id_propinsi='$Propinsi' WHERE NIM='$NIM'");

 
header("location:anggota.php?pesan=update");
?>