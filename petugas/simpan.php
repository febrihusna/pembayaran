<?php
include "koneksi.php";
$username=$_POST['username'];
$password=$_POST['password'];
$nama_petugas=$_POST['nama_petugas'];
$level=$_POST['level'];
$query=mysqli_query($koneksi,"insert into petugas(username,password,nama_petugas,level) values('$username','$password','$nama_petugas','$level')");
header('location:?page=petugas/index');
