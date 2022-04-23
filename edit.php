<?php
include "koneksi.php";

$id = $_POST['id_013'];
$nama = $_POST['nama_013'];
$email = $_POST['email_013'];

$sql = "UPDATE tbl_013 set nama_013='$nama', email_013='$email' WHERE id_013=$id";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "eksekusi update data mahasiswa gagal";
}
else{
    echo "eksekusi update data  berhasil <br>";
    echo "<a href = 'data.php'>Show Data </a>";
}

?> 
