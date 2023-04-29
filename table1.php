<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "tamu";

	//create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	//check connection
	if (!$conn) {
		die("Connection failed: ".mysqli_connect_error());
	}

	//create database
	$sql = "CREATE TABLE buku_tamu (
	ID_BT INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	NAMA VARCHAR(200),
	EMAIL VARCHAR(50),
	ISI TEXT)";
	if (mysqli_query($conn, $sql)) {
		echo "Sukses membuat table";
	}else {
		echo "Gagal membuat table: ". mysqli_error($conn);
	}

	mysqli_close($conn);
?>