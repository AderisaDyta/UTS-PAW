<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "db_aderisa";

    $koneksi = mysqli_connect($host,$user,$password,$dbname);
    if(!$koneksi){
        echo "Koneksi GAGAL!!!";
    }

?>
