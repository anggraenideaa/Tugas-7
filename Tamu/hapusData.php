<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "tamu";

	//create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	$id = (int) $_GET['id'];

	if($id) {
		$sql = "DELETE FROM buku_tamu WHERE ID_BT='$id'";
		$query = mysqli_query($conn, $sql);
	}

	header('Location: formTamu.php');
	exit;
?>
