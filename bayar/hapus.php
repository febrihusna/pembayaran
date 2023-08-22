<?php
include "koneksi.php";
$id = $_GET['id'];
echo $id;
$query = mysqli_query($koneksi, "delete from jenis_bayar where id='$id'");
header('location:?page=bayar/index');
