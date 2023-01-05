<?php include 'adm_header.php'; ?>

  <div class="container">
    <br><br><br><br><br>
      <h2 class="text-center">Hai, Administrator</h2><p></p><p class="text-center">Selamat datang di portal di Penerimaan Siswa Baru</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      
  </div>
  <div class="container-fluid text-center">
    <div class="container marketing">
          <div class="row">
            <div class="col-lg-4">
              <p style="color : green">
                <i class="fas fa-users fa-5x"></i>
              </p>
              <h2>Peserta Seleksi</h2>
              <p>Informasi seluruh <br>pendaftar yang akan diseleksi.</p>
              <p><a class="btn btn-success" href="adm_all_peserta.php">Selengkapnya &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <p style="color : blue">
                <i class="fas fa-vote-yea fa-5x"></i>
              </p>
              
              <h2>Peserta Lolos</h2>
              <p>Informasi mengenai <br>peserta yang lolos.</p>
              <p><a class="btn btn-primary " href="adm_peringkat_lolos.php">Selengkapnya &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <p style="color : red">
                <i class="fas fa-times-circle fa-5x"></i>
              </p>
             <h2>Peserta Tidak Lolos</h2>
              <p>Informasi mengenai peserta <br>yang tidak lolos.</p>
              <p><a class="btn btn-danger " href="adm_peringkat_tdk_lolos.php">Selengkapnya &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <br>
              <p style="color : black">
                <i class="fas fa-user fa-5x"></i>
              </p>
              <h2>Informasi user</h2>
              <p>Informasi mengenai user dan <br>menghapus data.</p>
              <p><a class="btn btn-dark" href="adm_user_peserta.php">Selengkapnya &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
          </div>
          <br>
          <br>
          <br>
  </div>  
  </div>
<div class="row clearfix">
<?php include 'adm_footer.php'; ?>
