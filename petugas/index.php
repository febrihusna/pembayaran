<?php



include "koneksi.php";

$query = mysqli_query($koneksi, "select *from petugas");
?>
<h1>Data Petugas </h1>

<a href="?page=petugas/tambah"><button type="button" class="btn btn-success">Tambah Data</button></a>
<br>
<br>

<table class="table">
    <tr>
<thead class="thead-dark">

        <th>No</th>
        <th>Username</th>
        <th>Password</th>
        <th>Nama Petugas</th>
        <th>Level</th>
        <th>Aksi</th>
</thead>    
    </tr>
    <?php
    $no=1;
    while ($petugas = mysqli_fetch_array($query)) {
    ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $petugas['username'] ?></td>
            <td><?php echo $petugas['password'] ?></td>
            <td><?php echo $petugas['nama_petugas'] ?></td>
            <td><?php echo $petugas['level'] ?></td>
            <td>
                <a href="?page=petugas/hapus&id=<?php echo $petugas['id']  ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
                <a href="?page=petugas/edit&id=<?php echo $petugas['id']  ?>"><button type="button" class="btn btn-info">Edit</button>
</a>
            </td>
        </tr>

    <?php
    }
    ?>
</table>