<?php
include "koneksi.php";
//menerima data inputan dari file form tambah
$nama = $_POST['nama_013'];
$email = $_POST['email_013'];

$sql ="INSERT INTO tbl_013 VALUES (null,'$nama','$email')";
$hasil = mysqli_query($koneksi,$sql);

if(!$hasil){
    echo "Koneksi tambah mahasiswa gagal";
}
else{
    echo "Eksekusi tambah mahasiswa berhasil<br>";
    echo "<a href= 'data.php'>show data</a>";

}
?>
