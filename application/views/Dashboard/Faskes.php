<form action="<?php echo base_url('c_dashboard') ?>" class="form-horizontal" role="form" method="POST">
                <!-- pilih kota -->
                <div class="form-group">
                  <label for="contact-name" class="col-lg-2 control-label">Pilih Kota</label>

                  <div class="col-lg-8">
                    <select class="form-control" id="catCity" name="kota">
                      <option value="0" disabled selected>Pilih Kota</option>
                      <?php 
                        foreach ($data_kota as $key => $value) {
                          echo "<option value=\"".$value['intIDKota']."\">".$value['txtKota']."</option>";
                        }
                       ?>
                    </select>
                  </div>
                </div> <!-- Akhir form kota -->

                <!-- Pilih Spesialis -->
                <div class="form-group">
                  <label for="contact-name" class="col-lg-2 control-label">Pilih Kota</label>

                  <div class="col-lg-8">
                    <select class="form-control" id="catSpesialis" name="spesialis">
                      <option value="0" disabled selected>Pilih Spesialis</option>
                      <?php 
                        foreach ($data_spesialis as $key => $value) {
                          echo "<option value=\"".$value['intIDSpesialisDokter']."\">".$value['txtSpesialis']."</option>";
                        }
                       ?>
                    </select>
                  </div>
                </div> <!-- Akhir form spesialis -->

                <!-- Jenis Kelamin -->
                <div class="form-group">
                  <label for="contact-name" class="col-lg-2 control-label">Pilih Jenis Kelamin</label>

                  <div class="col-lg-8">
                    <input type="radio" name="jk_group" value="0" checked="checked"> Semua<br>
                    <input type="radio" name="jk_group" value="1"> Laki-laki<br>
                    <input type="radio" name="jk_group" value="2"> Perempuan<br>
                  </div>
                </div> <!-- Akhir form Jenis Kelamin -->

                <div class="form-group">
                  <div class="col-lg-10 col-lg-offset-2">
                    <button type="done" class="btn btn-primary" id="btnSubmit">Sorting</button>
                  </div>
                </div> <!-- Akhir Tombol -->
</form>