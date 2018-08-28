<form action="<?php echo base_url('c_dashboard') ?>" class="form-horizontal" role="form" method="POST">
                <!-- pilih kota -->
                <div class="form-group">
                  <label for="contact-name" class="col-lg-2 control-label">Pilih Kota</label>

                  <div class="col-lg-8">
                    <select class="form-control" id="faskk" name="faskota">
                      <option value="0" disabled selected>Pilih Kota</option>
                      <?php
                        foreach ($faskes_kota as $key => $value) {
                          echo "<option value=\"".$value['intIDKota']."\">".$value['txtKota']."</option>";
                        }
                      ?>
                    </select>
                  </div>
                </div> <!-- Akhir form kota -->

                <!-- Pilih Klinik -->
                <div class="form-group">
                  <label for="contact-name" class="col-lg-2 control-label">Pilih Klinik</label>

                  <div class="col-lg-8">
                    <select class="form-control" id="faskk" name="fasklinik">
                      <option value="0" disabled selected>Pilih Klinik</option>
                      <?php
                        foreach ($faskes_klinik as $key => $value) {
                          echo "<option value=\"".$value['intIDJenisPelayanan']."\">".$value['txtJenisPelayanan']."</option>";
                        }
                      ?>
                    </select>
                  </div>
                </div> <!-- Akhir form klinik -->

                <!-- Jaminan Kesehatan -->
                <div class="form-group">
                  <label for="contact-name" class="col-lg-2 control-label">Pilih Jaminan Kesehatan</label>

                  <div class="col-lg-8">
                    <?php
                      foreach ($faskes_jamkes as $key => $value) {
      									echo "<input type=\"checkbox\" name=\"jamkes[]\" value=\"".$value['intIDJenisJamKes']."\">".$value['txtJenisJamKes']."<br>";
      								}
                    ?>
                  </div>
                </div> <!-- Akhir form Jaminan Kesehatan -->

                <div class="form-group">
                  <div class="col-lg-10 col-lg-offset-2">
                    <button type="done" class="btn btn-primary" id="btnSubmitFilter">Sorting</button>
                  </div>
                </div> <!-- Akhir Tombol -->
</form>
<?php
$i = 0;
foreach ($data_faskes as $key => $value) {
  ?>
  <div class="card">
    <div class="card-body">
      <table class="mg-b-0">
        <tbody>
          <tr>
            <td style="padding-left: 10px;">
              <a href="<?php echo base_url('c_detail_faskes').'?idFaskes='.$value['intIDPartner']; ?>">
                <h5 class="card-title"><?php echo $value['txtPartnerName']; ?></h5>
              </a>
                <p class="card-text">
                  <?php echo $value['txtAlamat'] ?> <br>
                  <?php echo $value['txtKota'].", ".$value['txtProvinsi']; ?>, Indonesia <br>
                  <?php
                    $keys = array_keys($list_layanan);
                    for ($j = 0; $j < count($list_layanan[$i]); $j++){
                      echo $list_layanan[$i][$j]['txtJenisPelayanan'];
                      if ($j+1 < count($list_layanan[$i])){
                          echo ", ";
                      }
                    }
                    echo "<br>";
                    for ($j = 0; $j < count($list_jamkes[$i]); $j++){
                      echo $list_jamkes[$i][$j]['txtJenisJamKes'];
                      if ($j+1 < count($list_jamkes[$i])){
                          echo ", ";
                      }
                    } $i++;
                  ?>
                </p>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
<?php } ?>
