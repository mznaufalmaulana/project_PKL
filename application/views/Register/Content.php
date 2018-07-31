<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      $this->load->view('layout/header');
      $this->load->view('layout/csshandler');
    ?>
    
  </head>

  <body>
    <!-- alert -->
    <?php 
      if ($status==false) {
    ?>
    <div class="alert alert-danger mg-b-0" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      <strong class="d-block d-sm-inline-block-force">Oh Sorry!</strong> <?php echo $message ?>
    </div><!-- alert -->
    <?php
      }
     ?>

    <div class="am-signup-wrapper">
      <div class="am-signup-box">
        <div class="row no-gutters">
          <div class="col-lg-5">
            <div>
              <img src="<?php echo BASE_THEME.'/img/logo_awal.png' ?>" class="wd-150">
            </div>
          </div>
          <div class="col-lg-7">
            <h5 class="tx-gray-800 mg-b-25">Daftarkan Akun Anda</h5>

            <form method="POST" action="#">
              <div class="form-group">
                <label class="form-control-label">Email:</label>
                <input type="email" name="email" class="form-control" placeholder="Masukkan Alamat Email Anda" required>
              </div><!-- form-group -->

              <div class="row row-xs">
                <div class="col">
                  <div class="form-group">
                    <label class="form-control-label">Nama Depan:</label>
                    <input type="text" name="namaDepan" class="form-control" placeholder="Masukkan Nama Depan Anda" required>
                  </div><!-- form-group -->
                </div><!-- col -->
                <div class="col">
                  <div class="form-group">
                    <label class="form-control-label">Nama Belakang:</label>
                    <input type="text" name="namaBelakang" class="form-control" placeholder="Masukkan Nama Belakang Anda" required>
                  </div><!-- form-group -->
                </div><!-- col -->
              </div><!-- row -->

              <div class="form-group">
                <label class="form-control-label">Username:</label>
                <input type="text" name="uname" class="form-control" placeholder="Masukkan Username" required>
              </div><!-- form-group -->

              <div class="row row-xs">
                <div class="col">
                  <div class="form-group">
                    <label class="form-control-label">Kata Sandi:</label>
                    <input type="password" name="pass" class="form-control" placeholder="Masukkan Kata Sandi" required>
                  </div><!-- form-group -->
                </div><!-- col -->
                <div class="col">
                  <div class="form-group">
                    <label class="form-control-label">Konfirmasi Kata Sandi:</label>
                    <input type="password" name="conPass" class="form-control" placeholder="Konfirmasi Kata Sandi" required>
                  </div><!-- form-group -->
                </div><!-- col -->
              </div><!-- row -->


              <p>Sudah Memiliki Akun? <a href="<?php echo base_url('c_login')?>">Masuk Disini</a></p>

              <button type="submit" name="submit" class="btn btn-block pd-x-20">Daftar</button>
            </form>
          </div><!-- col-7 -->
        </div><!-- row -->
          <p class="tx-center tx-white-5 tx-12 mg-t-15">
          <?php
            $this->load->view('layout/footer');
          ?>
        </p>
      </div><!-- signin-box -->
    </div><!-- am-signin-wrapper -->

    <?php
      $this->load->view('layout/jshandler');
    ?>

  </body>
</html>