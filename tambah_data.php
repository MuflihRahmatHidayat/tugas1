<!DOCTYPE html>
<html>
    <head><title>Tambah Data</title>
</head>
    <body>
        <center><form action="proses_tambah.php" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <select name="jk">
                            <option></option>
                            <option value="Perempuan">Perempuan</option>
                            <option value="Laki-laki">Laki-laki</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td><input type="text" name="agama"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td>Tanggal lahir</td>
                    <td><input type="date" name="ttl"></td>
                </tr>
                <tr>
                    <td>No Telpon</td>
                    <td><input type="text" name="tlp"></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>
                        <select name="status">
                            <option></option>
                            <option value="kawin">Kawin</option>
                            <option value="belum kawin">Belum Kawin</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td><input type="text" name="pekerjaan"></td>
                </tr>
                <tr>
                    <td>Jumlah Saudara</td>
                    <td><input type="int" name="jmlsdr"></td>
                </tr>
                <tr>
                    <td>Hobi</td>
                    <td><input type="text" name="hobi"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="tambah" value="Tambah Data"></td>
                </tr>
            </table>
        </form></center>
    </body>
</html>