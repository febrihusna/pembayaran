<?php
include "koneksi.php";
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$fakultas=$_POST['fakultas'];
$prodi=$_POST['prodi'];
$query=mysqli_query($koneksi,"insert into mahasiswa(nim,nama,fakultas,prodi) values('$nim','$nama','$fakultas','$prodi)");
header('location:?page=mahasiswa/index');
