<?php

              $id_penulis      =$_POST['id_penulis'];
              $penulis     =$_POST['penulis'];

              $connect = mysqli_connect("localhost","root","","perpustakaan");
              $query=$connect->query("INSERT into penulis values ('$id_penulis','$penulis')");    
            if ($query == true) {
            echo "<script>alert('data berhasil disimpan');
          document.location.href='penulis.php'</script>\n";
                  }else {
            echo "<script>alert('data gagal disimpan');
            document.location.href='penulis.php'</script>\n";
              }
?>