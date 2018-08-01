<div class="card pd-20 pd-sm-40">
	<?php foreach ($data as $key => $value) { ?>
		
	<h3 class="card-title">
		<?php echo $value['txtNamaDokter'] ?>
	</h3>

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
					<td> <a href="<?php echo base_url('c_detail/get_data_jenis').'?idPartner='.$value['intIDPartner']; ?>"> Booking </a></td>
				</tr>
			<?php  } ?>
			</tbody>
		</table>
	</div><!-- table-wrapper -->
</div><!-- card -->

