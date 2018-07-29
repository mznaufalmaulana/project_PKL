<form action="<?php echo base_url('c_dashboard') ?>" class="form-horizontal" role="form" method="POST">
                <!-- pilih kota -->
                <div class="form-group">
                  <label for="contact-name" class="col-lg-2 control-label">Pilih Kota</label>

                  <div class="col-lg-8">
                    <select class="form-control" id="faskk" name="faskota">
                      <option value="0" disabled selected>Pilih Kota</option>
                      <?php
                        for ($i = 0; $i < count($faskes_kota); $i++){
                          echo "<option value=\"".$faskes_kota[$i]['intIDKota']."\">".$faskes_kota[$i]['txtKota']."</option>";
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
                        for ($i = 0; $i < count($faskes_klinik); $i++){
                          echo "<option value=\"".$faskes_klinik[$i]['intIDJenisPelayanan']."\">".$faskes_klinik[$i]['txtJenisPelayanan']."</option>";
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
                      for ($i = 0; $i < count($faskes_jamkes); $i++){
      									echo "<input type=\"checkbox\" name=\"jamkes[]\" value=\"".$faskes_jamkes[$i]['intIDJenisJamKes']."\">".$faskes_jamkes[$i]['txtJenisJamKes']."<br>";
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
for ($i = 0; $i < count($data_faskes); $i++){
  echo "<table border=\"0\">";
    echo "<tr>";
      echo "<td>";
        echo "<img src=\" ".$data_faskes[$i]['imgAvatar']."\">";
      echo "</td>";
      echo "<td>";
        echo "<h3>".$data_faskes[$i]['txtPartnerName']."</h3>";
        echo "<b>".$data_faskes[$i]['txtAlamat'].", ".$data_faskes[$i]['txtKota'].", ".$data_faskes[$i]['txtProvinsi'].", Indonesia</b><br>";
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
        }
      echo "</td>";
    echo "</tr><hr>";
  echo "</table>";
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
  //             url   : '<?php echo base_url()?>/c_dashboard/viewFaskes',
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
