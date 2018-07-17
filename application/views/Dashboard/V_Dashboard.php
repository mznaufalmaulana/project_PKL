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
	</style>
</head>
<body>
		<div class="container-fluid">
			<div class="col-md-3">
				<form method="POST" action="<?php echo base_url('c_dashboard') ?>">
					<h3>Kota</h3>
						<select id="bismillah">
							<option value="" disabled selected>Pilih Kota</option>
							
						</select>
					
					<h3>Spesialis</h3>
						<select>
							<option value="" disabled selected>Pilih Spesialis</option>
							<option value="">Umum</option>
							<option value="">Anak</option>
						</select>

					<h3>Jenis Kelamin</h3>
						<input type="radio" name="0" value="semua" checked="checked"> Semua<br>
						<input type="radio" name="1" value="laki"> Laki-laki<br>
						<input type="radio" name="2" value="perempuan"> Perempuan<br>
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
			$.ajax({
				type: "POST",
				url: "<?php echo base_url('C_Dashboard/getCategory') ?>",
				contentType: "application/json",
				dataType: "json",
			}).done(function(city){
				var select = document.getElementById("bismillah");
				for (var i = 0; i < city.length; i++) {
					var c = document.createElement("option");
					c.text = city[i].txtKota;
					select.options.add(c, 1);
				};
			});
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