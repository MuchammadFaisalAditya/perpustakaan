
<?php 
 include'inc/header.php';
 include'inc/sidebar_menu.php'; 
 ?>
<!--main content start-->
 <section id="main-content">
   <section class="wrapper site-min-height">
    <div>
      <div class="form-panel">
        <h5 align="center"><b>Data Kabupaten</b></h5>
        <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Kabupaten</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <?php 
            $connect = mysqli_connect("localhost","root","","perpustakaan");

            $Data=mysqli_query($connect, "SELECT  Kabupaten from Kabupaten");
             $No=1;
            while ($a=mysqli_fetch_array($Data)) {
            ?>
          <tr>
             <td><?php echo $No++; ?></td>
             <td><?php echo $a['Kabupaten']; ?></td>
             <td><button class="btn btn-primary btn-xs" onclick=\"window.location.href='Kabupaten.php?update-akun=$tampil[id]'"><i class="fa fa-pencil"></i></button> |
            <a href="hapus.php?NIM=<?php echo $tampil['NIM']; ?>">Hapus</a></td></td>
          </tr>
        <?php }?>
          </table>
      </div>
    </div>
 </section>

<?php include'inc/footer.php'; ?>
