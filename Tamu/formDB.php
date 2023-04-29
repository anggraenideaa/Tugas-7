<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "tamu";

	//create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$isi = $_POST['isi'];

	$sql = "INSERT INTO buku_tamu (nama, email, isi)
			VALUES ('$nama', '$email', '$isi')";

	if(mysqli_query($conn, $sql)){
			echo "Data berhasil diubah";
			header('location: formTamu.php');
		} else {
			echo "Data gagal diubah". mysqli_error($koneksi);
		}
	
?>