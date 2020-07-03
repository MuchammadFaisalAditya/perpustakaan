
<?php 
 include'inc/header.php';
 include'inc/sidebar_menu.php'; 
 ?>
<!--main content start-->
 <section id="main-content">
   <section class="wrapper site-min-height">
    <div>
      <div class="form-panel">
        <h4 align="center">Data penerbit</h4>
         <form action="penerbit.php" method="get">
        <div class="col-xs-8 col-sm-4">
            <input type="text" name="cari" class="form-control col-xs-8" placeholder="Search...">
        </div>
        <a href='penerbit_tambah.php' class='btn btn-theme'>Tambah Penerbit &nbsp;<i class="fa fa-plus"></i></a>
    </form>
        <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>penerbit</th>
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

            $Data=mysqli_query($connect, "SELECT penerbit from penerbit where penerbit LIKE '%".$cari."%' ORDER BY penerbit ASC");
             $No=1;
            while($a=mysqli_fetch_array($Data)) {
            ?>
          <tr>
             <td><?php echo $No++; ?></td>
             <td><?php echo $a['penerbit']; ?></td>
             <td><button class="btn btn-primary btn-xs" onclick=\"window.location.href='penerbit.php?update-akun=$tampil[id]'"><i class="fa fa-pencil"></i></button> |
            <a href="hapus.php?NIM=<?php echo $tampil['NIM']; ?>">Hapus</a></td></td>
          </tr>
        <?php }?>
          </table>
      </div>
    </div>
 </section>

<?php include'inc/footer.php'; ?>
