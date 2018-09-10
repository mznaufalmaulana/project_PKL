<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      $this->load->view('layout/header');
      $this->load->view('layout/csshandler');
    ?>
    <title>Medique - Masuk</title>
  </head>

  <body>
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
    <div class="am-signin-wrapper">
      <div class="am-signin-box">
        <div class="row no-gutters">
          <div class="col-lg-5">
            <div>
              <img src="<?php echo BASE_THEME.'/img/logo_awal.png' ?>" class="wd-150">
            </div>
          </div>
          <div class="col-lg-7">
            <h5 class="tx-gray-800 mg-b-25">Masuk ke Akun Anda</h5>

            <form method="POST" action="#">
              <div class="form-group">
                <label class="form-control-label">Username</label>
                <input type="text" name="uname" class="form-control" placeholder="Masukkan Username Anda" required>
              </div><!-- form-group -->

              <div class="form-group">
                <label class="form-control-label">Kata Sandi</label>
                <input type="password" name="pass" class="form-control" placeholder="Masukkan Password Anda" required>
              </div><!-- form-group -->
              <p>Belum memiliki Akun? <a href="<?php echo base_url('c_register')?>">Daftar Sekarang</a></p>
              <button type="submit" name="submit" class="btn btn-block">Masuk</button>
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