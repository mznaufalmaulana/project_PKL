<?php
	$isLogin = $this->session->userdata('intIDPartner');
	if ($isLogin == '') {
		redirect(base_url()."");
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Medique - Halaman Utama</title>
	<link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<meta name="description" content="A Tuts+ course">
	<meta name="author" content="Naufal Maulana">

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="js/jquery-3.3.1.min.js"></script>

	<style type="text/css">
		body {
			margin: 0px;
			padding: 0px;
			background-image: url("img/back_dashboard.jpg");
			background-size: cover;
			background-position: center;
			background-attachment: fixed;
			font-family: sans-serif;
			font-size: 16px;
			background-repeat: no-repeat;
			color: black;
		}
		select {
			width: 100%;
			padding: 5px;
		}
		button {
			width: 100%;
			border: none;
			outline: none;
			border-radius: 5px;
			height: 40px;
			background-color: #37b60d;
			color: white;
		}
		button:hover {
			background-color: green;
		}
	</style>
</head>
<body>
		<!-- Sidebar/menu -->
	<!-- <nav class="w3-sidebar w3-collapse w3-orange w3-animate-left" style="z-index:3;width:300px;" id="mySide"><br>
		<div class="w3-container w3-center">
			<a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-tiny w3-padding w3-hover-amber" title="close menu">
				<i class="fa fa-remove"></i>
			</a>
			<h4><b>BEM FILKOM</b></h4>
			<p class="w3-text-white"><b><i>Badan Eksekutif Mahasiswa</i></b></p>
		</div>
		<div class="w3-bar-block">
			<a href="" class="w3-bar-item w3-button w3-hover-amber w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i><?php //echo $this->session->//userdata('akunAktif')->nama?></a>
			<a href="" class="w3-bar-item w3-button w3-hover-amber w3-padding"><i class="fa fa-INFO-CIRCLE fa-fw w3-margin-right"></i><?php //echo $this->session->userdata('akunAktif')->jabatan?></a>
			<a href="<//?php //echo base_url("C_Akun/logout") ?>" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-amber w3-padding"><i class="fa fa-sign-out fa-fw w3-margin-right"></i>LOGOUT</a>
		</div>
	</nav> -->

		<div class="container-fluid">
			<div class="col-md-3">
				<a href="<?php echo base_url('c_dashboard')?>">Dokter</a>
				<a href="<?php echo base_url('c_dashboard_faskes')?>">Faskes</a>
				<form method="POST" action="<?php echo base_url('c_dashboard_faskes') ?>">
					<h3>Kota</h3>
					<select class="form-control" id="faskk" name="faskota">
						<option value="0" disabled selected>Pilih Kota</option>
						<?php
							for ($i = 0; $i < count($faskes_kota); $i++){
								echo "<option value=\"".$faskes_kota[$i]['intIDKota']."\">".$faskes_kota[$i]['txtKota']."</option>";
							}
							 ?>
						</select>

					<h3>Klinik</h3>
					<select class="form-control" id="faskk" name="fasklinik">
						<option value="0" disabled selected>Pilih Klinik</option>
						<?php
							for ($i = 0; $i < count($faskes_klinik); $i++){
								echo "<option value=\"".$faskes_klinik[$i]['indtIDJenisPelayanan']."\">".$faskes_klinik[$i]['txtJenisPelayanan']."</option>";
							}
						?>
						</select>

						<h3>Jaminan Kesehatan</h3>
							<?php 
								foreach ($faskes_jamkes as $key => $value) {
									echo "<input type=\"checkbox\" name=\"jamkes\" value=\"".$value['intIDJenisJamKes']."\"> ".$value['txtJenisJamKes']."<br>";
								}
							 ?>
					<br>
					<button type="submit" id="btnSubmitFilter">Cari</button>
				</form>
			</div>
			<div class="col-md-9">
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
						echo "</tr>";
					echo "</table>";
					}
				?>
			</div>
		</div>


</body>
</html>
