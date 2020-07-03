
<?php 
 include'inc/header.php';
 include'inc/sidebar_menu.php'; 
 ?>
<!--main content start-->
 <section id="main-content">
   <section class="wrapper site-min-height">
    <div>
      <div class="form-panel">
        <h4 align="center">List Harga Denda</h4>
         <form action="penerbit.php" method="get">
        <div class="col-xs-8 col-sm-4">
            <input type="text" name="cari" class="form-control col-xs-8" placeholder="Search...">
        </div>
        <a href='harga_denda_tambah.php' class='btn btn-theme'>Daftar Denda &nbsp;<i class="fa fa-plus"></i></a>
    </form>
        <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>ID Jenis</th>
                <th>Jenis Denda</th>
                <th>Harga Denda/item</th>
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

            $Data=mysqli_query($connect, "SELECT * from harga_denda where jenis_denda LIKE '%".$cari."%' ORDER BY id_jenis ASC");
             $No=1;
            while($a=mysqli_fetch_array($Data)) {
            ?>
          <tr>
             <td><?php echo $No++; ?></td>
             <td><?php echo $a['id_jenis']; ?></td>
             <td><?php echo $a['jenis_denda']; ?></td>
             <td><?php echo $a['harga']; ?></td>
             <td><a href="denda-edit.php?id_jenis=<?php echo $a['id_jenis']; ?>">Edit</a> |
            <a href="harga_denda_hapus.php?id_jenis=<?php echo $a['id_jenis']; ?>">Hapus</a></td>
          </tr>
        <?php }?>
          </table>
      </div>
    </div>
 </section>

<?php include'inc/footer.php'; ?>
