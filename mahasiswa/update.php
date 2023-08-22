<?php
include "koneksi.php";
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$fakultas = $_POST['fakultas'];
$prodi = $_POST['prodi'];
$query = mysqli_query($koneksi, "update mahasiswa set nama='$nama' , fakultas='$fakultas' , prodi='$prodi' where nim='$nim'");
header('location:?page=mahasiswa/index');
