<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      $this->load->view('layout/header');
      $this->load->view('layout/csshandler');
    ?>
  </head>

  <body>
    <?php
      $this->load->view('layout/menu');
    ?>
    <div class="am-mainpanel">
      <div class="am-pagebody">

        <!-- your content goes here -->
        <?php 
          $this->load->view('detail/v_dokter');
         ?>

      </div><!-- am-pagebody -->
    </div><!-- am-mainpanel -->

    <?php
      $this->load->view('layout/jshandler');
    ?>

  </body>
</html>
