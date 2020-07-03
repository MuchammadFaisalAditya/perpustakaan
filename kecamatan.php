<?php 
 include'inc/header.php';
 include'inc/sidebar_menu.php'; 
 ?>
<!--main content start-->
 <section id="main-content">
   <section class="wrapper site-min-height">
    
    <div>
      <div class="form-panel">
        <h5 align="center">Data Kecamatan</h5>
        <?php 
        if(isset($_GET['awal']) && $_GET['awal'] !=''){
            $awal = $_GET['awal'];
        } else {
        $awal = 0;
        }
    //1. cari banyak total data
        $connect = mysqli_connect("localhost","root","","perpustakaan");
        $jum_total = mysqli_query($connect, "SELECT * FROM Kecamatan ");
        $hasil_jum_total = mysqli_num_rows($jum_total);
    //2. tentukan jumlah data per halaman
        $hal = 20;
    //3. cari banyaknya jumlah total halaman
        $page = ceil($hasil_jum_total / $hal);
        ?>
        <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Kecamatan</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <?php 
            $connect = mysqli_connect("localhost","root","","perpustakaan");

            $Data=mysqli_query($connect, "SELECT  Kecamatan from Kecamatan LIMIT $awal,$hal");
             $No=$awal+1;
            while ($a=mysqli_fetch_array($Data)) {
            ?>
          <tr>
             <td><?php echo $No++; ?></td>
             <td><?php echo $a['Kecamatan']; ?></td>
             <td><button class="btn btn-primary btn-xs" onclick=\"window.location.href='Kabupaten.php?update-akun=$tampil[id]'"><i class="fa fa-pencil"></i></button> |
            <a href="hapus.php?NIM=<?php echo $tampil['NIM']; ?>">Hapus</a></td></td>
          </tr>
        <?php }?>
          </table>
          <div class="pagination pagination-lg">
              <?php 
        //tombol prev
            if($awal != 0) echo "<a href='kecamatan.php?module=kecamatan&awal=".($awal-$hal)."'>Prev</a>&nbsp;";
        //tombol pagging
            $x = 0;
            for($i = 0; $i<$page; $i++){
                $x = $i * $hal;
                if($awal == $x){
                    echo "[".($i+1.)."]";
                } else {
                    echo "[<a href='kecamatan.php?module=kecamatan&awal=$x'>".($i+1)."</a>]&nbsp;";
                }
            }
        //tombol next
            
            if($awal != $x) echo "&nbsp; <a href='kecamatan.php?module=kecamatan&awal=".($awal+$hal)."'>Next</a>";
        ?>
          </div>
      </div>
    </div>
 </section>

<?php include'inc/footer.php'; ?>
