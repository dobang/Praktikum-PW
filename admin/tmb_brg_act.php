<?php 
include 'config.php';
$nama=$_POST['nama'];
$jenis=$_POST['jenis'];
$modal=$_POST['modal'];
$harga=$_POST['harga'];
$jumlah=$_POST['jumlah'];
$sisa=$_POST['jumlah'];

mysql_query("insert into barang values('','$nama','$jenis','$modal','$harga','$jumlah','$sisa')");
header("location:barang.php");

 ?>