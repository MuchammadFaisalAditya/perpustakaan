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
            <h4 align="center">Masukkan Data peminjam Buku</h4>
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" method="POST" action="NIM-tambah-proses.php">
                   <div class="form-group ">
                    <label for="id_NIM" class="control-label col-lg-2">ID Pinjam</label>
                    <div class="col-lg-10">
                      <input class=" form-control" name="id_NIM" type="text" placeholder="ID Pinjam" />
                    </div>
                  </div> 
                  <div class="form-group ">
                    <label for="NIM" class="control-label col-lg-2">NIM</label>
                    <div class="col-lg-10">
                      <input class=" form-control" name="NIM" type="text" placeholder="NIM" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="Nama" class="control-label col-lg-2">Nama</label>
                    <div class="col-lg-10">
                      <input class=" form-control" name="Nama" type="text" placeholder="Nama" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="tanggal_pinjam" class="control-label col-lg-2">Tanggal Pinjam</label>
                    <div class="col-lg-2">
                    <div>
                     <input class="form-control form-control-inline input-medium default-date-picker" size="16" type="date" value="">
                    <span class="help-block">Select date</span>
                  </div>
                    </div>
                  </div>
                   <div class="form-group ">
                    <label for="tanggal_pinjam" class="control-label col-lg-2">Tanggal Pinjam</label>
                    <div class="col-lg-2">
                    <div>
                     <input class="form-control form-control-inline input-medium default-date-picker" size="16" type="date" value="">
                    <span class="help-block">Select date</span>
                  </div>
                </div>
                </div>
                <div class="form-group ">
                    <label for="jurusan" class="control-label col-lg-2">Jurusan</label>
                    <div class="col-lg-10">
                      <?php 
                 $connect = mysqli_connect("localhost","root","","perpustakaan");
                 echo "<select name='Jurusan'>
                 <option value=0 selected class=form-control>---Pilih Jurusan---</option>";
                 $a=$connect->query("SELECT * from jurusan ORDER BY jurusan");
                 while($data=mysqli_fetch_array($a)) {
                  echo "<option value=$data[id_jurusan]>$data[Jurusan]</option>";
                }
                echo "</select>"; ?>
                    </div>
                  </div>
                <div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button type="submit" class="btn btn-theme" value="Save" name="Save">Save</button>
                    </div>
                  </div>
                </div>
                </form>
              </div>
            </div>
          </div>
 </section>

<?php include'inc/footer.php'; ?>
