<?php
include 'config.php';

$sql = "SELECT * FROM karyawan INNER JOIN departemen ON karyawan.ID_DEPARTEMEN=departemen.ID_DEPARTEMEN";
$query = mysqli_query($koneksi, $sql);
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CRUD Pegawai</title>
</head>
<body>
	<a href="tambah.php">Tambah Data</a>
	<table cellspacing="0" border="1">
		<tr>
			<th>Nama Karyawan</th>
			<th>Email</th>
			<th>Gaji</th>
			<th>Departemenk</th>
			<th>Kelola</th>
		</tr>

		<?php
		while ($data = mysqli_fetch_array($query)) {
			?>
			<tr>
				<td><?php echo $data['NAMA_KARYAWAN'] ?></td>
				<td><?php echo $data['EMAIL'] ?></td>
				<td><?php echo $data['GAJI'] ?></td>
				<td><?php echo $data['NAMA_DEPARTEMEN'] ?></td>
				<td><a href="edit.php?id=<?= $data['ID_DEPARTEMEN']?>">Edit</a> | <a href="hapus.php?id=<?= $data['ID_DEPARTEMEN']?>">Hapus</a></td>
			</tr>
		<?php
		}
		?>
	</table>
</body>
</html>