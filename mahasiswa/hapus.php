<?php
include "koneksi.php";
$nim = $_GET['nim'];

$query = mysqli_query($koneksi, "delete from mahasiswa where nim='$nim'");
header('location:?page=mahasiswa/index');
