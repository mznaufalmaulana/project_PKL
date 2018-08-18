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

        <div class="card pd-20 pd-sm-40">
          <?php foreach ($data as $key => $value) { ?>
            <h3 class="card-title"><?php echo $value['txtPartnerName'] ?></h3>
            <p class="card-text">
            <?php echo $value['txtProfileInfo'];?> <br>
            </p>

          <?php } ?>
          <p class="mg-b-20 mg-sm-b-30">Silahkan Tentukan Hari/Tanggal Yang Anda Inginkan</p>
          <input type="text" name="idDokter" id="idDokter" value="<?= $id ?>" hidden>
          <div class="wd-200">
            <div class="input-group form-control-wrapper">
                
              <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
              <input type="search" id="dateSelection" name="dateSelection" class="form-control fc-datepicker" placeholder="YYYY/MM/DD">
              <input class="btn btn-orange active" type="button" name="filter" id="filter" value="Cari">
              
            </div>
          </div><!-- wd-200 -->
          <br>
          <div class="table-wrapper">
            <table id="dataTable" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-25p">Nama Dokter</th>
                  <th class="wd-20p">Jenis Pelayanan</th>
                  <th class="wd-25p">Jam Pelayanan</th>
                  <th class="wd-15p">Antrian</th>
                  <th class="wd-15p">Kuota</th>
                  <th class="wd-10p"></th>
                </tr>
              </thead>
              <tbody>
              <?php foreach ($jadwal as $key => $value) { ?>
                <tr>
                  <td hidden> <input type="text" name="idPartner" id="idPartner" value="<?= $value['intIDPartner'] ?>" hidden> </td>
                  <td> <?php echo $value['txtNamaPegawai'] ?> </td>
                  <td> <?php echo $value['txtJenisPelayanan'] ?> </td>
                  <td> <?php echo $value['dtJamMulai']. ' - ' .$value['dtJamSelesai'] ?> </td>
                  <td> <?php echo $value['intJumlahAntrian'] ?> </td>
                  <td> <?php echo $value['intKuota'] ?> </td>
                  <td> <a id="booking" href="" data-toggle="modal" data-target="#pilihLoket" data-role="booking"> Booking </a></td>
                </tr>
              <?php  } ?>
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->


        <div id="pilihLoket" class="modal fade">
          <div class="modal-dialog modal-dialog-vertical-center" role="document">
            <div class="modal-content bd-0 tx-14">
              <div class="modal-header pd-y-20 pd-x-25">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">PILIH LOKET</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body pd-25">
                <!-- <h4 class="lh-3 mg-b-20">Silahkan Pilih Loket yang Akan Dituju</h4> -->
                <div id="jenisLayanan"></div>
                <!-- <a id="jenisLayanan" href="" type="button" class="btn btn-info pd-x-25"></a> -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div><!-- modal-dialog -->
        </div><!-- modal -->


        <div id="inputBerhasil" class="modal fade">
          <div class="modal-dialog modal-dialog-vertical-center" role="document">
            <div class="modal-content bd-0 tx-14">
              <div class="modal-header pd-y-20 pd-x-25">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Proses Booking Berhasil</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body pd-25">
                <h4 class="lh-3 mg-b-20">Berhasil</h4>
                <div id="jenisLayanan"></div>
                <!-- <a id="jenisLayanan" href="" type="button" class="btn btn-info pd-x-25"></a> -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div><!-- modal-dialog -->
        </div><!-- modal -->

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
        // $(document).on("click","#filter", function(){

        // })

        //filtering
        $('#filter').click(function(){
          var dateSelection = $('#dateSelection').val();
          var idDokter = $('#idDokter').val();
          if (dateSelection != '')
          {
            $.ajax({
              url:"<?php echo base_url('c_detail_dokter/get_data_selection') ?>",
              method:"POST",
              data:{dateSelection:dateSelection, idDokter:idDokter},
              success:function(data)
              {
                $('#dataTable').html(data);
              }
            });
          }
        });

        //booking
        $('#booking').click(function(){
          var idPartner = $('#idPartner').val();
          $.ajax({
            url:"<?php echo base_url('c_detail_dokter/get_data_loket') ?>",
            method:"POST",
            data:{idPartner:idPartner},
            success:function(data)
            {
              // alert(idPartner);
              $('#jenisLayanan').html(data);
            }
          });
        });

        $('#dataInput').click(function(){
          var idPartner = $('#idPartner').val();
          $.ajax({
            url:"<?php echo base_url('c_detail_dokter/booking_dokter') ?>",
            method:"POST",
            data:{idPartner:idPartner},
            success:function(data)
            {
              // alert(idPartner);
              $('#jenisLayanan').html(data);
            }
          });
        });
        
      });
    </script>

  </body>
</html>
