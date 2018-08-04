<?php 
    foreach ($data_antrian as $key => $value) {    
      if ($value['intStatus'] == 1)
      {
        $warna = 'green';
      }
      else
      {
        $warna = 'grey';
      }
    ?>
      <div class="row row-sm mg-t-15 mg-sm-t-20">

        <div class="col-md-12" style="background-color: <?php echo $warna ?>; padding-left: 0px;">
          <div class="card pd-20 pd-sm-40">
            <table class="mg-b-0">
              <tbody>
                <tr>
                  <td>
                    <h4 class="card-body-title"> <?php echo $value['txtPartnerName'] ?> </h4>
                    <p class="mg-b-20 mg-sm-b-30"> <?php echo $value['dtAntrian'] ?> </p>
                  </td>
                  <td>
                    No. Antrian Loket <br>
                    <h5><?php echo $value['txtNoAntrianLoket'] ?></h5>
                    Loket  <b> <?php echo $value['txtLoket'] ?> </b><br>
                    No. Antrian Saat Ini : <?php echo $value['txtNoAntrianLoketSaatIni'] ?>
                  </td>
                  <td>
                    No. Antrian Pelayanan <br>
                    <h5><?php echo $value['txtNoAntrianPoli'] ?></h5>
                    <b> <?php echo $value['txtJenisPelayanan'] ?> </b><br>
                    No. Antrian Saat Ini : <?php echo $value['txtNoAntrianPoliSaatIni'] ?>
                  </td>
                </tr>
              </tbody>
            </table>
          </div><!-- card -->
        </div><!-- col-6 -->
        
      </div><!-- row -->
    <?php  } ?>