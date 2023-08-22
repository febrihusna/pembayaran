<?php

include "koneksi.php";
?>
<h2>Transaksi</h2>
<form action="" method="POST">
<table class="table">
<tr>
    <td style="width:10%">Nama</td>
    <td>:</td>
    <td>

    <select class="form-control"name="nim" id="">
    <?php
    $query=mysqli_query($koneksi,"select * from mahasiswa");
    while ($mahasiswa = mysqli_fetch_array($query)) {
    ?>
    <option value="<?php echo $mahasiswa['nim'] ?>"><?php echo $mahasiswa['nama'] ?></option>
    <?php
    }
    ?>
    </select>
    </td>
</tr>
<tr>
    <td>Pembayaran</td>
    <td>:</td>
    <td>
    <select class="form-control" name="id_bayar" id="">
    <?php
    $query=mysqli_query($koneksi,"select * from jenis_bayar");
    while ($bayar = mysqli_fetch_array($query)) {
    ?>
    <option value="<?php echo $bayar['id']   ?>"><?php echo $bayar['uraian']   ?></option>
    <?php
    }
    ?>
    </select>
    </td>
</tr>
</table>

<button name="proses" type="submit" class="btn btn-primary">Proses</button>
<button name="selesai" type="submit" class="btn btn-success">Selesai</button>
</form>
<?php
if(isset($_POST['proses'])){
    
    $nim= $_POST['nim'];
    $id_bayar=$_POST['id_bayar'];
    $tanggal=date('d-m-Y');
   $query=mysqli_query($koneksi,"insert into det_transaksi(nim,id_bayar,tanggal)values
   ('$nim','$id_bayar','$tanggal')");
}
if(isset($_POST['selesai'])){
    $query=mysqli_query($koneksi,"update det_transaksi set status='1'");
    /// update nota

    $query=mysqli_query($koneksi,"select * from m_transaksi");
    $lastid=mysqli_num_rows($query);
    $row=$lastid+1;
    $nomor=str_pad($row,3,"0",STR_PAD_LEFT);
    $nota="".$nomor;
    $query=mysqli_query($koneksi,"insert into m_transaksi(nota,tanggal)values('$nota',now())");
    $query=mysqli_query($koneksi,"update det_transaksi set status='1',nota='$nota' where status='0'");

}
?>
<br>
<br>
<table class="table">
    <tr>
<thead class="thead-dark">
<tr>
<th>No</th>
<th>Uraian</th>
<th>Nominal</th>
<th>Aksi</th>
</tr>
<?php
$i=1;
$total=0;
 $query=mysqli_query($koneksi,"SELECT det_transaksi.id,det_transaksi.id_bayar,jenis_bayar.uraian,jenis_bayar.nominal FROM det_transaksi,jenis_bayar WHERE det_transaksi.id_bayar=jenis_bayar.id and det_transaksi.status='0'");
 while($trans=mysqli_fetch_array($query)){
 ?>
 <tr>
 <td><?php echo $i++  ?></td>
 <td><?php echo $trans['uraian']  ?></td>
 <td><?php echo $trans['nominal']  ?></td>
 <td> <a href="?page=transaksi/hapus&id=<?php echo $trans['id']  ?>"><button type="button" class="btn btn-danger">Hapus</button></a></td>
 </tr>
<?php    
$total=$total+$trans['nominal'];
 }
?>
</table>
<h2>Total : <?php echo $total     ?></h2>