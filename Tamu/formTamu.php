<!DOCTYPE html>
<html>
<head>
	<title>Form Buku Tamu</title>
</head>
<body>
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "tamu";

	//create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);


	$sql = "SELECT * FROM buku_tamu ORDER BY ID_BT ASC";
	$query = mysqli_query($conn, $sql);
	?>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<h1>DAFTAR BUKU TAMU</h1>
		<table cellspacing="0" border="1">
			<tr>
				<th>No.</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Isi</th>
				<th>Kelola</th>
			</tr>

			<?php
			while ($data = mysqli_fetch_array($query)) {
				?>
				<tr>
					<td><?php echo $data['ID_BT']; ?></td>
					<td><?php echo $data['NAMA']; ?></td>
					<td><?php echo $data['EMAIL']; ?></td>
					<td><?php echo $data['ISI']; ?></td>
					<td><a href="hapusData.php?id=<?= $data['ID_BT']?>">Hapus</a></td>
				</tr>
			<?php
			}
			?>
		</table>
	</body>
	</html>
	

	<h1>INPUT BUKU TAMU</h1>
	<form action="formDB.php" method="POST">
		<p>
			Nama
			<br>
			<input type="text" name="nama" id="nama">
		</p>

		<p>
			Email
			<br>
			<input type="text" name="email" id="email">
		</p>

		<p>
			Isi
			<br>
			<textarea name="isi" id="isi" cols="20" rows="6"></textarea>
		</p>
		
		<p>
			<button type="submit" id="submit">Submit</button>

			<button type="reset" id="reset">Reset</button>
		</p>
	</form>
</body>
</html>