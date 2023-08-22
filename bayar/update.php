<?php
include "koneksi.php";
$id=$_POST['id'];
$uraian=$_POST['uraian'];
$nominal=$_POST['nominal'];

$query = mysqli_query($koneksi, "update jenis_bayar set uraian='$uraian' , nominal='$nominal' where id='$id'");
header('location:?page=bayar/index');
