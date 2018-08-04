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
        <div class="card bd-0">
          <div class="card-header bg-light">
            <ul class="nav nav-tabs nav-tabs-for-light card-header-tabs">
              <li class="nav-item">
                <a class="nav-link active" data-toggle='tab' href="#dokter">Dokter</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle='tab' href="#faskes">Fasilitas Kesehatan</a>
              </li>
            </ul>
          </div><!-- card-header -->

          <div class="tab-content pd-20 pd-sm-40">
            <!-- Laman Dokter -->
            <div id="dokter" class="tab-pane active"> 
              <?php
                $this->load->view('dashboard/dokter.php');
              ?>
            </div> <!-- Akhir Laman Dokter -->

            <!-- Laman Faskes -->
            <div id="faskes" class="tab-pane">
              <?php
                $this->load->view('dashboard/faskes.php');
              ?>
            </div> <!-- Akhir Laman Faskes -->
          </div> <!-- Akhir Tab Content -->
        </div><!-- card -->

      </div><!-- am-pagebody -->
      <?php
        $this->load->view('layout/footer');
      ?>
    </div><!-- am-mainpanel -->

    <?php
      $this->load->view('layout/jshandler');
    ?>

  </body>
</html>
