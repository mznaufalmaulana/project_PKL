<?php 
    foreach ($data_antrian as $key => $value) {    
      $tanggal;
      if ($value['intStatus'] == 1)
      {
        $warna = '#008040';
      }
      else
      {
        $warna = 'grey';
      }
      if (isset($value['dtAntrian'])) {
        $tanggal = explode("T", $value['dtAntrian']);
      }
    ?>
      <div class="row row-sm mg-t-15 mg-sm-t-20">

        <div class="col-md-12">
          <div style="background-color: <?= $warna ?>; color: white; padding: 20px 0px 5px 30px;">
            <h4> <?= $value['txtPartnerName'] ?> </h4>
            <p class="mg-b-20 mg-sm-b-30"> <?= $tanggal[0] ?> </p>
          </div>
          <div class="card pd-20 pd-sm-40">
            <table class="mg-b-0">
              <tbody>
                <tr>
                  <td>
                    No. Antrian Loket <br>
                    <h3 style="color: #fb9337;"><b><?= $value['txtNoAntrianLoket'] ?></b></h3>
                    Loket  <b> <?= $value['txtLoket'] ?> </b><br>
                    No. Antrian Saat Ini : <?= $value['txtNoAntrianLoketSaatIni'] ?>
                  </td>
                  <td>
                    No. Antrian Pelayanan <br>
                    <h3 style="color: #fb9337;"><b><?= $value['txtNoAntrianPoli'] ?></b></h3>
                    <b> <?= $value['txtJenisPelayanan'] ?> </b><br>
                    No. Antrian Saat Ini : <?= $value['txtNoAntrianPoliSaatIni'] ?>
                  </td>
                </tr>
              </tbody>
            </table>
          </div><!-- card -->
        </div><!-- col-6 -->
        
      </div><!-- row -->
    <?php  } ?>