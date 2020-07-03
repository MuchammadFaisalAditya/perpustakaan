<?php

              $id_jenis      =$_POST['id_jenis'];
              $jenis_denda     =$_POST['jenis_denda'];
              $harga   =$_POST['harga'];
        
              $connect = mysqli_connect("localhost","root","","perpustakaan");
              $query=$connect->query("INSERT into harga_denda values ('$id_jenis','$jenis_denda','$harga')");    
            if ($query == true) {
            echo "<script>alert('data berhasil disimpan');
          document.location.href='harga_denda.php'</script>\n";
                  }else {
            echo "<script>alert('data gagal disimpan');
            document.location.href='harga_denda.php'</script>\n";
              }
?>