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
	</style>
</head>
<body>
		<div class="container-fluid">
			<div class="col-md-3">
				<h3>Kota</h3>
				<form>
					<label for='formCountries[]'>Select the countries that you have visited:</label><br>
					<select multiple="multiple" name="formCountries[]">
					    <option value="US">United States</option>
					    <option value="UK">United Kingdom</option>
					    <option value="France">France</option>
					    <option value="Mexico">Mexico</option>
					    <option value="Russia">Russia</option>
					    <option value="Japan">Japan</option>
					</select>
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
</body>
</html>