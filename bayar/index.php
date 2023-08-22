<?php



include "koneksi.php";

$query = mysqli_query($koneksi, "select *from jenis_bayar");
?>
<h1>Data Jenis Bayar</h1>

<a href="?page=bayar/tambah"><button type="button" class="btn btn-success">Tambah Data</button></a>
<br>
<br>

<table class="table">
    <tr>
<thead class="thead-dark">

        <th>No</th>
        <th>Uraian</th>
        <th>Nominal</th>
       
        <th>Aksi</th>
</thead>    
    </tr>
    <?php
    $no=1;
    while ($data = mysqli_fetch_array($query)) {
    ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $data['uraian'] ?></td>
            <td><?php echo $data['nominal'] ?></td>
            
            <td>
                <a href="?page=bayar/hapus&id=<?php echo $data['id']  ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
                <a href="?page=bayar/edit&id=<?php echo $data['id']  ?>"><button type="button" class="btn btn-info">Edit</button>
</a>
            </td>
        </tr>

    <?php
    }
    ?>
</table>