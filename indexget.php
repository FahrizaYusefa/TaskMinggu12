<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>

	<style type="text/css">
		.header{
			font-family: sans-serif;
			background-color: lightsalmon;
		}

		body{
			margin: 0;
			padding: 0;
			background-image: url(bg.jpg);
			font-family: sans-serif;
		}

		table{
			border: solid 1pt black;
			border-collapse: collapse;
			font-size: 1em;
			text-align: left;
		}

		td{
			border: solid 1pt black;
			padding: 10pt;
		}

		tr:nth-child(2n-1){
			background-color: #A9A9A9;
		}
	</style>
</head>

<body>
	<header>
		<div class="header">
			<div style="text-align: center;"><h1>Data</h1></div>
		</div>
	</header>

	<table border="1">
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><?php echo $_GET['namalengkap']; ?></td>
        </tr>

        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><?php echo $_GET['tempatlahir']; ?></td>
        </tr>

        <tr>
            <td>Tanggal Lahir</td>
			<td>:</td>
			<td><?php echo $_GET['tanggallahir']; ?></td>
		</tr>

		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><?php echo $_GET['jk']; ?></td>
		</tr>

		<tr>
			<td>Agama</td>
			<td>:</td>
			<td><?php echo $_GET['agama']; ?></td>
		</tr>

		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><?php echo $_GET['alamat']; ?></td>
		</tr>
        
        <tr>
			<td>No Telepon</td>
			<td>:</td>
			<td><?php echo $_GET['notelepon']; ?></td>
		</tr>

		<tr>
			<td>Email</td>
			<td>:</td>
			<td><?php echo $_GET['email']; ?></td>
		</tr>

		<tr>
			<td>Foto</td>
			<td>:</td>
			<td><img src="<?php echo $_GET['foto']; ?>" alt="" width="130px" height="150px"></td>
		</tr>
    </table>
</body>
</html>