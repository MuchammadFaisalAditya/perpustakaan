<?php 
 include'inc/header.php';
 include'inc/sidebar_menu.php'; 
 include'inc/koneksi.php';
 ?>
<!--main content start-->
 <section id="main-content">
   <section class="wrapper site-min-height">
    <div>
    	<br>

    	<a href="Anggota.php">Lihat Semua data</a>

    </br>
    <?php 
	$connect = mysqli_connect("localhost","root","","perpustakaan");
	$NIM = $_GET['NIM'];
	$query = $connect->query("SELECT a.NIM , a.nama, a.jenis_kelamin, a.level_user, a.alamat, a.jurusan FROM anggota as a inner join Kecamatan as b on a.id_kecamatan=b.id_kecamatan
    inner join kabupaten as c on a.id_kabupaten=c.id_kabupaten
    inner join propinsi as d on a.id_propinsi=d.id_propinsi where NIM='$NIM'");
    $data = mysqli_fetch_array($query)
	?>
<div class="row mt">
          <div class="col-lg-12">
            <h4 align="center">Edit Data Anggota</h4>
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" method="POST" action="anggota-proses-update.php">
                  <div class="form-group ">
                    <label for="NIM" class="control-label col-lg-2">NIM</label>
                    <div class="col-lg-10">
                      <input class="form-control" name="NIM" type="text" value="<?php echo $data['NIM']; ?>" required>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="Nama" class="control-label col-lg-2">Nama</label>
                    <div class="col-lg-10">
                      <input class=" form-control"  name="Nama" type="text" value="<?php echo $data['nama'];?>" required>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="Jenis_kelamin" class="control-label col-lg-2">Jenis_kelamin</label>
                    <div class="radio">
          <label><input  name="Jenis_kelamin" type="radio" value="L" checked="" />Laki-laki</label>
          <label><input  name="Jenis_kelamin" type="radio" value="P" checked="" />perempuan</label>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="Alamat" class="control-label col-lg-2">Alamat</label>
                    <div class="col-lg-10">
                      <input class="form-control " name="Alamat" type="text" value="<?php echo $data['alamat'];?>" required>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="Jurusan" class="control-label col-lg-2">Jurusan</label>
                    <div class="col-lg-10">
                      <input class="form-control " name="Jurusan" type="text" value="<?php echo $data['jurusan'];?>" required>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="Kecamatan" class="control-label col-lg-2">Kecamatan</label>
                    <div class="col-lg-10">
                      <!--<input class="form-control "  name="Kecamatan" type="text" value="<?php echo $data['kecamatan'];?>"required>-->
                       <?php 
                 $connect = mysqli_connect("localhost","root","","perpustakaan");
                 echo "<select name='Kecamatan'>
                 <option value=0 selected class=form-control>---Pilih Kecamatan---</option>";
                 $tampil=$connect->query("SELECT * from Kecamatan ORDER BY Kecamatan");
                 while($data=mysqli_fetch_array($tampil)) {
                  echo "<option value=$data[id_kecamatan]>$data[kecamatan]</option>";
                }
                echo "</select>"; ?>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="Kabupaten" class="control-label col-lg-2">Kabupaten</label>
                    <div class="col-lg-10">
                     <!-- <input class="form-control "  name="Kabupaten" type="text" value="<?php echo $data['kabupaten'];?>" required>-->
                     <?php 
                 $connect = mysqli_connect("localhost","root","","perpustakaan");
                 echo "<select name='Kabupaten'>
                 <option value=0 selected class=form-control>---Pilih Kabupaten---</option>";
                 $tampil=$connect->query("SELECT * from Kabupaten ORDER BY Kabupaten");
                 while($data=mysqli_fetch_array($tampil)) {
                  echo "<option value=$data[id_kabupaten]>$data[kabupaten]</option>";
                }
                echo "</select>"; ?>
                    </div>
                  </div>
                    <div class="form-group ">
                    <label for="Propinsi" class="control-label col-lg-2">Propinsi</label>
                    <div class="col-lg-10">
                      <!--<input class="form-control " name="Propinsi" type="text" value="<?php echo $data['propinsi'];?>" required>-->
                    <?php 
                 $connect = mysqli_connect("localhost","root","","perpustakaan");
                 echo "<select name='Propinsi'>
                 <option value=0 selected class=form-control>---Pilih Propinsi---</option>";
                 $tampil=$connect->query("SELECT * from Propinsi ORDER BY Propinsi");
                 while($data=mysqli_fetch_array($tampil)) {
                  echo "<option value=$data[id_propinsi]>$data[propinsi]</option>";
                }
                echo "</select>"; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button type="submit" class="btn btn-theme" value="Save" name="Save">Save</button>
                    </div>
                  </div>
                </form>

              </div>
            </div>
          </div>
               </div>
 </section>

<?php include'inc/footer.php'; ?>