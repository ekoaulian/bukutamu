<?php

//variable koneksi = (host, username, pasword, nama database)
$koneksi = mysqli_connect("localhost","root","","bukutamu_ipem");

//cek koneksi
if (mysqli_connect_errno()) {
	echo "koneksi database gagal " . mysqli_connect_error();
}else{
	//echo "Berhasil terkoneksi"; 
}
?>