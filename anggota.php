
<?php 
 include'inc/header.php';
 include'inc/sidebar_menu.php'; 
 ?>
<!--main content start-->
 <section id="main-content">
   <section class="wrapper site-min-height">
    <div>
      <div class="form-panel">
        <h4 align=center>Data Anggota</h4>
        <?php 
        if(isset($_GET['awal']) && $_GET['awal'] !=''){
            $awal = $_REQUEST['awal'];
        } else {
        $awal = 0;
        }
    //1. cari banyak total data
        $connect = mysqli_connect("localhost","root","","perpustakaan");
        $jum_total = mysqli_query($connect, "SELECT * FROM anggota ");
        $hasil_jum_total = mysqli_num_rows($jum_total);
    //2. tentukan jumlah data per halaman
        $data = 20;
    //3. cari banyaknya jumlah total halaman
        $page = ceil($hasil_jum_total / $data);
        ?>
        <form action="anggota.php" method="get" >
        <div class="col-xs-8 col-sm-4">
            <input type="text" name="cari" class="form-control col-xs-8" placeholder="Search...">
        </div>
        <a href='anggota-tambah.php' class='btn btn-theme'>Tambah Anggota &nbsp;<i class="fa fa-plus"></i></a>
        <a href='upload-anggota.php' class='btn btn-theme'>Upload Anggota &nbsp;<i class="fa fa-upload"></i></a>
    </form>
        <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Jurusan</th>
                <th>Kecamatan</th>
                <th>Kabupaten</th>
                <th>Propinsi</th>
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
            $Data=mysqli_query($connect, "SELECT a.NIM, a.Nama, a.Jenis_kelamin, a.Alamat, e.jurusan, b.Kecamatan, c.Kabupaten, d.Propinsi
            from anggota as a inner join Kecamatan as b on a.id_kecamatan=b.id_kecamatan
            inner join kabupaten as c on a.id_kabupaten=c.id_kabupaten
            inner join propinsi as d on a.id_propinsi=d.id_propinsi
            inner join jurusan as e on a.id_jurusan=e.id_jurusan where Nama LIKE '%".$cari."%' OR NIM LIKE '%".$cari."%' OR Alamat LIKE '%".$cari."%' OR Jurusan LIKE '%".$cari."%' OR Kecamatan LIKE '%".$cari."%' OR kabupaten LIKE '%".$cari."%' OR Propinsi LIKE '%".$cari."%' ORDER BY NIM");


            $No=1;
            while ($tampil=mysqli_fetch_array($Data)) {
            ?>
            <?php if (isset($_GET['status'])): ?>
                <p>
                <?php
                    if ($_GET['status'] == 'sukses') {
                        echo "Tambah anggota berhasil ... ";
                     } else{
                        echo "Tambah gagal!";
                }
                ?>
            </p>
            <?php endif; ?>
           <tr>
             <td><?php echo $No++; ?></td>
             <td><?php echo $tampil['NIM']; ?></td>
             <td><?php echo $tampil['Nama']; ?></td>
             <td><?php echo $tampil['Jenis_kelamin']; ?></td>
             <td><?php echo $tampil['Alamat']; ?></td>
             <td><?php echo $tampil['jurusan']; ?></td>
             <td><?php echo $tampil['Kecamatan']; ?></td>
             <td><?php echo $tampil['Kabupaten']; ?></td>
             <td><?php echo $tampil['Propinsi']; ?></td>
             <td><a href="anggota-edit.php?NIM=<?php echo $tampil['NIM']; ?>">Edit</a> |
            <a href="anggota-hapus.php?NIM=<?php echo $tampil['NIM']; ?>">Hapus</a></td>
           </tr>
            <?php  }?>

            

          </table>
          <div class="pagging">
              <?php 
        //tombol prev
            if($awal != 0) echo "<a href='index.php?module=rak&awal=".($awal-$data)."'>Prev</a>&nbsp;";
        //tombol pagging
            $x = 0;
            for($i = 0; $i<$page; $i++){
                $x = $i * $data;
                if($awal == $x){
                    echo "[".($i+1.)."]";
                } else {
                    echo "[<a href='index.php?module=rak&awal=$x'>".($i+1)."</a>]&nbsp;";
                }
            }
        //tombol next
            
            if($awal != $x) echo "&nbsp; <a href='index.php?module=rak&awal=".($awal+$data)."'>Next</a>";
        ?>
          </div>
      </div>
    </div>
 </section>

<?php include'inc/footer.php'; ?>

    

    
