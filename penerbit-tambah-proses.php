<?php

              $id_penerbit     =$_POST['id_penerbit'];
              $penerbit    =$_POST['penerbit'];

              $connect = mysqli_connect("localhost","root","","perpustakaan");
              $query=$connect->query("INSERT into penerbit values ('$id_penerbit','$penerbit')");    
            if ($query == true) {
            echo "<script>alert('data berhasil disimpan');
          document.location.href='penulis.php'</script>\n";
                  }else {
            echo "<script>alert('data gagal disimpan');
            document.location.href='penulis.php'</script>\n";
              }
?>