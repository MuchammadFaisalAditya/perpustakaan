
<?php 
 include'inc/header.php';
 include'inc/sidebar_menu.php'; 
 ?>
<!--main content start-->
 <section id="main-content">
   <section class="wrapper site-min-height">
    <div>
      <div class="form-panel">
        <h5>Data Propinsi</h5>
        <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Propinsi</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <?php 
            $connect = mysqli_connect("localhost","root","","perpustakaan");

            $Data=mysqli_query($connect, "SELECT  propinsi from propinsi");
             $No=1;
            while ($a=mysqli_fetch_array($Data)) {
            ?>
          <tr>
             <td><?php echo $No++; ?></td>
             <td><?php echo $a['propinsi']; ?></td>
             <td><button class="btn btn-primary btn-xs" onclick=\"window.location.href='propinsi.php?update-akun=$tampil[id]'"><i class="fa fa-pencil"></i></button> |
            <a href="hapus.php?NIM=<?php echo $tampil['NIM']; ?>">Hapus</a></td></td>
          </tr>
        <?php }?>
          </table>
      </div>
    </div>
 </section>
<script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="lib/advanced-datatable/js/DT_bootstrap.js"></script>

<?php include'inc/footer.php'; ?>
