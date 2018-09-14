            <!-- <form  class="form-horizontal" role="form" method="POST"> -->

                <!-- Cari Dokter -->
                <div class="row row-xs mg-t-20">
                  <label class="col-sm-3 form-control-label">Cari Dokter</label>

                  <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                    <input class="form-control" type="text" id="namaDokter" name="namaDokter" placeholder="Masukkan Nama Dokter">
                  </div>
                </div> <!-- Akhir form cari dokter -->

                <!-- pilih kota -->
                <div class="row row-xs mg-t-20">
                  <label class="col-sm-3 form-control-label">Pilih Kota</label>

                  <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                    <select class="form-control" id="kota" name="kota">
                      <option value="0" disabled selected>Pilih Kota</option>
                      <?php foreach ($data_kota as $key => $value) { ?>
                          <option value="<?= $value['intIDKota'] ?>"><?= $value['txtKota'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div> <!-- Akhir form kota -->

                <!-- Pilih Spesialis -->
                <div class="row row-xs mg-t-20">
                  <label class="col-sm-3 form-control-label">Pilih Spesialis</label>

                  <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                    <select class="form-control" id="spesialis" name="spesialis">
                      <option value="0" disabled selected>Pilih Spesialis</option>
                      <?php foreach ($data_spesialis as $key => $value) { ?>
                        <option value="<?= $value['intIDSpesialisDokter'] ?>"><?= $value['txtSpesialis'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div> <!-- Akhir form spesialis -->

                <!-- Jenis Kelamin -->
                <div class="row row-xs mg-t-20">
                  <label class="col-sm-3 form-control-label">Pilih Jenis Kelamin</label>

                  <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                    <input type="radio" name="jk_group" value="0" checked="checked">&nbsp;Semua<br>
                    <input type="radio" name="jk_group" value="1">&nbsp;Laki-laki<br>
                    <input type="radio" name="jk_group" value="2">&nbsp;Perempuan<br>
                  </div>
                </div> <!-- Akhir form Jenis Kelamin -->

                <div class="row row-xs mg-t-20">
                  <div class="col-sm-3 form-control-label"></div>
                  <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                    <input class="btn btn-primary" type="button" name="btnSubmit-dokter" id="btnSubmit-dokter" value="Cari">
                  </div>
                </div> <!-- Akhir Tombol -->
            <!-- </form> --> 

        <div class="card" id="dataDokter">
          <?php
            foreach ($data_dokter as $key => $value) {
              $imgAvatar;
              if (isset($value['imgAvatar'])) {
                $imgAvatar = $value['imgAvatar'];
              } else {
                $imgAvatar = BASE_THEME.'img/user_default.png';
              }
          ?>
            <div class="card-body">
              <table class="mg-b-0">
                <tbody>
                  <tr>
                    <td>
                      <img class="wd-150" src="<?php echo $imgAvatar?>">
                    </td>
                    <td style="padding-left: 10px;">
                      <a href="<?php echo base_url('c_detail_dokter').'?idDokter='.$value['intIDDokter']; ?>">
                        <h5 class="card-title"><?php echo $value['txtNamaDokter'];?> </h5>
                      </a>
                      <p class="card-text">
                        <?php echo $value['txtNoHP'];?> <br>
                        <?php echo $value['txtAlamat'];?> <br>
                        <?php echo $value['txtProvinsi'];?> <br>
                        <?php echo $value['txtKota'];?> <br>
                        <?php echo $value['txtSpesialis'];?> <br>
                      </p>
                    </td>
                  </tr><hr>
                </tbody>
              </table>
            </div>
          <?php
            }
          ?>
        </div> <!-- card -->
