<?php
include "koneksi.php";
$id = $_GET['id'];

$query = mysqli_query($koneksi, "delete from petugas where id='$id'");
header('location:?page=petugas/index');
