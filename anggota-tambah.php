<?php 
 include'inc/header.php';
 include'inc/sidebar_menu.php'; 
 include'inc/koneksi.php';
 ?>
<!--main content start-->
 <section id="main-content">
   <section class="wrapper site-min-height">
    <div>
<div class="row mt">
          <div class="col-lg-12">
            <h4 align="center">Tambah Anggota</h4>
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" method="POST" action="anggota-proses-update.php">
                  <div class="form-group ">
                    <label for="NIM" class="control-label col-lg-2">NIM</label>
                    <div class="col-lg-10">
                      <input class=" form-control" name="NIM" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="Nama" class="control-label col-lg-2">Nama</label>
                    <div class="col-lg-10">
                      <input class=" form-control"  name="Nama" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="Jenis_kelamin" class="control-label col-lg-2">Jenis_kelamin</label>
                    <div class="radio">
          <label><input  name="Jenis_kelamin" type="radio" value="L"  checked="" />Laki-laki</label>
          <label><input  name="Jenis_kelamin" type="radio" value="P" />perempuan</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="level_user" class="control-label col-lg-2">level user</label>
                    <div class="col-lg-10">
                     <?php 
                 $connect = mysqli_connect("localhost","root","","perpustakaan");
                 echo "<select name='level_user'>
                 <option value=0 selected class=form-control >---Pilih level user---</option>";
                 $tampil=$connect->query("SELECT * from user ORDER BY Nama");
                 while($data=mysqli_fetch_array($tampil)) {
                  echo "<option value=$data[level_user]>$data[nama]</option>";
                }
                echo "</select>"; ?>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="Alamat" class="control-label col-lg-2">Alamat</label>
                    <div class="col-lg-10">
                      <input class="form-control " name="Alamat" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="Jurusan" class="control-label col-lg-2">Jurusan</label>
                    <div class="col-lg-10">
                      <?php 
                 $connect = mysqli_connect("localhost","root","","perpustakaan");
                 echo "<select name='Jurusan'>
                 <option value=0 selected class=form-control>---Pilih Jurusan---</option>";
                 $tampil=$connect->query("SELECT * from Jurusan ORDER BY Jurusan");
                 while($data=mysqli_fetch_array($tampil)) {
                  echo "<option value=$data[id_jurusan]>$data[Jurusan]</option>";
                }
                echo "</select>"; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="Kecamatan" class="control-label col-lg-2">Kecamatan</label>
                    <div class="col-lg-10">
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

                  <div class="form-group">
                    <label for="Kabupaten" class="control-label col-lg-2">Kabupaten</label>
                    <div class="col-lg-10">
                     <?php 
                 $connect = mysqli_connect("localhost","root","","perpustakaan");
                 echo "<select name='Kabupaten'>
                 <option value=0 selected class=form-control>---Pilih Kabupaten---</option>";
                 $tampil=$connect->query("SELECT * from kabupaten ORDER BY kabupaten");
                 while($data=mysqli_fetch_array($tampil)) {
                  echo "<option value=$data[id_kabupaten]>$data[kabupaten]</option>";
                }
                echo "</select>"; ?>
                    </div>
                  </div>                  

                    <div class="form-group ">
                    <label for="Propinsi" class="control-label col-lg-2">Propinsi</label>
                    <div class="col-lg-10">
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
 </section>

<?php include'inc/footer.php'; ?>