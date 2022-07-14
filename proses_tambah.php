<?php
    include "koneksi.php";

    $nama= $_POST['nama'];
    $jeniskelamin = $_POST['jk'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $tanggal_lahir = $_POST['ttl'];
    $tlp = $_POST['tlp'];
    $status = $_POST['status'];
    $pekerjaan = $_POST['pekerjaan'];
    $jmlsdr = $_POST['jmlsdr'];
    $hobi = $_POST['hobi'];


    $tambah = $_POST['tambah'];

    if ($tambah){
        $sql = mysqli_query($connect, "INSERT INTO bio
        VALUES('', '$nama', '$jeniskelamin','$agama','$alamat','$tanggal_lahir','$tlp','$status','$pekerjaan','$jmlsdr','$hobi')");
        if($sql){?>
            <script>
                alert('Tambah Data Sukses');
                window.location.href = "index.php";
            </script>
    <?php
        }else{
            echo "Tambah Data Gagal";
        }
    }
    
    ?>