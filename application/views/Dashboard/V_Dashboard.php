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
			border-radius: 20px;
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
			<a href="<?php //echo base_url("C_Akun/logout") ?>" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-amber w3-padding"><i class="fa fa-sign-out fa-fw w3-margin-right"></i>LOGOUT</a>
		</div>
	</nav> -->

		<div class="container-fluid">
			<div class="col-md-3">
				<form method="POST" action="<?php echo base_url('c_dashboard') ?>">
					<h3>Kota</h3>
						<select class="form-control" id="catCity" name="kota">
							<option value="0" disabled selected>Pilih Kota</option>
							<?php 
								foreach ($data_kota as $key => $value) {
									echo "<option value=\"".$value['intIDKota']."\">".$value['txtKota']."</option>";
								}
							 ?>
						</select>
					
					<h3>Spesialis</h3>
						<select class="form-control" id="catCity" name="spesialis">
							<option value="0" disabled selected>Pilih Spesialis</option>
							<?php 
								foreach ($data_spesialis as $key => $value) {
									echo "<option value=\"".$value['intIDSpesialisDokter']."\">".$value['txtSpesialis']."</option>";
								}
							 ?>
						</select>

					<h3>Jenis Kelamin</h3>
						<input type="radio" name="jk_group" value="0" checked="checked"> Semua<br>
						<input type="radio" name="jk_group" value="1"> Laki-laki<br>
						<input type="radio" name="jk_group" value="2"> Perempuan<br><br>

					<button type="submit" id="btnSubmit">Cari</button>
				</form>
			</div>
			<div class="col-md-9">
				<?php 
					foreach ($data_dokter as $key => $value)
					{
						echo "<table border=\"0\">";
							echo "<tr>";
								echo "<td>";
									echo "<img src=\" ". $value['imgAvatar'] ."\">";
								echo "</td>";
								echo "<td>";
									echo "<h3>".$value['txtNamaDokter']."</h3><br/>";
									echo $value['txtNoHP']."<br/>";
									echo $value['txtAlamat']."<br/>";
									echo $value['txtProvinsi']."<br/>";
									echo $value['txtKota']."<br/>";
									echo $value['txtSpesialis']."<br/>";
								echo "</td>";
							echo "</tr>";
						echo "</table>";
					}
				?>
			</div>
		</div>

		<script type="text/javascript">
			// function getCategoryCity(){
			// 	$.ajax({
			// 		type: "POST"
			// 		url: "<?php //echo base_url('C_Dashboard/getCategory')?>",
			// 		dataType: "json",
			// 		success: function(city){
			// 			parsedobj = JSON.parse(result)
			// 			var appendata;
			// 			$.each(parsedobj.city, function(index, value){
			// 				appenddata += "<option value = '" + index + " '>" + value.region + " </option>";
			// 			})
			// 			$('#catCity').html(appenddata);
			// 		}
			// 	})
			// }
			// function detCategorySpesialis(){

			// }


			// $.ajax({
			// 	type: "POST",
			// 	url: "<?php //echo base_url('C_Dashboard/getCategory')?>",
			// 	dataType: "json",
			// 	success: function(city){
				// var select = document.getElementById("catCity");
				// for (var i = 0; i < city.length; i++) {
					// var c = document.createElement("option");
					// c.text = citi[i].txtKota;
					// select.options.add(c, 1);
			// 		console.log(city);
			// 		document.write("gusna")
			// 	};

			// });
			// document.write("ygvygbnubv");
			// success: function(result){
   //                   parsedobj = JSON.parse(result)
   //                   var appenddata='';
   //                      $.each(parsedobj.city, function(index, value) 
   //                      {
   //                          appenddata += "<option value = '" + index + "'>" + value.city + " </option>";    
   //                      });

   //                      $('#catCity').html(appenddata); 
   //              },
   //              error: function(xhr, textStatus, error){
   //                  console.log(xhr.statusText);
   //                  console.log(textStatus);
   //                  console.log(error);
   //              }
   //          });
   		</script>
</body>
</html>