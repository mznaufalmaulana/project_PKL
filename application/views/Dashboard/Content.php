<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      $this->load->view('layout/header');
      $this->load->view('layout/csshandler');
    ?>
    <title>Medique - Beranda</title>
  </head>

  <body>
    <?php
      $this->load->view('layout/menu');
    ?>
    
    <div class="am-pagetitle">
      <h5 class="am-title">Beranda</h5>
      <!-- <form id="searchBar" class="search-bar" action="index.html">
        <div class="form-control-wrapper">
          <input type="search" class="form-control bd-0" placeholder="Cari...">
        </div>
        <button id="searchBtn" class="btn btn-orange"><i class="fa fa-search"></i></button>
      </form> -->
    </div><!-- am-pagetitle -->

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

    <script type="text/javascript">

      // filtering dokter
      $('#btnSubmit-dokter').click(function(){
          var namaDokter = $('#namaDokter').val();
          var kota = $('#kota').val();
          var spesialis = $('#spesialis').val();
          var jnsKelamin = document.getElementsByName('jk_group');
          var jk_group = '';

          for (var i = 0; i < jnsKelamin.length; i++) {
            jk_group[i]
            if (jnsKelamin[i].checked)
            {
              jk_group = jnsKelamin[i].value;
            }
          }
          
          $.ajax({
            url:"<?php echo base_url('c_dashboard/filter_dokter') ?>",
            method:"POST",
            data:{namaDokter:namaDokter, kota:kota, spesialis:spesialis, jk_group:jk_group},
            success:function(data)
            {
              $('#dataDokter').html(data);
            }
          });

        });
      $('#btnSubmit-faskes').click(function(){
          var namaFaskes = $('#namaFaskes').val();
          var fasKota = $('#fasKota').val();
          var fasKlinik = $('#fasKlinik').val();
          var jamKesehatan = document.getElementsByName('jamkes');
          var jamkes = [];

          for (var i = 0; i < jamKesehatan.length; i++) {
            if (jamKesehatan[i].checked) {
              jamkes += jamKesehatan[i].value;
            }
            else {
              jamkes += 0;
            }
          }

          $.ajax({
            url:"<?php echo base_url('c_dashboard/filter_faskes') ?>",
            method:"POST",
            data:{namaFaskes:namaFaskes, fasKota:fasKota, fasKlinik:fasKlinik, jamkes:jamkes},
            success:function(data)
            {
              // alert(jamkes);
              $('#dataFaskes').html(data);
            }
          });

        });
    </script>

  </body>
</html>
