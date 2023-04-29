<form action="" method="post">
	<label for="NAMA_DEPARTEMEN">Nama Departemen</label>
	<input type="text" name="NAMA_DEPARTEMEN">
<br>
<br>
	<label for="NAMA_KARYAWAN">Nama Karyawan</label>
	<input type="text" name="NAMA_KARYAWAN">
<br>
<br>
	<label for="EMAIL">Email</label>
	<input type="text" name="EMAIL">
<br>
<br>
	<label for="GAJI">Gaji</label>
	<input type="text" name="GAJI">
<br>
<br>

	
	<input type="submit" name="submit">
</form>

<?php
include 'config.php';

if ($_POST) {
	// query untuk memasukkan data ke dalam tabel "departemen"
	$sql1 = "INSERT INTO departemen (NAMA_DEPARTEMEN)
			 VALUES ('{$_POST['NAMA_DEPARTEMEN']}')";
	$query1 = mysqli_query($koneksi, $sql1);

	// query untuk memasukkan data ke dalam tabel "karyawan"
	$id_departemen = mysqli_insert_id($koneksi); // mendapatkan ID_DEPARTEMEN yang baru saja di-generate
	$sql2 = "INSERT INTO karyawan (ID_DEPARTEMEN, NAMA_KARYAWAN, EMAIL, GAJI) 
			 VALUES ('$id_departemen', '{$_POST['NAMA_KARYAWAN']}', '{$_POST['EMAIL']}', '{$_POST['GAJI']}')";
	$query2 = mysqli_query($koneksi, $sql2);

	if ($query1 && $query2) {
		echo "Data berhasil disimpan";
		header('location: index.php');
	} else {
		echo "Data gagal disimpan: " . mysqli_error($koneksi);
	}
}
?>


