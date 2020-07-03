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
            <h4 align="center">Tambah List Harga Denda</h4>
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" method="POST" action="harga-tambah-proses.php">
                   <div class="form-group ">
                    <label for="id_jenis" class="control-label col-lg-2">ID Jenis</label>
                    <div class="col-lg-10">
                      <input class=" form-control" name="id_jenis" type="text" placeholder="ID Jenis" />
                    </div>
                  </div> 
                  <div class="form-group ">
                    <label for="jenis_denda" class="control-label col-lg-2">Jenis Denda</label>
                    <div class="col-lg-10">
                      <input class=" form-control" name="jenis_denda" type="text" placeholder="jenis_denda" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="harga" class="control-label col-lg-2">Harga/items</label>
                    <div class="col-lg-10">
                      <input class=" form-control" name="harga" type="text" placeholder="harga" />
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
