<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "pegawai_penggajian";

	//create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	//check connection
	if (!$conn) {
		die("Connection failed: ".mysqli_connect_error());
	}

	//create database
	$sql = "CREATE TABLE departemen (
	ID_DEPARTEMEN INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	NAMA_DEPARTEMEN VARCHAR(100) NOT NULL
	)";

	$sql2 = "CREATE TABLE karyawan (
	ID_KARYAWAN INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	ID_DEPARTEMEN INT(11) UNSIGNED NOT NULL, 
	NAMA_KARYAWAN VARCHAR(200) NOT NULL,
	EMAIL VARCHAR(200) NOT NULL,
	GAJI INT(10)NOT NULL,
	FOREIGN KEY (ID_DEPARTEMEN) REFERENCES departemen(ID_DEPARTEMEN) ON DELETE CASCADE ON UPDATE CASCADE
	)";
	if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql2)) {
		echo "Sukses membuat table";
	}else {
		echo "Gagal membuat table: ". mysqli_error($conn);
	} 


	mysqli_close($conn);
?>