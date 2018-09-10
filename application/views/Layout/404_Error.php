<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      $this->load->view('layout/header');
      $this->load->view('layout/csshandler');
    ?>
    <title>404 - Page Not Found</title>
  </head>

  <body>

    <div class="ht-100v d-flex align-items-center justify-content-center">
      <div class="wd-lg-70p wd-xl-50p tx-center pd-x-10">
        <h1 class="tx-100 tx-xs-140 tx-normal tx-gray-800 mg-b-0">404!</h1>
        <h5 class="tx-xs-24 tx-normal tx-orange mg-b-30 lh-5">Maaf Menu yang Anda Cari Tidak Dapat Kami Tampilkan</h5>
        <p class="tx-16 mg-b-30">Silahkan Masuk Kedalam Sistem dengan Menggunakan Tombol Dibawah Ini</p>
        <a class="btn btn-info" href="<?php echo base_url('c_login'); ?>">LOGIN</a>
        <div class="tx-center mg-t-20">... atau Kembali ke <a href="<?php echo base_url('c_dashboard'); ?>" class="tx-orange hover-info">Beranda</a></div>
      </div>
    </div><!-- ht-100v -->

    <?php
      $this->load->view('layout/jshandler');
    ?>

  </body>
</html>
