<?php
include "koneksi.php";
$id=$_POST['id'];
$username=$_POST['username'];
$password=$_POST['password'];
$nama_petugas=$_POST['nama_petugas'];
$level=$_POST['level'];

$query = mysqli_query($koneksi, "update petugas set username='$username' , password='$password',nama_petugas='$nama_petugas',level='$level' where id='$id'");
header('location:?page=petugas/index');
