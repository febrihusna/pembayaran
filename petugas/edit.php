<?php
include "koneksi.php";
$id = $_GET['id'];
$query = mysqli_query($koneksi, "select * from petugas where id='$id'");
$data = mysqli_fetch_array($query);
?>
<h2>Edit Data</h2>
<form action="?page=petugas/update" method="Post">
 <input type="hidden" name="id" value="<?php echo $data['id']?>">   
<table class="table">
    <tr>
    <td>Username</td>
    <td>:</td>
    <td><input  class="form-control" type="text" name="username"value="<?php echo $data['username']?>"></td>
    </tr>
    <tr>
    <td>Password</td>
    <td>:</td>
    <td><input class="form-control" type="text" name="password" value="<?php echo $data['password']    ?>"></td>
    </tr>
    <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input class="form-control" type="text" name="nama_petugas" value="<?php echo $data['nama_petugas']    ?>"></td>
    </tr>
    <tr>
    <td>Level</td>
    <td>:</td>
    <td>
            <select class="form-control" name="level" id="">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            </select>
    </td>
    </tr>
    </table>
    <br>
    <button type="submit" class="btn btn-success">Edit</button>
</form>