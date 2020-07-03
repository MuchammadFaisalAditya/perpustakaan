
<?php 
 include'inc/header.php';
 include'inc/sidebar_menu.php'; 
 ?>
<!--main content start-->
 <section id="main-content">
   <section class="wrapper site-min-height">
    <div>
      <div class="form-panel">
        <h4 align="center"><b>Upload Data Anggota</b></h4>
          <form action="aksi-anggota.php" method="post" enctype="multipart/form-data" >
          <input type="file" name="file">
          <button class="btn btn-theme">upload</button>
          </form>  
      </div>
    </div>
 </section>

<?php include'inc/footer.php'; ?>
