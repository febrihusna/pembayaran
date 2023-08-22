<?php
include "koneksi.php";
$id = $_GET['id'];
echo $id;
$query = mysqli_query($koneksi, "delete from det_transaksi where id='$id'");
header('location:?page=transaksi/index');
