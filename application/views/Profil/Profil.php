<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      $this->load->view('layout/header');
      $this->load->view('layout/csshandler');
    ?>
    <title>Medique - Profil</title>
  </head>

  <body>
    <?php
      $this->load->view('layout/menu');
    ?>
    <?php
      $isLogin = $this->session->userdata('intIDPartner');
    ?>
    
    <div class="am-pagetitle">
      <h5 class="am-title">Profil</h5>
    </div><!-- am-pagetitle -->

    <div class="am-mainpanel">
      <div class="am-pagebody">
        
        <div class="card pd-20 pd-sm-40">
          <?php foreach ($dataProfil as $key => $value) { 
                $imgAvatar;
                $tanggal;
                if (isset($value['txtAvatar'])) {
                  $imgAvatar = $value['txtAvatar'];
                } else {
                  $imgAvatar = BASE_THEME.'img/user_default.png';
                }

                if (isset($value['dtTanggalLahir'])) {
                  $tanggal = explode("T", $value['dtTanggalLahir']);
                }
          ?>
          <div class="row pd-t-20">
            <div class="col-md-3">
              <img class="wd-200" src="<?= $imgAvatar ?>">
            </div>
            <div class="col-md-9">
              <ul class="profile-info-detail">
                <p>
                  <b><font size="6"><?= $value['txtNamaUser'] ?> </font></b>
                  <a href="<?php echo base_url('c_profil/editProfil').'?idUser='.$isLogin; ?>" title="Edit Profil">&nbsp;<i class="icon ion-edit"></i>&nbsp;Edit Profil</a>
                </p>
              
                <ul class="list-inline">
                  
                  <li class="mg-t-10" title="Nomor KTP">
                    <i class="fa fa-credit-card"> Nomor KTP</i>
                    <!-- <p>Nomor KTP</p> -->
                    &nbsp;<?= $value['txtNoKTP'] ?>
                  </li>

                  <li class="mg-t-10" title="Tanggal Lahir">
                    <i class="fa fa-calendar"></i>
                    &nbsp;<?= $value['txtTempatLahir'] ?>&nbsp;<?= $tanggal[0] ?>
                  </li>
                  
                  <li class="mg-t-10" title="Alamat">
                    <i class="fa fa-map-marker"></i>
                    &nbsp;<?= $value['txtAlamat'] ?>
                  </li>

                  <li class="mg-t-10" title="Nomor Telepon">
                    <i class="fa fa-phone"></i>
                    &nbsp;<?= $value['txtPhone'] ?>
                  </li>

                  <li class="mg-t-10" title="Jenis Jaminan Kesehatan">
                    <i class="fa fa-plus"></i>
                    &nbsp;<?= $value['txtJenisJamKes'] ?>&nbsp;<?= $value['txtNoJaminanKesehatan'] ?>
                  </li>
                  
                </ul>
              </ul>
            </div>
          </div>
          <?php } ?>
        </div>

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
