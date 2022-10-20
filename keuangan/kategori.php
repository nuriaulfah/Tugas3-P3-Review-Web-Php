<html>
<head>
<title>Dodol.com</title>
</head>
<body>
<h2>modul kategori</h2>
<br/>
<a href="tambah_kategori.php">+ TAMBAH KATEGORI</a>
<br/>
<table border="1">
<tr>
<th>no</th>
<th>nama kategori</th>
<th>OPSI</th>
</tr>
<?php
include 'koneksi.php';
$no = 1;
$query = mysqli_query($koneksi,"select * from kategori");
while($data = mysqli_fetch_array($query))
{
	?>
	<tr>
	<td><?php echo $no++;?></td>
	<td><?php echo $data['nama_kategori']; ?></td>
	<td>
	<a href="edit_kategori.php?id=<?php echo $data['id']; ?>">EDIT</a>
	<a href="hapus_kategori.php?id=<?php echo $data['id']; ?>">HAPUS</a>
	</td>
	</tr>
	<?php
}
?>
</table>
</body>
</html>