<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      $this->load->view('layout/header');
      $this->load->view('layout/csshandler');
    ?>
    <title>Medique - Edit Profil</title>
  </head>

  <body>
    <?php
      $this->load->view('layout/menu');
    ?>
    <?php
      $isLogin = $this->session->userdata('intIDPartner');
    ?>

    <div class="am-pagetitle">
      <h5 class="am-title">Edit Profil</h5>
    </div><!-- am-pagetitle -->

    <div class="am-mainpanel">
      <div class="am-pagebody">

        <form  method="POST" enctype="multipart/form-data" action="<?= base_url('c_profil/insertData') ?>">
        <div class="card pd-20 pd-sm-40">
          <div class="row pd-t-20">
            <?php foreach ($dataProfil as $key => $value) { 
              $imgAvatar;
                if (isset($value['txtAvatar'])) {
                  $imgAvatar = $value['txtAvatar'];
                } else {
                  $imgAvatar = BASE_THEME.'img/user_default.png';
                }
                if (isset($value['dtTanggalLahir'])) {
                  $tanggal = explode("T", $value['dtTanggalLahir']);
                }
              ?>
            <div class="col-md-3">
              <img class="wd-250" src="<?= $imgAvatar ?>">
            </div>
            <div class="col-md-9">
              <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                <input type="text" name="idUser" value="<?= $isLogin ?>" hidden>
                <input type="text" name="avatar" value="<?= $value['txtAvatar'] ?>" hidden>
                <div class="row row-xs" title="Nama Pengguna">
                  <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> Nama Pengguna</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" name="username" class="form-control" value="<?= $value['txtNamaUser']; ?>" placeholder="Masukkan Nama Pengguna" required>
                  </div>
                </div><!-- row -->
                <div class="row row-xs mg-t-20" title="Nomor KTP">
                  <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> Nomor KTP</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" name="noKTP" class="form-control" value="<?= $value['txtNoKTP']; ?>" placeholder="Masukkan Nomor KTP Anda" required>
                  </div>
                </div>
                <div class="row row-xs mg-t-20" title="Tempat Lahir">
                  <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> Tempat Lahir</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" name="tmpLahir" class="form-control" value="<?= $value['txtTempatLahir']; ?>" placeholder="Masukkan Tempat Lahir Anda" required>
                  </div>
                </div>
                <div class="row row-xs mg-t-20" title="Tanggal Lahir">
                  <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> Tanggal Lahir</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="search" name="tglLahir" class="form-control fc-datepicker" placeholder="YYYY/MM/DD" data-target="dtAntrian" required>
                  </div>
                </div>
                <div class="row row-xs mg-t-20" title="Alamat">
                  <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> Alamat</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <textarea rows="4" name="alamat" class="form-control" placeholder="Masukkan Alamat Anda"><?= $value['txtAlamat']; ?></textarea>
                  </div>
                </div>
                <div class="row row-xs mg-t-20" title="Nomor Telepon">
                  <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> Nomor Telepon</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" name="noTelp" class="form-control" value="<?= $value['txtPhone']; ?>" placeholder="Masukkan Nomor Telepon Anda" required>
                  </div>
                </div>
                <?php } ?>
                <div class="row row-xs mg-t-20" title="Jenis Jaminan Kesehatan">
                  <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> Jenis Jaminan Kesehatan</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <select class="form-control" name="jenisJamkes">
                      <option value="0" selected>Pilih Jenis Jaminan Kesehatan</option>
                      <option value="0">Tidak Ada</option>
                      <?php foreach ($dataJamkes as $key => $value) { ?>
                        <option value="<?= $value['intIDJenisJamKes'] ?>"><?= $value['txtJenisJamKes'] ?></option>
                      <?php } ?>
                    </select>
                    <!-- <input type="text" class="form-control" value="<?= $value['txtJenisJamKes']; ?>" placeholder="Enter email address"> -->
                  </div>
                </div>
                <?php foreach ($dataProfil as $key => $value) { ?>
                <div class="row row-xs mg-t-20" title="Nomor Jaminan Kesehatan">
                  <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> Nomor Jaminan Kesehatan</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" name="noJaminanKesehatan" class="form-control" value="<?= $value['txtNoJaminanKesehatan']; ?>" placeholder="Masukkan Nomor Jaminan Kesehatan Anda" required>
                  </div>
                </div>
                <div class="row row-xs mg-t-20" title="Nomor Jaminan Kesehatan">
                  <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> Pilih File Foto Profil</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="file" name="fotoProfil"  class="form-control">
                  </div>
                </div>
                <?php } ?>
                <div class="row row-xs mg-t-30">
                  <div class="col-sm-8 mg-l-auto">
                    <div class="form-layout-footer">
                      <button type="submit" name="submit" class="btn btn-info mg-r-5">Submit Form</button>
                      <a href="<?php echo base_url('c_profil').'?idUser='.$isLogin; ?>" class="btn btn-secondary">Cancel</a>
                    </div><!-- form-layout-footer -->
                  </div><!-- col-8 -->
                </div>
                
              </div><!-- card -->
          
            </div>
          </div>
        </div>
        </form>

      </div><!-- am-pagebody -->
    </div><!-- am-mainpanel -->

    <?php
      $this->load->view('layout/jshandler');
    ?>

    <?php 
      $this->load->view('layout/footer');
    ?>

    <script>
      $(document).ready(function(){
        $(function(){

          'use strict';
          var date = $('.fc-datepicker').datepicker({ dateFormat: 'yy-mm-dd' }).val();

          // Datepicker
          $(".fc-datepicker").datepicker("setDate", new Date());

          $('.fc-datepicker').datepicker({
            "setDate": new Date(),
            "autoclose": true,
            showOtherMonths: true,
            selectOtherMonths: true
          });

          $('#datepickerNoOfMonths').datepicker({
            showOtherMonths: true,
            selectOtherMonths: true,
            numberOfMonths: 2
          });
        });

      });
    </script>

  </body>
</html>
