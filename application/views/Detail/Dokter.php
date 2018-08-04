<div class="card pd-20 pd-sm-40">
	<?php foreach ($data as $key => $value) { ?>
	
	<table class="mg-b-0">
		<tbody>
			<tr>
				<td class="wd-15p">
					<img class="wd-150" src="<?php echo BASE_THEME.'img/user_default.png'?>">
				</td>
				<td style="padding-left: 10px;">
					<h3 class="card-title"><?php echo $value['txtNamaDokter'] ?></h3>
					<p class="card-text">
					<?php echo $value['txtProfile'];?> <br>
					</p>
				</td>
			</tr>
		</tbody>
	</table>


	<?php } ?>
	<p class="mg-b-20 mg-sm-b-30">Silahkan Tentukan Hari/Tanggal Yang Anda Inginkan</p>
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
					<th class="wd-25p">Lokasi Praktek</th>
					<th class="wd-20p">Jenis Pelayanan</th>
					<th class="wd-25p">Jam Pelayanan</th>
					<th class="wd-15p">Antrian</th>
					<th class="wd-15p">Kuota</th>
					<th class="wd-10p"></th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($jadwal as $key => $value) {	?>
				<tr>
					<td> <?php echo $value['txtPartnerName'] ?> </td>
					<td> <?php echo $value['txtJenisPelayanan'] ?> </td>
					<td> <?php echo $value['dtJamMulai']. ' - ' .$value['dtJamSelesai'] ?> </td>
					<td> <?php echo $value['intJumlahAntrian'] ?> </td>
					<td> <?php echo $value['intKuota'] ?> </td>
					<td> <a id="loketPelayanan" href="<?php echo base_url('c_detail/get_data_jenis').'?idPartner='.$value['intIDPartner']; ?>" data-toggle="modal" data-target="#pilihLoket"> Booking </a></td>
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
				<h4 class="lh-3 mg-b-20">Silahkan Pilih Loket yang Akan Dituju</h4>
				<?php foreach ($dataPelayanan as $key => $value) { ?>
					<a id="jenisLayanan" href="<?php echo base_url('c_detail/get_data_jenis').'?idLoket='.$value['intIDLoket']; ?>" type="button" class="btn btn-info pd-x-25">
						<?php echo $value['txtLoket'] ?>	
					</a>
				<?php } ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div><!-- modal-dialog -->
</div><!-- modal -->
