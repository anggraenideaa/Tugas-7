<?php
	include 'config.php';

	$id = (int) $_GET['id'];

	if($id) {
		$sql = "DELETE FROM karyawan WHERE ID_DEPARTEMEN='$id'";
		$query = mysqli_query($koneksi, $sql);

		$sql = "DELETE FROM departemen WHERE ID_DEPARTEMEN='$id'";
		$query = mysqli_query($koneksi, $sql);
	}

	header('Location: index.php');
	exit;
?>
