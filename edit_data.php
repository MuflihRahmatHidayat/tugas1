<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>

<?php
include "koneksi.php";
$id = $_GET['id'];
$sql = mysqli_query($connect, "SELECT * FROM bio
WHERE id='$id'");

foreach ($sql as $data => $key) : ?>

<body>
    <center><form action="proses_edit.php" method="GET"><table>
        <tr>
            <td><input type="number" name="id"
        value="<?= $key['id'] ?>" hidden></td>
        </tr>
        <tr>
            <td>Nama </td>
            <td><input type="text" name="nama"
            value="<?= $key['nama'] ?>"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>
                <select name="jk">
                    <option value="Perempuan">Perempuan</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Agama</td>
            <td><input type="text" name="agama"
            value="<?= $key['agama'] ?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat"
            value="<?= $key['alamat'] ?>"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir </td>
            <td><input type="date" name="ttl"
            value="<?= $key['ttl'] ?>"</td>
        </tr>
        <tr>
            <td>No Telpon</td>
            <td><input type="text" name="tlp"
            value="<?= $key['tlp'] ?>"></td>
        </tr>
        <tr>
            <td>Status</td>
            <td>
                <select name="status">
                    <option value="kawin">Kawin</option>
                    <option value="belum kawin">Belum Kawin</option>
                </select>
            </td>
        <tr>
            <td>Pekerjaan</td>
            <td><input type="text" name="pekerjaan"
            value="<?= $key['pekerjaan'] ?>"></td>
        </tr>
        <tr>
            <td>Jumlah Saudara </td>
            <td><input type="number" name="jmlsdr"
            value="<?= $key['jmlsdr'] ?>"</td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td><input type="text" name="hobi"
            value="<?= $key['hobi'] ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="edit"
            value="update Data"></td>
        </tr>
    </table>
</form></center>
    
</body>
<?php endforeach; ?>
</html>