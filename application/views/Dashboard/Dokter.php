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
                  <label for="contact-name" class="col-lg-2 control-label">Pilih Spesialis</label>

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
                    <button type="done" class="btn btn-primary" id="btnSubmit"">Sorting</button>
                  </div>
                </div> <!-- Akhir Tombol -->
            </form>

        <?php 
          // foreach ($data_dokter as $key => $value)
          // {
          //   echo "<table border=\"0\">";
          //     echo "<tr>";
          //       echo "<td>";
          //         if (is_null($value['imgAvatar'])) {
          //           echo "<img class=\"wd-200 img-circle\" src=\" ". BASE_THEME. '/img/user_default.png' ." \">";
          //         }
          //         else {
          //           echo "<img class=\"wd-200 img-circle\" src=\" ". $value['imgAvatar'] ."\">";
          //         }
          //       echo "</td>";
          //       echo "<td>";
          //         echo "<h3><b><a href=\"". base_url('c_detail/get_detail')."?idDokter=".$value['intIDDokter']; "\">".$value['txtNamaDokter']."</a></b></h3>";
          //         echo $value['txtNoHP']."<br/>";
          //         echo $value['txtAlamat']."<br/>";
          //         echo $value['txtProvinsi']."<br/>";
          //         echo $value['txtKota']."<br/>";
          //         echo $value['txtSpesialis']."<br/>";
          //       echo "</td>";
          //     echo "</tr>";
          //   echo "</table>";
          // }
        ?>

        <?php 
          foreach ($data_dokter as $key => $value) {
        ?>
          <div class="card">
            <div class="card-body">
              <table border="0">
                <tr>
                  <td>
                    <img class="wd-200" src="<?php BASE_THEME.'/img/user_default.png'?>">
                  </td>
                  <td>
                  <h5 class="card-title"><a href="<?php echo base_url('c_detail/get_detail').'?idDokter='.$value['intIDDokter']; ?>""> <?php echo $value['txtNamaDokter'];?> </a></h5>
                  <p class="card-text">
                    <?php echo $value['txtNoHP'];?> <br>
                    <?php echo $value['txtAlamat'];?> <br>
                    <?php echo $value['txtProvinsi'];?> <br>
                    <?php echo $value['txtKota'];?> <br>
                    <?php echo $value['txtSpesialis'];?> <br>
                  </p>
                  </td>
                </tr>
              </table>
            </div>
          </div><!-- card -->
        <?php
          }
        ?>

        <script type="text/javascript">
          // f$(document).ready(function(){
          //     tampil_data_barang();   //pemanggilan fungsi tampil barang.
               
          //     $('#dataDokter').dataTable();
                
          //     //fungsi tampil barang
          //     function tampil_data_barang(){
          //         $.ajax({
          //             type  : 'ajax',
          //             url   : '<?php //echo base_url()?>/c_dashboard/viewDokter',
          //             async : false,
          //             dataType : 'json',
          //             success : function(data){
          //                 var html = '';
          //                 var i;
          //                 for(i=0; i<data.length; i++){
          //                     html += '<tr>'+
          //                             '<td>'+data[i].txtNamaDokter+'</td>'+
          //                             '<td>'+data[i].txtNoHP+'</td>'+
          //                             '<td>'+data[i].txtAlamat+'</td>'+
          //                             '</tr>';
          //                 }
          //                 $('#show_data').html(html);
          //             }
       
          //         });
          //     }
       
          // });
        </script>