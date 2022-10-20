<!DOCTYPE html>
<html>
<head>
<title>Dodol.com</title>
</head>
<?php
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
if(!empty($_POST['save'])){

$nama_barang = $_POST['nama_barang'];
$kode_barang = $_POST['kode_barang'];
$QTY = $_POST['QTY'];
$kategori_id = $_POST['kategori_id'];
// menginput data ke database
$query=mysqli_query($koneksi,"insert into barang values('','$nama_barang','$kode_barang','$QTY','$kategori_id')");

if ($query)
{
// mengalihkan halaman kembali
header("location:barang.php");
}
else
{
echo mysqli_error($koneksi);
}
}
$querykategori = "SELECT * FROM kategori";
$resulkategori = mysqli_query ($koneksi,$querykategori);
?>
<body>
<h2>MODULE BARANG</h2>
<br/>
<a href="barang.php">KEMBALI</a>
<br/>
<br/>
<h3>TAMBAH DATA BARANG</h3>
<form method="POST">
<table>
<tr>
<td>nama_barang</td>
<td><input type="text" name="nama_barang"></td>
</tr>
<tr>
<td>kode_barang</td>
<td><input type="text" name="kode_barang"></td>
</tr>
<tr>
<td>QTY_barang</td>
<td><input type="number" name="QTY"></td>
</tr>
<tr>
<td>kategori_barang</td>
<td>
<select name="kategori_id">
<option value="">Pilih</option>
<option value="">Pakaian</option>
<option value="">Elektronik</option>
<?php
while ($datakategori=mysqli_fetch_array($resulkategori))
{
echo "<option value=$datakategori[id_kategori]>$datakategori[nama_kategori]</option>";
}
?>
</select>
</td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="save"></td>
</tr>
</table>
</form>
</body>
</html>