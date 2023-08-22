<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body 
            background='https://www.ciputramedicalcenter.com/wp-content/uploads/2017/04/background-gigi-01-01-01.jpg';
            background-repeat: no-repeat;
            background-size: cover;>

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form method="post" action="">
          <div class="form-group">
            <div class="form-text-group">
              <input name="username" type="text" id="Username"  class="form-control" placeholder="Username" required="required" >
              
            </div>
          </div>
          
          <div class="form-group">
            <div class="form-label-group">
              <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          
         
          <button name="proses" class="btn-primary btn-block">Login</button>
        </form>
        <?php
    if(isset($_POST['proses'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        echo "proses";
        $query=mysqli_query($koneksi,"select * from petugas where username='$username' and password='$password'");
        $cek=mysqli_num_rows($query);
       if($cek>0){
         session_start();
           $data=mysqli_fetch_array($query);
           $_SESSION['username']=$data['username'];
           $_SESSION['nama_petugas']=$data['nama_petugas'];
           $_SESSION['password']=$data['password'];
           
          //echo $username;
         header("location:index.php?page=home");
       }
       else{
         ?>
        <div class="alert alert-danger" role="alert">
       User Password Salah
      </div>
      <?php
       }
    }

?>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
