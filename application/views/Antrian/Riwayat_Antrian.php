<?php 
    foreach ($data_antrian as $key => $value) {    
      $tanggal;
      if ($value['intStatus'] == 1)
      {
        $warna = 'green';
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

        <div class="col-md-12" style="background-color: <?php echo $warna ?>; padding-left: 0px;">
          <div class="card pd-20 pd-sm-40">
            <h4 class="card-body-title"> <?= $value['txtPartnerName'] ?> </h4>
            <p class="mg-b-20 mg-sm-b-30"> <?= $tanggal[0] ?> </p>
            <hr/>
            <table class="mg-b-0">
              <tbody>
                <tr>
                  <td>
                    No. Antrian Loket <br>
                    <h5><?= $value['txtNoAntrianLoket'] ?></h5>
                    Loket  <b> <?= $value['txtLoket'] ?> </b><br>
                    No. Antrian Saat Ini : <?= $value['txtNoAntrianLoketSaatIni'] ?>
                  </td>
                  <td>
                    No. Antrian Pelayanan <br>
                    <h5><?= $value['txtNoAntrianPoli'] ?></h5>
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