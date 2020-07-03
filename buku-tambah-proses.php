<?php

              $id_Buku      =$_POST['id_Buku'];
              $Judul     =$_POST['Judul'];
              $tahun_terbit   =$_POST['tahun_terbit'];
              $penulis=$_POST['penulis'];
              $penerbit  =$_POST['penerbit'];
              $jenis_buku=$_POST['jenis_buku'];
        
              $connect = mysqli_connect("localhost","root","","perpustakaan");
              $query=$connect->query("INSERT into buku values ('$id_Buku','$Judul','$tahun_terbit','$penulis','$penerbit','$jenis_buku')");    
            if ($query == true) {
            echo "<script>alert('data berhasil disimpan');
          document.location.href='buku.php'</script>\n";
                  }else {
            echo "<script>alert('data gagal disimpan');
            document.location.href='buku.php'</script>\n";
              }
?>