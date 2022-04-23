<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        
    </head>
    <body>
        <?php
        include "koneksi.php";
        $id=$_GET['id'];
        $sql = "SELECT * FROM tbl_013 WHERE id_013=$id";
        $hasil = mysqli_query($koneksi, $sql);
        if (!$hasil){
            echo "Query Salah";
        }
        ?>
        <h1>Form tambah data</h1>
        <?php
        while ($row = mysqli_fetch_array($hasil))
        {
        ?>
        <form method="post" action="edit.php">
            <input type="hidden" name="id_013" value="<?php echo $row['id_013']?>">
            Nama: <input type="text" name="nama_013" value="<?php echo $row['nama_013']?>"><br/>
            email: <input type="text" name="email_013" value="<?php echo $row['email_013']?>"><br/>
            <button type="submit">Update</button> 
        </form>
        <?php } ?>
    </body>
</html>