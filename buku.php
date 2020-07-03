<?php 
 include'inc/header.php';
 include'inc/sidebar_menu.php'; 
 ?>
<!--main content start-->
 <section id="main-content">
   <section class="wrapper site-min-height">
    <div>
      <div class="form-panel">
        <h4 align="center"><b>Data buku</b></h4>
         <form action="buku.php" method="get">
        <div class="col-xs-8 col-sm-4">
            <input type="text" name="cari" class="form-control col-xs-8" placeholder="cari buku...">
        </div>
          <a href="buku-print.php" target="_BLANK">Cetak Data Buku</a>
          <a href='buku_tambah.php' class='btn btn-theme'>Tambah Buku &nbsp;<i class="fa fa-plus"></i></a>
      </form>
        <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>ID Buku</th>
                <th>Judul</th>
                <th>Tahun Terbit</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Jenis Buku</th>
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
            $Data=mysqli_query($connect, "SELECT b.id_buku, b.judul, b.tahun_terbit, p.penulis, e.penerbit, j.jenis_buku from buku as b 
              inner join penulis as p on b.id_penulis=p.id_penulis
              inner join penerbit as e on b.id_penerbit=e.id_penerbit
              inner join jenis_buku as j on b.id_jenis_buku=j.id_jenis_buku where judul LIKE '%".$cari."%' OR Penulis LIKE '%".$cari."%' OR Penerbit LIKE '%".$cari."%' OR jenis_buku LIKE '%".$cari."%' OR tahun_terbit LIKE '%".$cari."%' ORDER BY id_buku ");
             $No=1;
            while($a=mysqli_fetch_array($Data)) {
            ?>
          <tr>
             <td><?php echo $No++; ?></td>
             <td><?php echo $a['id_buku']; ?></td>
             <td><?php echo $a['judul']; ?></td>
             <td><?php echo $a['tahun_terbit']; ?></td>
             <td><?php echo $a['penulis']; ?></td>
             <td><?php echo $a['penerbit']; ?></td>
             <td><?php echo $a['jenis_buku']; ?></td>
             <td><a href="buku-edit.php?id_buku=<?php echo $a['id_buku']; ?>">Edit</a> |
            <a href="buku-hapus.php?id_buku=<?php echo $a['id_buku']; ?>">Hapus</a></td>
          </tr>
        <?php }?>
          </table>
      </div>
    </div>
 </section>

<?php include'inc/footer.php'; ?>
