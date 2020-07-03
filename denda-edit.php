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

    	<a href="harga_denda.php">Lihat Semua data</a>

    </br>
    <?php 
	$connect = mysqli_connect("localhost","root","","perpustakaan");
	$id_jenis = $_GET['id_jenis'];
	$query = $connect->query( "SELECT * from harga_denda where id_jenis");
    $data = mysqli_fetch_array($query)
	?>
<div class="row mt">
          <div class="col-lg-12">
            <h4 align="center">Edit Data Denda</h4>
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" method="POST" action="buku-update.php">
                  <div class="form-group ">
                    <label for="id_jenis" class="control-label col-lg-2">ID Jenis</label>
                    <div class="col-lg-10">
                      <input class="form-control" name="id_jenis" type="text" value="<?php echo $data['id_jenis']; ?>" required>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="jenis_denda" class="control-label col-lg-2">Jenis Denda</label>
                    <div class="col-lg-10">
                      <input class="form-control" name="jenis_denda" type="text" value="<?php echo $data['jenis_denda']; ?>" required>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="harga" class="control-label col-lg-2">Harga</label>
                    <div class="col-lg-10">
                      <input class=" form-control"  name="harga" type="text" value="<?php echo $data['harga'];?>" required>
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