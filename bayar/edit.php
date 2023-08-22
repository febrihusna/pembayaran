<?php
include "koneksi.php";
$id = $_GET['id'];
$query = mysqli_query($koneksi, "select * from jenis_bayar where id='$id'");
$data = mysqli_fetch_array($query);
?>
<h2>Edit Data</h2>
<form action="?page=bayar/update" method="Post">
 <input type="hidden" name="id" value="<?php echo $data['id']?>">   
<table class="table">
    <tr>
    
    <table class="table">
    <tr>
    <td>Uraian</td>
    <td>:</td>
    <td><input  class="form-control" type="text" name="uraian"value="<?php echo $data['uraian']?>"></td>
    </tr>
    <tr>
    <td>Nominal</td>
    <td>:</td>
    <td><input class="form-control" type="text" name="nominal"value="<?php echo $data['nominal']?>"></td>
    </tr>
    </table>
    <br>
    <button type="submit" class="btn btn-success">Edit</button>
</form>