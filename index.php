<!doctype html>
<html lang="en">
  <head>
  <style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color:black;
   color: white;
   text-align: center;
}
</style>
  <link rel="shortcut icon" href="favicon.ico">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/custom_budi.css" >
	

	<!-- JS -->
	
	
    <script src="js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>SIM PEMBAYARAN</title>
  </head>
  <body background='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwvlJW5KihCIEWOasL38S8cVyHVJNeIPDb6g&usqp=CAU'>

<!-- <div class="container-fluid">
  <img class="frame img-fluid mx-auto d-block" style="height: 148px; width: auto;" src="img/smk.png">
</div> -->
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
	  <a class="navbar-brand" href="?page=bagan/grap">UMPO<b>app</b></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	    <span class="navbar-toggler-icon"></span>
	  </button>

		<?php 
			session_start();
			$username=$_SESSION['username'];
			//$nama_petugas=$_SESSION['nama_petugas'];
			//echo "Nama".$username;

	   if($_SESSION['username']==""){

				header("location:login.php?pesan=gagal");
			}
			else{
		?>

	  <div class="collapse navbar-collapse" id="collapsibleNavbar">
	    <ul class="navbar-nav mr-auto">
		<li class="nav-item">
	        <a class="nav-link" href="?page=petugas/index">Petugas</a>
	      <li class="nav-item">
	        <a class="nav-link" href="?page=mahasiswa/index">Data Mahasiswa</a>
				</li>
			<li class="nav-item">
	        <a class="nav-link" href="?page=bayar/index">Jenis Bayar</a>
	      </li>
		  <li class="nav-item">
	        <a class="nav-link" href="?page=transaksi/index">Transaksi</a>
	      </li>
	      
					  <li class="nav-item dropdown">
		      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
		        Report
		      </a>
		      <div class="dropdown-menu">
		       
		        
				<a class="dropdown-item" href="?page=report/report_tanggal">Report Tanggal</a>
				<a class="dropdown-item" href="?page=report/c_suratkeluar">Report Per User</a>
				
		      </div>
		  </li>
	      <li class="nav-item">
	        <a class="nav-link" href="logout.php">Logout</a>
	      </li>    
	    </ul>
	    <ul class="navbar-nav navbar-right">
		<li class="nav-item">
	        <a class="nav-link" href=""><?php
			}
				//echo "yanna";
				echo $_SESSION['nama_petugas'];
				//echo $nama_petugas;
			?> </a>
	      </li>
		 
		 </li>
	    </ul>
	  </div> 
		
	</nav>

	<div class="container login">
		<div class="container-fluid login">
		<?php include "isi.php";?>
		</div>
	</div>

	<div class="footer">
  <p>by.Febri Husna </p>
</div>
  </body>
</html>
