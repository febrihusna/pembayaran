<H3>Laporan</H3>
<br>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Report</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>
<form action="" method="POST">

    <input id="datepicker" name="awal" width="276" />
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
    <h5>Sampai Tanggal</h5>
    <input id="datepicker1" name="akhir" width="276" />
    <script>
        $('#datepicker1').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>

    <br>
    <button name="proses" type="submit" class="btn btn-primary">Proses</button>

</form>
<?php
if(isset($_POST['proses'])){
    echo 'proses';
  //  $nis= $_POST['nis'];
   // $id_bayar=$_POST['id_bayar'];
//$query=mysqli_query($koneksi,"insert into det_transaksi(nis,id_bayar)values('$nis','$id_bayar')");
}
?>
</html>