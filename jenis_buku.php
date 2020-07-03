
<?php 
 include'inc/header.php';
 include'inc/sidebar_menu.php'; 
 ?>
<!--main content start-->
 <section id="main-content">
   <section class="wrapper site-min-height">
    <div>
      <div class="form-panel">
        <h4 align="center">Data jenis buku</h4>
        <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Jenis buku</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <?php 
            $connect = mysqli_connect("localhost","root","","perpustakaan");

            $Data=mysqli_query($connect, "SELECT jenis_buku from jenis_buku");
             $No=1;
            while ($a=mysqli_fetch_array($Data)) {
            ?>
          <tr>
             <td><?php echo $No++; ?></td>
             <td><?php echo $a['jenis_buku']; ?></td>
             <td><button class="btn btn-primary btn-xs" onclick=\"window.location.href='jenis_buku.php?update-akun=$tampil[id]'"><i class="fa fa-pencil"></i></button> |
            <button class="btn btn-denger btn-xs"><a href="hapus.php?No=<?php echo $a['No']?>"><i class="fa f -trash-o"></i></a></button></td>
          </tr>
        <?php }?>
          </table>
      </div>
    </div>
 </section>

<?php include'inc/footer.php'; ?>
