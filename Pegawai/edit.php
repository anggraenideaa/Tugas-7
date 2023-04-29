<?php
	include 'config.php';

	$id = (int) $_GET['id'];
	$sql = "SELECT * FROM karyawan INNER JOIN departemen ON karyawan.ID_DEPARTEMEN=departemen.ID_DEPARTEMEN WHERE karyawan.ID_DEPARTEMEN='$id'";
	$query = mysqli_query($koneksi, $sql);
	$data = mysqli_fetch_array($query);
?>

<form action="" method="post">
	<input type="hidden" name="id" value="<?=$data['ID_DEPARTEMEN'] ?>">
	<label for="NAMA_KARYAWAN">Nama Karyawan</label>
	<input type="text" name="NAMA_KARYAWAN" value="<?=$data['NAMA_KARYAWAN'] ?>">
	<br>
	<br>
	<label for="EMAIL">Email</label>
	<input type="text" name="EMAIL" value="<?=$data['EMAIL'] ?>">
	<br>
	<br>
	<label for="GAJI">Gaji</label>
	<input type="text" name="GAJI" value="<?=$data['GAJI'] ?>">
	<br>
	<br>
	<label for="NAMA_DEPARTEMEN">Nama Departemen</label>
	<input type="text" name="NAMA_DEPARTEMEN" value="<?=$data['NAMA_DEPARTEMEN'] ?>">
	<br>
	<br>
	<input type="submit" name="submit">
</form>

<?php
	if($_POST){
		$sql = "UPDATE karyawan SET NAMA_KARYAWAN='{$_POST['NAMA_KARYAWAN']}',
									EMAIL = '{$_POST['EMAIL']}',
									GAJI = '{$_POST['GAJI']}'
									WHERE ID_DEPARTEMEN='{$_POST['id']}'";
		$query = mysqli_query($koneksi, $sql);

		$sql = "UPDATE departemen SET NAMA_DEPARTEMEN = '{$_POST['NAMA_DEPARTEMEN']}' 
								WHERE ID_DEPARTEMEN='{$_POST['id']}'";
		$query = mysqli_query($koneksi, $sql);
		
		if($query){
			echo "Data berhasil diubah";
			header('location: index.php');
		} else {
			echo "Data gagal diubah". mysqli_error($koneksi);
		}
	}

?>