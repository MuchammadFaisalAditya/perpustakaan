<?php

              $NIM      =$_POST['NIM'];
              $Nama     =$_POST['Nama'];
              $jk       =$_POST['Jenis_kelamin'];
              $Alamat   =$_POST['Alamat'];
              $level_user=$_POST['level_user'];
              $Jurusan  =$_POST['Jurusan'];
              $Kecamatan=$_POST['Kecamatan'];
              $Kabupaten=$_POST['Kabupaten'];
              $Propinsi =$_POST['Propinsi'];

              $connect = mysqli_connect("localhost","root","","perpustakaan");
              $query=$connect->query("INSERT into anggota values ('$NIM','$Nama','$jk','$level_user','$Alamat','$Jurusan','$Kecamatan','$Kabupaten','$Propinsi')");    
            if ($query == true) {
            echo "<script>alert('data berhasil disimpan');
          document.location.href='anggota.php'</script>\n";
                  }else {
            echo "<script>alert('data gagal disimpan');
            document.location.href='anggota.php'</script>\n";
              }
?>