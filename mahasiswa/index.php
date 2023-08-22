<?php



include "koneksi.php";

$query = mysqli_query($koneksi, "select *from mahasiswa");
?>
<h1>Data Mahaiswa </h1>

<a href="?page=mahasiswa/tambah"><button type="button" class="btn btn-success">Tambah Data</button></a>
<br>
<br>

<table class="table">
    <tr>
<thead class="thead-dark">

        <th>NIM</th>
        <th>Nama</th>
        <th>Fakultas</th>
        <th>Program Studi</th>
        
        <th> Aksi</th>
</thead>    
    </tr>
    <?php
    while ($mahasiswa = mysqli_fetch_array($query)) {
    ?>
        <tr>
            <td><?php echo $mahasiswa['nim'] ?></td>
            <td><?php echo $mahasiswa['nama'] ?></td>
            <td><?php echo $mahasiswa['fakultas'] ?></td>
            <td><?php echo $mahasiswa['prodi'] ?></td>
            <td>
                <a href="?page=mahasiswa/hapus&nim=<?php echo $mahasiswa['nim']  ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
                <a href="?page=mahasiswa/edit&nim=<?php echo $mahasiswa['nim']  ?>"><button type="button" class="btn btn-info">Edit</button>
</a>
            </td>
        </tr>

    <?php
    }
    ?>
</table>