<h2>Tambah Data</h2>
<form action="?page=petugas/simpan" method="post">
<table class="table">
    <tr>
    <td>Username</td>
    <td>:</td>
    <td><input  class="form-control" type="text" name="username"></td>
    </tr>
    <tr>
    <td>Password</td>
    <td>:</td>
    <td><input class="form-control" type="text" name="password"></td>
    </tr>
    <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input class="form-control" type="text" name="nama_petugas"></td>
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

    <button type="submit" class="btn btn-success">Simpan</button>
</form>