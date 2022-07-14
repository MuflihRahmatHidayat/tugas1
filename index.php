<!DOCTYPE html>
<html lang="en">
<head>
    <title>Biodata</title>
</head>
<body>
	<center><h3>TABEL BIODATA</h3>
    <table style="margin-left:auto;margin-right:auto" border="1">
        <tr style="text-align: center;" >
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>No Telpon</th>
            <th>Status</th>
            <th>Pekerjaan</th>
            <th>Jumlah Saudara</th>
            <th>Hobi</th>
			<th>Aksi</th>
        </tr>
        <?php
    	include "koneksi.php";
        $sql = mysqli_query($connect, "SELECT * FROM  bio");
        if (mysqli_num_rows($sql)) {
            $no = 1;
            foreach ($sql as $data) {
        ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['jk'] ?></td>
                    <td><?= $data['agama'] ?></td>
                    <td><?= $data['alamat'] ?></td>
                    <td><?= $data['ttl'] ?></td>
                    <td><?= $data['tlp'] ?></td>
                    <td><?= $data['status'] ?></td>
                    <td><?= $data['pekerjaan'] ?></td>
                    <td><?= $data['jmlsdr'] ?></td>
                    <td><?= $data['hobi'] ?></td>
					<td>
                    <a href="hapus_data.php?id=<?= $data['id']; ?>" class="edit">
                    <i class="ri-delete-bin-line"></i>
                        Del
                    </a> 
                    <br>
                    <a href="edit_data.php?id=<?= $data['id']; ?>" class="edit">
                    <i class="ri-edit-2-line"></i>
                        Edit
                    </a>
                    </td>
                </tr>
                
        <?php
        $no++;
            }
        }
        ?>
    </table>
    <a href="login.php">Logout</a>
   <br>
	</center>
</body>

</html>