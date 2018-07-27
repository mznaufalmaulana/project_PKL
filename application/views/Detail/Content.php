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
        <div class="card bd-1"> <!-- Awal halaman -->
          <!-- Profil Dokter -->
          <h3>Data Dokter</h3>
          
          <!-- Data Dokter -->
          <table class="table table-striped" id="jadwalDokter">
            <thead>
              <tr>
                  <th>Lokasi Praktek</th>
                  <th>Jenis Pelayanan</th>
                  <th>Jam Pelayanan</th>
                  <th>Antrian</th>
                  <th>Kuota</th>
                  <th></th>
              </tr>
            </thead>
            <tbody id="show_data">
              
            </tbody>
          </table>
          
        </div>

      </div><!-- am-pagebody -->
    </div><!-- am-mainpanel -->

    <?php
      $this->load->view('layout/jshandler');
    ?>

  </body>
</html>
