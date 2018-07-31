<div class="card pd-20 pd-sm-40">
	<?php foreach ($data as $key => $value) { ?>
		
	<h3 class="card-title">
		<?php echo $value['txtNamaDokter'] ?>
	</h3>
	<p class="mg-b-20 mg-sm-b-30">Searching, ordering and paging goodness will be immediately added to the table, as shown in this example.</p>

	<div class="table-wrapper">
		<table id="datatable1" class="table display responsive nowrap">
			<thead>
				<tr>
					<th class="wd-25p">Lokasi Praktek</th>
					<th class="wd-20p">Jenis Pelayanan</th>
					<th class="wd-15p">Jam Pelayanan</th>
					<th class="wd-25p">Antrian</th>
					<th class="wd-15p">Kuota</th>
					<th class="wd-10p"></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Tiger</td>
					<td>Nixon</td>
					<td>System Architect</td>
					<td>2011/04/25</td>
					<td>$320,800</td>
					<td><a href="<?php echo base_url('c_login') ?>">Booking</a></td>
				</tr>
			</tbody>
		</table>
	</div><!-- table-wrapper -->
	<?php } ?>
</div><!-- card -->