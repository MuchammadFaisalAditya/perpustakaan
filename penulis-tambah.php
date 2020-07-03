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
            <h4 align="center">Tambah Penulis</h4>
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" method="POST" action="Penulis-tambah-proses.php">
                   <div class="form-group ">
                    <label for="id_penulis" class="control-label col-lg-2">ID Penulis</label>
                    <div class="col-lg-10">
                      <input class=" form-control" name="id_penulis" type="text" placeholder="ID Penulis" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="penulis" class="control-label col-lg-2">Penulis</label>
                    <div class="col-lg-10">
                      <input class=" form-control" name="penulis" type="text" placeholder="Penulis" />
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