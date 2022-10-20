<?php
$koneksi = mysqli_connect("localhost","root","","keuangan");
// Check connection
if (mysqli_connect_errno()){
echo "koneksi database gagal : " . mysqli_connect_error();
}else{
	echo "koneksi database berhasil";
}
?>