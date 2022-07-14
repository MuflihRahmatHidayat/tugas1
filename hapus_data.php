<?php
include "koneksi.php";

$id = $_GET['id'];
$sql = mysqli_query($connect, "DELETE FROM bio WHERE id='$id'");
if ($sql) { ?>
    <script>
        alert('Hapus Data Sukses');
        window.location.href = "index.php";
    </script>
<?php
} else {
    echo "Hapus Data Gagal";
}
?>