<!DOCTYPE html>
<html>
<head>
	<title>Medique - Daftar</title>
	<link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.css">
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
			background-image: url("img/back_login.jpg");
			background-size: cover;
			background-position: center;
			background-attachment: fixed;
			font-family: sans-serif;
			font-size: 16px;
			background-repeat: no-repeat;
			color: black;
		}
		.loginbox {
			background: rgba(241,241,241,0.7);
			padding: 50px;
			margin: 50px 0px 50px 0px;
		}
		#avatar {
			width: 10%;
			height: 10%;
			border-radius: 50%;
		}
		input {
			width: 100%;
			margin-bottom: 20px;
			padding: 10px 10px;
			height: 50px;
			border: none;
			border-bottom: 1px solid black;
			background-color: transparent;
		}
		p {
			text-align: center;
			font-size: 11px;
			margin-bottom: 20px;
		}
		button {
			width: 50%;
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
	<!-- <div class="loginbox">
		<img src="img/avatar.png" id="avatar">
		<h1 style="text-align: center; color: black;">Daftar</h1>
		<div class="container-fluid">
			<form method="POST" action="<?php echo base_url('c_register/insert_data')?>">
				<input type="text" placeholder="Masukkan Nama Lengkap" name="fname" id="textBox" required>
				<input type="email" placeholder="Masukkan Email" name="email" id="textBox" required>
				<input type="text" placeholder="Masukkan Username" name="uname" id="textBox" required>
				<input type="password" placeholder="Masukkan Password" name="pass" id="textBox" required>
				<input type="password" placeholder="Konfirmasi Password" name="conPass" id="textBox" required>
				<div align="center"><button type="submit" id="btnSubmit">Selesai</button></div>
			</form>
		</div>
	</div> -->


	<div class="container-fluid">
		<div class="col-sm-4"></div>
		
		<!-- menu utama -->
		<div class="col-sm-4 loginbox">
			<img src="img/avatar.png" id="avatar">
			<h1 style="text-align: center; color: black;">Masuk</h1>
			<div class="container-fluid">
				<form method="POST" action="<?php echo base_url('c_register/insert_data')?>">
					<input type="text" placeholder="Masukkan Nama Lengkap" name="fname" id="textBox" required>
					<input type="email" placeholder="Masukkan Email" name="email" id="textBox" required>
					<input type="text" placeholder="Masukkan Username" name="uname" id="textBox" required>
					<input type="password" placeholder="Masukkan Password" name="pass" id="textBox" required>
					<input type="password" placeholder="Konfirmasi Password" name="conPass" id="textBox" required>
					<div align="center"><button type="submit" id="btnSubmit">Selesai</button></div>
				</form>
			</div>
		</div>

		<div class="col-sm-4"></div>
	</div>
</body>
</html>
