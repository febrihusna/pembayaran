<?php
include "koneksi.php";
$username=$_POST['username'];
$password=$_POST['password'];
$query=mysqli_query($koneksi,"select * from petugas where username='$username'AND password='$password'");
$cek=mysqli_num_rows($query);
//echo $cek;
if($cek>0){
    header('location:home.php');
}
else{
    header('location:index.php');
}
?>