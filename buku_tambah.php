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
            <h4 align="center">Tambah Buku baru</h4>
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" method="POST" action="buku-tambah-proses.php">
                   <div class="form-group ">
                    <label for="id_Buku" class="control-label col-lg-2">id Buku</label>
                    <div class="col-lg-10">
                      <input class=" form-control" name="id_Buku" type="text" placeholder="id Buku" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="Judul" class="control-label col-lg-2">Judul</label>
                    <div class="col-lg-10">
                      <input class=" form-control" name="Judul" type="text" placeholder="Judul" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="tahun_terbit" class="control-label col-lg-2">Tahun terbit</label>
                    <div class="col-lg-10">
                      <input class=" form-control"  name="tahun_terbit" type="text" placeholder="Tahun terbit" />
                    </div>
                  </div>
                 <div class="form-group ">
                    <label for="penulis" class="control-label col-lg-2">Penulis</label>
                    <div class="col-lg-10">
                       <?php 
                 $connect = mysqli_connect("localhost","root","","perpustakaan");
                 echo "<select name='penulis'>
                 <option value=0 selected class=form-control >---Pilih Penulis---</option>";
                 $tampil=$connect->query("SELECT * from penulis ORDER BY penulis");
                 while($data=mysqli_fetch_array($tampil)) {
                  echo "<option value=$data[id_penulis]>$data[penulis]</option>";
                }
                echo "</select>"; ?>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="penerbit" class="control-label col-lg-2">Penerbit</label>
                    <div class="col-lg-10">
                     <?php 
                 $connect = mysqli_connect("localhost","root","","perpustakaan");
                 echo "<select name='penerbit'>
                 <option value=0 selected class=form-control >---Pilih Penerbit---</option>";
                 $tampil=$connect->query("SELECT * from penerbit ORDER BY penerbit");
                 while($data=mysqli_fetch_array($tampil)) {
                  echo "<option value=$data[id_penerbit]>$data[penerbit]</option>";
                }
                echo "</select>"; ?>
                    </div>
                  </div>
                   <div class="form-group ">
                    <label for="jenis_buku" class="control-label col-lg-2">Jenis Buku</label>
                    <div class="col-lg-10">
                      <?php 
                 $connect = mysqli_connect("localhost","root","","perpustakaan");
                 echo "<select name='jenis_buku'>
                 <option value=0 selected class=form-control >---Pilih Jenis Buku---</option>";
                 $tampil=$connect->query("SELECT * from jenis_buku ORDER BY jenis_buku");
                 while($data=mysqli_fetch_array($tampil)) {
                  echo "<option value=$data[id_jenis_buku]>$data[jenis_buku]</option>";
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