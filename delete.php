<?php
include 'koneksi.php';
$id=$_GET['id'];

$sql = "DELETE FROM tbl_013 WHERE id_013=$id";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Delete data mahasiswa gagal";
}
else {
    echo "Data mahasiswa berhasil dihapus <br>";
    echo "<a href='data.php'>Show Data </a>";
}

?>
