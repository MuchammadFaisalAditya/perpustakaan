
<?php 

 include'inc/header.php';
 include'inc/sidebar_menu.php'; 
 ?>
<!--main content start-->
 <section id="main-content">
   <section class="wrapper site-min-height">
    <div>
      <div class="form-panel">
        <h5 align="center"><b>Data Pinjam</b></h5>
         <form action="penerbit.php" method="get">
        <div class="col-xs-8 col-sm-4">
            <input type="text" name="cari" class="form-control col-xs-8" placeholder="Search...">
        </div>
        <a href='pinjam-input.php' class='btn btn-theme'>Tambah Peminjam &nbsp;<i class="fa fa-plus"></i></a>
    </form>
        <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>ID PINJAM</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>jurusan</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <?php 
            $connect = mysqli_connect("localhost","root","","perpustakaan");

               if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            }else {
                $cari = "";
            }
            $Data=mysqli_query($connect, "SELECT  a.id_pinjam, a.NIM, a.Nama, a.tanggal_pinjam, a.tanggal_kembali, b.jurusan from pinjam as a 
              inner join jurusan as b on a.id_jurusan=b.id_jurusan where Nama LIKE '%".$cari."%' OR NIM LIKE '%".$cari."%' OR tanggal_pinjam LIKE '%".$cari."%' OR jurusan LIKE '%".$cari."%' ORDER BY NIM ASC");

             $No=1;
            while ($a=mysqli_fetch_array($Data)) {
            ?>
          <tr>
             <td><?php echo $No++; ?></td>
             <td><?php echo $a['id_pinjam']; ?></td>
             <td><?php echo $a['NIM']; ?></td>
             <td><?php echo $a['Nama']; ?></td>
             <td><?php echo $a['tanggal_pinjam']; ?></td>
             <td><?php echo $a['tanggal_kembali']; ?></td>
             <td><?php echo $a['Jurusan']; ?></td>
             <td><button class="btn btn-primary btn-xs" onclick=\"window.location.href='Pinjam.php?update-akun=$tampil[id]'"><i class="fa fa-pencil"></i></button> |
            <a href="hapus.php?NIM=<?php echo $tampil['NIM']; ?>">Hapus</a></td></td>
          </tr>
        <?php }?>
          </table>
      </div>
    </div>
 </section>

<?php include'inc/footer.php'; ?>
