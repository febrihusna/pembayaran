<?php
include "koneksi.php";
$uraian=$_POST['uraian'];
$nominal=$_POST['nominal'];

$query=mysqli_query($koneksi,"insert into jenis_bayar(uraian,nominal) values('$uraian','$nominal')");
header('location:?page=bayar/index');
