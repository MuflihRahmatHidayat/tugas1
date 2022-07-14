<?php

include "koneksi.php";
$id = $_GET['id'];
$nama= $_GET['nama'];
$jeniskelamin = $_GET['jk'];
$agama = $_GET['agama'];
$alamat = $_GET['alamat'];
$tanggal_lahir = $_GET['ttl'];
$tlp =$_GET['tlp'];
$status =$_GET['status'];
$pekerjaan =$_GET['pekerjaan'];
$jmlsdr =$_GET['jmlsdr'];
$hobi =$_GET['hobi'];

$edit = $_GET['edit'];

if ($edit) {
    $sql = mysqli_query($connect, "UPDATE bio
    SET id='$id', nama='$nama',
    jk='$jeniskelamin', agama='$agama',
    alamat='$alamat', ttl='$tanggal_lahir', tlp='$tlp', status='$status', pekerjaan='$pekerjaan',
    jmlsdr='$jmlsdr', hobi='$hobi'
    WHERE id='$id'");
    
    if ($sql) { ?>
    <script>
        alert('Update Data Sukses');
        window.location.href = "index.php";
    </script>
    
<?php
    }else {
        echo "Update Data Gagal";
    }
}
var_dump($sql);
?>