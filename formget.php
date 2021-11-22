<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulir Pendaftaran</title>
	<style type="text/css">
		.header{
			font-family: sans-serif;
			background-color: lightsalmon;
		}
		
		.pendaftaran {
			font-style: italic;
			color: black;
		}

		body{
			margin: 0;
			padding: 0;
			background-image: url(bg.jpg);
			font-family: sans-serif;
		}

		#daftar-box{
			position: relative;
			background-color: pink;
			padding: 0;
			margin: 5% auto;
			height: 400px;
			width: 600px;
			box-shadow: 0 2px 4px rgba(0,0,0,0.6);
		}

		p{
			font-size: 0.8em;
			text-align: center;
		}

	</style>
</head>

<body>
	<header>
		<div class="header">
			<div style="text-align: center;"><h1>FORM PENDAFTARAN</h1></div>
		</div>
	</header>

	<div id="daftar-box">
		<h2>Data Diri</h2><hr><br>

		<form action="indexget.php" method="GET">
			<fieldset>
				<legend>Data Pribadi</legend>
				<table>
					<tr>
						<td>Nama Lengkap</td>
						<td>:</td>
						<td><input type="text" name="namalengkap"></td>
					</tr>

					<tr>
						<td>Tempat Lahir</td>
						<td>:</td>
						<td><input type="text" name="tempatlahir"></td>
					</tr>

					<tr>
						<td>Tanggal Lahir</td>
						<td>:</td>
						<td><input type="date" name="tanggallahir"></td>
					</tr>

					<tr>
						<td>Jenis Kelamin</td>
						<td>:</td>
						<td>
							<input type="radio" name="jk" value="Laki-laki">Laki-Laki
							<input type="radio" name="jk" value="Perempuan">Perempuan
						</td>
					</tr>

					<tr>
						<td>Agama</td>
						<td>:</td>
						<td><input type="text" name="agama"></td>
					</tr>

					<tr>
						<td>Alamat</td>
						<td>:</td>
						<td><input type="text" name="alamat"></td>
					</tr>

					<tr>
						<td>No Telepon</td>
						<td>:</td>
						<td><input type="number" name="notelepon"></td>
					</tr>

					<tr>
						<td>Email</td>
						<td>:</td>
						<td><input type="text" name="email"></td>
					</tr>
				</table>
			</fieldset>
			<br>
			<form method="GET" action="indexget.php" enctype="multipart/form-data">
				<label><strong>Upload Foto : </strong></label>
				<input type="file" name="foto"><br>
				<input type="submit" value="Submit">
			</form>
		</form>
	</div>

	<footer>
		<div>
			<p style="text-align: center;">copyright &copy; 2021</p>
	</footer>
</body>
</html>