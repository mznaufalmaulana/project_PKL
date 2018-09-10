<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      $this->load->view('layout/header');
      $this->load->view('layout/csshandler');
    ?>
    <title>Medique - Riwayat Antrian</title>
  </head>

  <body>
    <?php
      $this->load->view('layout/menu');
    ?>
    <div class="am-pagetitle">
      <h5 class="am-title">Riwayat Antrian</h5>
    </div><!-- am-pagetitle -->

    <div class="am-mainpanel">
      <div class="am-pagebody">

        <!-- your content goes here -->
        <?php 
          $this->load->view('antrian/riwayat_antrian');
          // $this->load->view('antrian/riwayat');
         ?>

      </div><!-- am-pagebody -->
    </div><!-- am-mainpanel -->

    <?php
      $this->load->view('layout/jshandler');
    ?>
    <?php 
      $this->load->view('layout/footer');
    ?>

  </body>
</html>
