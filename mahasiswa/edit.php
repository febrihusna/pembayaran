<?php
include "koneksi.php";
$nis = $_GET['nim'];
$query = mysqli_query($koneksi, "select * from mahasiswa where nis='$nim'");
$data = mysqli_fetch_array($query);
?>
<h2>Edit Data</h2>
<form action="?page=mahasiswa/update" method="Post">
    
    <table>
    <tr>
    <td>NIM</td>
    <td>:</td>
    <td><input  class="form-control"   readonly type="text" name="nim"value="<?php echo $data['nim']  ?>"></td>
    </tr>
    <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input class="form-control" type="text" name="nama"value="<?php echo $data['nama']  ?>"></td>
    </tr>
    <tr>
    <td>Fakultas</td>
    <td>:</td>
    <td><input class="form-control" type="text" name="fakultas"value="<?php echo $data['fakultas']  ?>"></td>
    </tr>
    <tr>
    <td>Program Studi</td>
    <td>:</td>
    <td><input class="form-control" type="text" name="prodi"value="<?php echo $data['prodi']  ?>"></td>
    </tr>
    
    </table>
    <button type="submit" class="btn btn-success">Edit</button>
</form>