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

    	<a href="buku.php">Lihat Semua data</a>

    </br>
    <?php 
	$connect = mysqli_connect("localhost","root","","perpustakaan");
	$id_buku = $_GET['id_buku'];
	$query = $connect->query("SELECT b.id_buku, b.judul, b.tahun_terbit, c.penulis, d.penerbit, e.jenis_buku from buku b
    inner join penulis c on b.id_penulis=c.id_penulis
    inner join penerbit d on b.id_penerbit=d.id_penerbit
    inner join jenis_buku e on e.id_jenis_buku=e.id_jenis_buku where id_buku='$id_buku'");
    $data = mysqli_fetch_array($query)
	?>
<div class="row mt">
          <div class="col-lg-12">
            <h4 align="center">Edit Data Buku</h4>
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" method="POST" action="buku-update.php">
                  <div class="form-group ">
                    <label for="id_buku" class="control-label col-lg-2">id_Buku</label>
                    <div class="col-lg-10">
                      <input class="form-control" name="id_buku" type="text" value="<?php echo $data['id_buku']; ?>" required>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="Judul" class="control-label col-lg-2">Judul</label>
                    <div class="col-lg-10">
                      <input class="form-control" name="Judul" type="text" value="<?php echo $data['judul']; ?>" required>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="tahun terbit" class="control-label col-lg-2">tahun terbit</label>
                    <div class="col-lg-10">
                      <input class=" form-control"  name="tahun terbit" type="text" value="<?php echo $data['tahun_terbit'];?>" required>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="penulis" class="control-label col-lg-2">Penulis</label>
                    <div class="col-lg-10">
                    <!--<input class="form-control "  name="penulis" type="text" value="<?php echo $data['penulis'];?>"required>-->
                       <?php 
                 $connect = mysqli_connect("localhost","root","","perpustakaan");
                 echo "<select name='penulis'>
                 <option value=0 selected class=form-control>---Pilih penulis---</option>";
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
                     <!-- <input class="form-control "  name="penerbit" type="text" value="<?php echo $data['penerbit'];?>" required>-->
                     <?php 
                 $connect = mysqli_connect("localhost","root","","perpustakaan");
                 echo "<select name='penerbit'>
                 <option value=0 selected class=form-control>---Pilih penerbit---</option>";
                 $tampil=$connect->query("SELECT * from penerbit ORDER BY penerbit");
                 while($data=mysqli_fetch_array($tampil)) {
                  echo "<option value=$data[id_penerbit]>$data[penerbit]</option>";
                }
                echo "</select>"; ?>
                    </div>
                  </div>
                    <div class="form-group ">
                    <label for="jenis buku" class="control-label col-lg-2">Jenis buku</label>
                    <div class="col-lg-10">
                    <!--<input class="form-control " name="jenis buku" type="text" value="<?php echo $data['jenis_buku'];?>" required>-->
                    <?php 
                 $connect = mysqli_connect("localhost","root","","perpustakaan");
                 echo "<select name='jenis buku'>
                 <option value=0 selected class=form-control>---Pilih jenis buku---</option>";
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
               </div>
 </section>

<?php include'inc/footer.php'; ?>